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
        $this->user = Auth::user();
        $this->form->fill([
            'job_id' => $this->user->job_id,
            'job_position_title' => $this->user->job_position_title,
            'bio' => $this->user->bio,
            'website_url' => $this->user->professional()?->first()?->website_url,
            'work_days' => $this->user->professional()?->first()?->work_days,
            // 'skills'=>$this->user->skills
        ]);
    }
    protected function getFormSchema(): array
    {
        $form = [
            Grid::make(2)
                ->schema([
                    Forms\Components\Select::make('job_id')->label(trans('forms.job'))
                        ->options(Job::all()->pluck('title', 'id'))
                        ->searchable(),
                    Forms\Components\TextInput::make('job_position_title')->label(trans('forms.job_position_title'))->required(),
                ]),
            Forms\Components\Textarea::make('bio')->label(trans('forms.bio')),
            Forms\Components\Select::make('skills')->label(trans('forms.skills'))
                ->relationship('skills', 'name')
                ->multiple()
                ->preload()

            // ->options(Skill::all()->pluck('name', 'id'))
            // ->searchable(),
        ];
        if (auth()->user()->professional()->first()) {
            
            array_push(
                $form,
                Forms\Components\TextInput::make('website_url')->activeUrl()->label(trans('forms.website_url')),
                Forms\Components\Repeater::make('work_days')->label(trans('forms.work_days'))
                    ->schema([
                        Forms\Components\Select::make('day')->label(trans('forms.day'))
                            ->options([
                                'sunday' => trans('forms.week_days.sunday'),
                                'monday' => trans('forms.week_days.monday'),
                                'tuesday' => trans('forms.week_days.tuesday'),
                                'wednesday' => trans('forms.week_days.wednesday'),
                                'thursday' => trans('forms.week_days.thursday'),
                                'friday' => trans('forms.week_days.friday'),
                                'saturday' => trans('forms.week_days.saturday'),
                            ])
                            ->required(),
                        Forms\Components\TimePicker::make('time_from')->label(trans('forms.time_from'))->required(),
                        Forms\Components\TimePicker::make('time_to')->label(trans('forms.time_to'))->required(),

                    ])
                    ->columns(3)
            );
        }
        return $form;
    }
    protected function getFormModel(): User
    {
        return $this->user;
    }
    public function save(): void
    {
        if(array_key_exists('website_url',$this->form->getState()))
        {
            auth()->user()->professional()->first()->update([
                'website_url'=>$this->form->getState()['website_url'],
                'work_days'=>$this->form->getState()['work_days']
            ]);
            unset($this->form->getState()['website_url']);
            unset($this->form->getState()['work_days']);

        }
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
