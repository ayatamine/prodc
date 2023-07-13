<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\PostCategory;
use Illuminate\Support\Facades\Cache;
use Livewire\WithPagination;

class Blog extends Component
{
    use WithPagination;
    public $post_categories;
    
    public function paginationView()
    {
        return 'livewire.custom-pagination2';
    }
    public function render()
    {
        // $post_categories = Cache::remember('post_categories', 540, function () {
        //     return PostCategory::latest()->get();
        // });
        // $posts = Cache::remember('posts', 600, function () {
            $posts = Post::with('postcategory:id,slug,title,title_'.app()->getLocale())->publishable()
            ->select('id','title','slug','created_at','content','post_category_id','image')
            ->whereHas('language',function($query){
                    $query->whereLabel(app()->getLocale());
            })
            ->when(request()->has('category'),function($query) {
                    $query->whereHas('postcategory',function($query){
                        $query->where('slug','like','%'.request()->query()['category']);
                    });
            })
            ->latest()->paginate(3);
        // });
            
        return view('livewire.blog',[
            'posts' =>$posts
        ])->layout('blog');
    }
}
