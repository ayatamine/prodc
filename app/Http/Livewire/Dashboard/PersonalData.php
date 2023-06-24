<?php

namespace App\Http\Livewire\Dashboard;

use Filament\Forms;
use Livewire\Component;
use App\Models\Professional;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Forms\Concerns\InteractsWithForms;


class PersonalData extends Component  implements HasForms 
{
    use InteractsWithForms; 

    public Professional $professional;

 
    public function mount(): void
    {
        $this->professional= Auth::guard('professional')->user();
        $this->form->fill([
            'first_name' => $this->professional->first_name,
            'last_name' => $this->professional->last_name,
            'phone_number' => $this->professional->phone_number,
            'gender' => $this->professional->gender,
            'birth_date' => $this->professional->birth_date
        ]);
    }
    protected function getFormSchema(): array 
    {
        return [
            Forms\Components\TextInput::make('first_name')->label(trans('forms.first_name'))->required(),
            Forms\Components\TextInput::make('last_name')->label(trans('forms.last_name'))->required(),
            Forms\Components\TextInput::make('phone_number')->label(trans('forms.phone_number')),
            Forms\Components\Select::make('gender')->label(trans('forms.gender'))
            ->options(
                [
                    'male'=>trans('forms.male'),
                    'female'=>trans('forms.female'),
                ]
            ),
            Forms\Components\DatePicker::make('birth_date')->label(trans('forms.birth_date')),
        ];
    }
    public function save(): void
    {
        $this->professional->update($this->form->getState());
        Notification::make() 
        ->title(trans('frontend.updated_successfully'))
        ->success()
        ->send(); 
    }
    public function render()
    {
        return view('livewire.personal-data')->extends('layouts.dashboard');
    }
}
