<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Job;
use Filament\Forms;
use App\Models\User;
use App\Models\Skill;
use Livewire\Component;
use Filament\Forms\Components\Grid;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Forms\Concerns\InteractsWithForms;

class WebsitePersonalData extends Component  implements HasForms 
{
    use InteractsWithForms; 

    public User $user;

 
    public function mount(): void
    {
        $this->user= Auth::user();
        $this->form->fill([
            'job_id' => $this->user->job_id,
            'job_position_title' => $this->user->job_position_title,
            'bio' => $this->user->bio,
            // 'skills'=>$this->user->skills
        ]);
    }
    protected function getFormSchema(): array 
    {
        return [
            Grid::make(2)
            ->schema([
            Forms\Components\Select::make('job_id')->label(trans('forms.job'))
                                    ->options(Job::all()->pluck('title', 'id'))
                                    ->searchable(),
            Forms\Components\TextInput::make('job_position_title')->label(trans('forms.job_position_title'))->required(),
            ]),
            Forms\Components\Textarea::make('bio')->label(trans('forms.bio')),
            Forms\Components\Select::make('skills')->label(trans('forms.skills'))
                                     ->relationship('skills','name')
                                    ->multiple()
                                    ->preload()

                                    // ->options(Skill::all()->pluck('name', 'id'))
                                    // ->searchable(),
        ];
    }
    protected function getFormModel(): User 
    {
        return $this->user;
    } 
    public function save(): void
    {
        $this->user->update($this->form->getState());
        // $skills = $this->form->getState()['skills'];
        // if(count($skills)) $this->user->skills()->sync($skills);
        Notification::make() 
        ->title(trans('frontend.updated_successfully'))
        ->success()
        ->duration(7000) 
        ->send(); 
    }
    public function render()
    {
        return view('livewire.website-personal-data')->extends('layouts.dashboard');
    }
}
