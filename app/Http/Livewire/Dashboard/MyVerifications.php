<?php

namespace App\Http\Livewire\Dashboard;

use Filament\Forms;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Forms\Concerns\InteractsWithForms;

class MyVerifications extends Component implements HasForms
{
    use InteractsWithForms, WithFileUploads;

    public User $user;
    public $identity_card_front,$identity_card_back,$identity_card_holded;

    protected function getFormModel(): User
    {
        return $this->user;
    }
    public function updateIdentityCardFront(){
        $this->validate([
            'photo' => 'image|max:2048', // 2MB Max
        ]);
    }
    public function updateIdentityCardBack(){
        $this->validate([
            'photo' => 'image|max:2048', // 2MB Max
        ]);
    }
    public function updateIdentityCardBoth(){
        $this->validate([
            'photo' => 'image|max:2048', // 2MB Max
        ]);
    }
    public function mount(): void
    {
        $this->user= Auth::user();
        // $this->form->fill([
        // ]);
    }
    public function apply(){
        try {

            $id_card_front = 'id_card_front-'.auth()->user()->first_name.'-'.auth()->user()->id.'-'.random_int(200,2580).'.png';
            $id_card_back = 'id_card_back-'.auth()->user()->first_name.'-'.auth()->user()->id.'-'.random_int(200,2580).'.png';
            $id_card_holded = 'id_card_holded-'.auth()->user()->first_name.'-'.auth()->user()->id.'-'.random_int(200,2580).'.png';
            
            $this->identity_card_front->storeAs('/account_verifications/', $id_card_front, $disk = 'public');
            $this->identity_card_back->storeAs('/account_verifications/', $id_card_front, $disk = 'public');
            $this->identity_card_holded->storeAs('/account_verifications/', $id_card_holded, $disk = 'public');
            
            auth()->user()->update([
                'id_card_front'=>$id_card_front,
                'id_card_back'=>$id_card_back,
                'id_card_holded'=>$id_card_holded,
            ]);

            Notification::make()
                ->title(trans('frontend.applied_successfully'))
                ->success()
                ->duration(7000)
                ->send();
            //TODO: send admin notification of apply
            return redirect()->route('dashboard');
        }
                catch(\Exception $ex){
                    Notification::make()
                    ->title($ex->getMessage())
                    ->danger()
                    ->duration(7000)
                    ->send();
        }
        
    }
    public function render()
    {
        return view('livewire.my-verifications')->extends('layouts.dashboard');
    }
}
