<?php

namespace App\Http\Livewire\Dashboard;

use Filament\Forms;
use App\Models\User;
use Livewire\Component;
use Filament\Forms\Components\Grid;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Forms\Concerns\InteractsWithForms;


class PersonalData extends Component  implements HasForms 
{
    use InteractsWithForms; 

    public User $user;

 
    public function mount(): void
    {
        $this->user= Auth::user();
        $this->form->fill([
            'first_name' => $this->user->first_name,
            'last_name' => $this->user->last_name,
            'phone_number' => $this->user->phone_number,
            'gender' => $this->user->gender,
            'birth_date' => $this->user->birth_date
        ]);
    }
    protected function getFormSchema(): array 
    {
        return [
            Grid::make(2)
            ->schema([
            Forms\Components\TextInput::make('first_name')->label(trans('forms.first_name'))->required(),
            Forms\Components\TextInput::make('last_name')->label(trans('forms.last_name'))->required(),
            ]),
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
        $this->user->update($this->form->getState());
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
