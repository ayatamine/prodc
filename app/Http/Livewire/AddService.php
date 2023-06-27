<?php

namespace App\Http\Livewire;

use Filament\Forms;
use App\Models\User;
use App\Models\Project;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Forms\Concerns\InteractsWithForms;

class AddService extends Component implements HasForms
{
    use InteractsWithForms;

    public Project $project;
    public $images;
    public $questios;

    public function mount(): void
    {
        $this->project = new Project();
        $this->form->fill([
            'title'=>$this->project->title,
            'desctiption'=>$this->project->desctiption,
        ]);
    }
    protected function getFormSchema(): array
    {
        return [
            // 'title',
            // 'description',
            // 'is_open',
            // 'duration',
            // 'timeline_point',
            // 'min_budget',
            // 'max_budget',
            // 'real_amount',
            // 'professional_id',
            // 'client_id',
            Forms\Components\TextInput::make('title')->required()->label(trans('forms.services.title'))->rules(['required', 'max:255']),
            Forms\Components\Textarea::make('description')->label(trans('forms.services.description'))->rules(['required', 'max:16777215'])->hint(trans('forms.services.description_hint')),
            Forms\Components\FileUpload::make('images')->imagePreviewHeight('100')->label(trans('forms.services.images'))
                ->multiple()
                ->minFiles(1)
                ->maxFiles(5),
            Forms\Components\Section::make(trans('forms.services.personalize'))
                ->id('personalize-service')
                ->schema([
                    Forms\Components\Repeater::make('questions')
                    ->label(trans('forms.services.other_questions'))
                    ->createItemButtonLabel(trans('forms.services.add_question'))
                    ->schema([
                        Forms\Components\TextInput::make('question')->label(trans('forms.thequestion')),
                        Forms\Components\Toggle::make('is_required')->label(trans('forms.services.required'))->inline()

                    ])
                ])
                ->collapsible()
                ->collapsed()

                ,
          

        ];
    }
    protected function getFormModel(): Project
    {
        return $this->project;
    }
    public function save(): void
    {
        dd($this->form->getState());
        $this->user->update($this->form->getState());
        // $skills = $this->form->getState()['skills'];
        // if(count($skills)) $this->user->skills()->sync($skills);
        Notification::make()
            ->title(trans('frontend.updated_successfully'))
            ->success()
            ->duration(7000)
            ->send();
        //TODO: send admin notification
    }
    public function render()
    {
        return view('livewire.add-service')->extends('layouts.app');
    }
}
