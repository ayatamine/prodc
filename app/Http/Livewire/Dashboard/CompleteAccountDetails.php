<?php

namespace App\Http\Livewire\Dashboard;

use Closure;
use Exception;
use Filament\Forms;
use App\Models\User;
use App\Models\Client;
use Livewire\Component;
use App\Models\Professional;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Forms\Concerns\InteractsWithForms;

class CompleteAccountDetails extends Component implements HasForms
{
    use InteractsWithForms;
    public $company_name;
    public $company_address;
    public $company_country;
    public $company_phone_number;
    public $company_email;
    public $company_field;
    public $company_website_url;
    public $company_presenter_name;
    public $company_presenter_phone_number;
    public $company_presenter_email;
    public $company_presenter_job;
    public User $user;
    public $account_type=null;
    public bool $conditions=false;
    public bool $is_freelancer=false;
    public bool $is_form2_submitted=false;
    public function mount(): void
    {
        $this->user = Auth::user();
        $this->accountTypeForm->fill([
            'account_type' => $this->account_type,
        ]);
    }
    protected function getFormModel(): User
    {
        return $this->user;
    }

    protected function getProfessionalTypeFormSchema(): array
    {
        return [
            Forms\Components\Radio::make('account_type')
            ->label('')
            // ->label(trans('frontend.account_type'))
            ->options([
                'freelancer' => trans('frontend.pro_freelancer'),
                'company_single_person' => trans('frontend.company_single_person'),
                'company_multiple_person' => trans('frontend.company_multiple_person')
            ])
            ->reactive()
            ->afterStateUpdated(function (Closure $set, $state) {
               if($state == 'freelancer') $this->is_freelancer = true;
               else $this->is_freelancer = false;
            })
        ];
    }
 
    protected function getCompanyInfoFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('company_name')->string()->required()->label(trans('frontend.company.name')),
            Forms\Components\TextInput::make('company_address')->string()->required()->label(trans('frontend.company.address')),
            Forms\Components\TextInput::make('company_country')->string()->required()->label(trans('frontend.company.country')),
            Forms\Components\TextInput::make('company_phone_number')->string()->required()->numeric()->label(trans('frontend.company.phone_number')),
            Forms\Components\TextInput::make('company_email')->label(trans('frontend.company.email'))->email()->unique(table: Professional::class),
            Forms\Components\TextInput::make('company_field')->string()->required()->label(trans('frontend.company.field')),
            Forms\Components\TextInput::make('company_website_url')->label(trans('frontend.company.website_url')),
        ];
    }
    protected function getPresenterInfoFormSchema():array
    {
        return [
            Forms\Components\TextInput::make('company_presenter_name')->string()->label(trans('frontend.company.presenter_name'))->unique(),
            Forms\Components\TextInput::make('company_presenter_phone_number')->numeric()->required()->label(trans('frontend.company.presenter_phone_number')),
            Forms\Components\TextInput::make('company_presenter_email')->email()->label(trans('frontend.company.presenter_email'))->unique(),
            Forms\Components\TextInput::make('company_presenter_job')->string()->required()->label(trans('frontend.company.presenter_job')),
        ];
    }
    protected function getForms(): array 
    {
        return [
            'accountTypeForm' => $this->makeForm()
                ->schema($this->getProfessionalTypeFormSchema()),
            'companyInfoForm' => $this->makeForm()
                ->schema($this->getCompanyInfoFormSchema()),
            'presenterInfoForm' => $this->makeForm()
                ->schema($this->getPresenterInfoFormSchema()),
        ];
    } 
    public function save_form2(){
        $this->is_form2_submitted = true;
    }
    public function save()
    {
        try {
            $data = $this->accountTypeForm->getState();
            if($data['account_type'] == 'freelancer')
            {
                $this->user->professional()->update(['account_type'=>'freelancer']);
            }
            else{
                if($this->conditions)
                {  
                    $this->user->professional()->update($this->companyInfoForm->getState());  
                    $this->user->professional()->update($this->presenterInfoForm->getState());  
                }
            }
            Notification::make()
                ->title(trans('frontend.updated_successfully'))
                ->success()
                ->send();
            return redirect()->route('dashboard');
        } catch (Exception $ex) {
            Notification::make()
                ->title($ex->getMessage())
                ->danger()
                ->send();
        }
    }

    public function render()
    {
        return view('livewire.dashboard.complete-account-details')->extends('layouts.app');
    }
}
