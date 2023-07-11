<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Nnjeim\World\World;
use Illuminate\Support\Facades\Cache;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms;
class Categories extends Component implements HasForms
{
    use InteractsWithForms;

    public $specialities;
    public $search, $country,$countries;
    public function mount($specialities)
    {
        $this->specialities = $specialities;
        $countries_list = Cache::rememberForever('countries_list', function () {
            return World::countries()->data;
        });
        foreach ($countries_list as $country) {
            $this->countries[$country['id']] =  $country['name'];
        }
    }
    protected function getFormSchema(): array
    {
        return [
            // Forms\Components\Select::make('country')
            //     // ->label(trans('frontend.company.country'))
            //     ->options(
            //         $this->countries
            //     )
        ];
    }
    public function search()
    {
        return redirect()->route('professionals.index',['search'=>$this->search,'country'=>$this->country]);
    }

    public function render()
    {
        return view('livewire.categories');
    }
}
