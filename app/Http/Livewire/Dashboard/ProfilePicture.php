<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Livewire\WithFileUploads;
use Filament\Notifications\Notification;

class ProfilePicture extends Component
{
    
    use WithFileUploads;
    public $profile_photo_path;

  
    public function updatedProfilePhotoPath($value){
      
             $this->submit();
           
    }
    public function submit(){
        try
        {
        $this->validate([
            'profile_photo_path' => 'mimes:jpeg,png,jpg,webp|max:2048', // 2MB Max
        ]);
       
        $profile_photo_path_name = 'ppic-'.fullName().'-'.auth()->user()->id.'-'.random_int(200,2580).'.'.$this->profile_photo_path->getClientOriginalExtension();
        
        $this->profile_photo_path->storeAs('/profile_pictures/', $profile_photo_path_name, $disk = 'public');
        
        auth()->user()->update([
            'profile_photo_path'=>'profile_pictures/'.$profile_photo_path_name,
        ]);
        
        Notification::make()
            ->title(trans('frontend.updated_successfully'))
            ->success()
            ->duration(7000)
            ->send();
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
        return view('livewire.dashboard.profile-picture');
    }
}
