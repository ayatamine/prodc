<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Filament\Forms;
use Livewire\Component;
use Nnjeim\World\World;
use App\Models\Speciality;
use App\Models\Professional;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Cache;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;

class Professionals extends Component implements HasForms
{
    use WithPagination, InteractsWithForms;

    protected $professionals;
    public $search = '';
    public $sort = 'newest';
    public $render_all_jobs=false;
    public $jobs_categories=[];
    public $other_properties=[];
    public $stars_count=0;
    public $countries;
    public $country;

    public function mount(){
      
        $countries_list = Cache::rememberForever('countries_list', function () {
            return World::countries()->data;
        });
        foreach($countries_list as $country)
        {
            $this->countries[$country['id']] =  $country['name'];
        }
        
    }
    protected function getFormSchema(): array
    {
        return [
            Forms\Components\Select::make('country')->label(trans('frontend.company.country'))
                        ->options(
                            $this->countries
                        )->searchable(),
        ];
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
 
    public function paginationView()
    {
        return 'livewire.custom-pagination2';
    }
    public function updatejobscategories()
    {
        if(!is_array($this->jobs_categories)) return;
        $this->jobs_categories = array_filter($this->jobs_categories,function($job){
            return $job !=false;
        });
    }
    public function updatingCountry($value){
        dd($value);
    }
    public function render()
    {

        $professionals = Professional::with('user')
        ->withSum('reviews','rating')
        ->withCount('reviews')
        ->when($this->search, function ($query) {
            $query->whereHas('user', function ($query){
               $query->whereLike('first_name',$this->search)
               ->orWhere('last_name', 'like', '%' . $this->search . '%');
            });
                
        })
        ->when($this->jobs_categories,function($query,$jobs_categories){
            $query->whereHas('user', function ($query) use ($jobs_categories) {
                $query->whereIn('job_id', $jobs_categories);
            });
        })
        ->when($this->stars_count > 0,function($query){
            $query->join('reviews', 'professionals.id', '=', 'reviews.professional_id')
            ->groupBy('professionals.id')
            ->havingRaw('AVG(reviews.rating) >= ?', [$this->stars_count]);
        })
        ->when( $this->form->getState()['country'],function($query){
            dd(World::countries([
                'filters' => [
                    'id' => $this->form->getState()['country'],
                ]
            ]));
            // return $sort=='newest' ? $query->latest() : $query->oldest();
        })
        ->when($this->sort,function($query,$sort){
            return $sort=='newest' ? $query->latest() : $query->oldest();
        })
        ->paginate(3);

        $jobs_to_list = Job::select('id','title','title_ar','title_fr')->latest()->skip(0)->take(6)->get()->toArray();
        $specialities =null;
        if($this->render_all_jobs){
            // $specialities = Cache::remember('jobs', 540, function () {
            //     return Speciality::with('jobs:id,title,title_ar','title_fr')->get();
            // });
            $specialities = Cache::remember('jobs', 540, function () {
                return Speciality::with('jobs')->get()->toArray();
            });
        }
        return view('livewire.professionals', [
            'professionals' => $professionals,
            'jobs_to_list'=>$jobs_to_list,
            'specialities'=>$specialities
        ])->extends('layous.app');
    }
}
