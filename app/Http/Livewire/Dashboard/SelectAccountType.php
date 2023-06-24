<?php

namespace App\Http\Livewire\Dashboard;

use Exception;
use Filament\Forms;
use App\Models\User;
use App\Models\Client;
use Livewire\Component;
use App\Models\Professional;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Forms\Concerns\InteractsWithForms;

class SelectAccountType extends Component implements HasForms
{
    use InteractsWithForms;
    public $account_type = '';
    public User $user;
    public function mount(): void
    {
        $this->user = auth()->user();
        $this->form->fill([
            'account_type' => $this->account_type,
        ]);
    }
    protected function getFormSchema(): array
    {
        return [
            Forms\Components\Select::make('account_type')->label(trans('forms.account_type'))
                ->options(
                    [
                        'client' => trans('frontend.client'),
                        'professional' => trans('frontend.professional'),
                    ]
                ),
        ];
    }
    public function save(): void
    {
        try {
            if ($this->account_type == 'client') {
                $client = new Client();
                $this->user->client()->save($client);
            } else {
                $professional = new Professional();
                $this->user->professional()->save($professional);
            }
            Notification::make()
                ->title(trans('frontend.updated_successfully'))
                ->success()
                ->send();
            return redirect()->route('dashboard');
        } catch (Exception $ex) {
            Notification::make()
                ->title(trans('frontend.inernal_error'))
                ->danger()
                ->send();
        }
    }
    public function render()
    {
        return view('livewire.dashboard.select-account-type')->extends('layouts.dashboard');
    }
}
