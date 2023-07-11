<?php

namespace App\Http\Livewire;

use Forms;
use App\Models\Job;
use Livewire\Component;
use App\Models\Speciality;
use Forms\Components\Select;
use Livewire\WithPagination;
use App\Models\AgainstReport;
use App\Models\Project as Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Filament\Notifications\Notification;

class Services extends Component
{
    use WithPagination;

    protected $services;
    public $search = '';
    public $sort = 'newest';
    public $report_description = [];
    public $jobs_categories=[];
    public $render_all_jobs=false;

    protected $listeners = ['reportService' => 'reportService'];

    // public function mount()
    // {
    //     $this->services = Service::published()->open()
    //         ->with('client.user:id,first_name,last_name,profile_photo_path')
    //         ->when($this->search, function ($query) {
    //             $query->where('title', 'like', '%' . $this->search . '%')
    //                 ->orWhere('desciption', 'like', '%' . $this->search . '%');
    //         })
    //         ->paginate(10);
    // }
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function updatejobscategories()
    {
        if(!is_array($this->jobs_categories)) return;
        $this->jobs_categories = array_filter($this->jobs_categories,function($job){
            return $job !=false;
        });
    }
    public function reportService(Service $service)
    {
        try {
            $exist =AgainstReport::where('user_id',Auth::id())->whereReportableId($service->id)->first();
            if($exist){
                Notification::make()
                ->title(trans('frontend.already_reported',['type'=>trans('frontend.theservice')]))
                ->warning()
                ->duration(7000)
                ->send();
                return;
            }
            $service->against_reports()->create([
                'description' => $this->report_description[$service->id]
            ]);
   
            Notification::make()
                ->title(trans('frontend.reported_successfully'))
                ->success()
                ->duration(7000)
                ->send();

           
        } catch (\Exception $ex) {
            Notification::make()
                ->title($ex->getMessage())
                ->danger()
                ->duration(7000)
                ->send();
        }
    }
    public function paginationView()
    {
        return 'livewire.custom-pagination2';
    }
    public function render()
    {
        $this->jobs_categories = array_filter($this->jobs_categories,function($job){
            return $job !=false;
        });
        $services = Service::published()->open()
        ->with('client.user:id,first_name,last_name,profile_photo_path')
        ->when($this->search, function ($query) {
            $query->whereLike('title',$this->search)
                ->orWhere('description', 'like', '%' . $this->search . '%');
        })
        ->when($this->jobs_categories,function($query,$jobs_categories){
            return $query->whereIn('job_id',$jobs_categories);
        })
        ->when($this->sort,function($query,$sort){
            return $sort=='newest' ? $query->latest() : $query->oldest();
        })
        ->paginate(2);
       //first jobs to fetch
        $jobs_to_list = Job::select('id','title','title_ar','title_fr')->latest()->skip(0)->take(6)->get()->toArray();
        //rest of jobs
        $specialities =null;
        if($this->render_all_jobs){
            // $specialities = Cache::remember('jobs', 540, function () {
            //     return Speciality::with('jobs:id,title,title_ar','title_fr')->get();
            // });
            $specialities = Cache::remember('jobs', 540, function () {
                return Speciality::with('jobs')->withCount('jobs')
                ->orderBy('jobs_count', 'desc')->get()->toArray();
            });
        }
        return view('livewire.services', [
            'services' => $services,
            'jobs_to_list'=>$jobs_to_list,
            'specialities'=>$specialities
        ])->extends('layous.app');
    }
    ///////////////////forms
    // protected function getCompanyInfoFormSchema(): array
    // {
    //     return [
    //         Select::make({{trans('')}})
    //         ->multiple()
    //         ->options([
    //             'tailwind' => 'Tailwind CSS',
    //             'alpine' => 'Alpine.js',
    //             'laravel' => 'Laravel',
    //             'livewire' => 'Laravel Livewire',
    //         ])
    //     ];
    // }
}
