<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\PostComment;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Forms\Concerns\InteractsWithForms;

class BlogDetail extends Component implements HasForms
{
    use InteractsWithForms;
    public $post;
    public $content, $commenter_name, $commenter_email;
    public $related_posts;

    protected $rules = [
        'commenter_name' => 'required|min:4',
        'commenter_email' => 'required|email',
        'content' => 'required|min:30|max:28777215'
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function mount($post)
    {
        $this->post = $post;
        $related_posts =   Post::with('postcategory:id,slug,title,title_'.app()->getLocale())->publishable()
        ->select('id','title','slug','created_at','post_category_id','image')
        ->whereHas('postcategory',function($query) {
                $query->whereId( $this->post->post_category_id);
                
        })
        ->orWhere('title','like','%'.$this->post->title.'%')
        ->latest()
        ->take(4)->get();
    }
    public function save()
    {
        // dd($this->form->getState());
        try {
            $this->validate();
            $comment = PostComment::create([
                'content' => $this->content,
                'commenter_name' => $this->commenter_name,
                'commenter_email' => $this->commenter_email,
                'post_id'=>$this->post->id
            ]);
            // array_push($this->post->comments,[
            //     'content' => $this->content,
            //     'commenter_name' => $this->commenter_name,
            //     'commenter_email' => $this->commenter_email,
            //     'post_id'=>$this->post->id
            // ]);
            Notification::make()
                ->title(trans('frontend.created_successfully'))
                ->success()
                ->duration(7000)
                ->send();
            //TODO: send admin notification
            return back();
        } catch (\Exception $ex) {
            Notification::make()
                ->title($ex->getMessage())
                ->danger()
                ->duration(7000)
                ->send();
        }
    }
    public function render()
    {
        return view('livewire.blog-detail')->layout('blade');
    }
}
