<?php

namespace App\Http\Livewire;

use Filament\Forms;
use Livewire\Component;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;

class ServiceDetails extends Component implements HasForms
{
    use InteractsWithForms;
    
    public $service;
    public $first_step,$second_step,$third_step,$fourth_step =false;
    public $amount,$professional_id,$project_id,$delivery_duration,$content,$attachements;
    public $your_credit=0;

    public $sort='newest';
    public function mount($service)
    {
        $this->$service = $service;
        switch ($service->timeline_point) {
            case 'published':
                $this->second_step =true;
                break;
            case 'processing':
                $this->third_step =true;
            
            case 'finished':
                $this->fourth_step =true;
            
            default:
                $this->first_step=false;
                $this->second_step =false;
                $this->third_step =false;
                $this->fourth_step =false;
                break;
        }
    }
    protected function getFormSchema(): array
    {
        return [
            Forms\Components\Textarea::make('description')->label(trans('forms.services.description'))->rules(['required', 'max:16777215'])->hint(trans('forms.services.description_hint')),
            Forms\Components\FileUpload::make('attachements')
            ->imagePreviewHeight('100')->label(trans('forms.attached_files'))
            ->directory('services/offers')
            ->multiple()
            ->maxFiles(5),
        ];
}
    public function addOffer(){
        
    }

    public function render()
    {
        return view('livewire.service-details');
    }
}
