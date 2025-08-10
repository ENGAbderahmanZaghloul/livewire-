<?php

namespace App\Livewire\Dash\Blog;

use App\Models\BlogPost;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Lazy;

#[Lazy]
#[Layout('components.layouts.admin')]
#[Title('Blog')]
class Blog extends Component
{
    public $postId ;
    public $search ='';
    public $status ='';
    public $type ='';
    public $level ='';
    public $title ='';
    public $content ='';
    public $show = false;
// public function mount (){
//     sleep(1);
// }
    protected $listeners = ['filterUpdated' => 'updateFilters'];

    public function updateFilters($filter)
    {
        $this->search = $filter['search'];
        $this->status = $filter['status'];
        $this->type = $filter['type'];
        $this->level = $filter['level'];
    }

    public function showPost(BlogPost $post){
        $this->show = true;
        $this->postId = $post->id;
        $this->title = $post->title;
        $this->content = $post->content;
        $this->status = $post->status;
        $this->type = $post->type;
        $this->level = $post->level;

    }

    public function updatePost(){
        // to get the id you open
        $post = BlogPost::findOrFail($this->postId);
        $post->update([
            'title' => $this->title,
            'content' => $this->content,
            'status' => $this->status,
            'type' => $this->type,
            'level' => $this->level,
        ]);
        $this->show = false;
    }

    public function deletePost(BlogPost $post){
        $post->delete();

    }
    public function render()
    {
        $posts = BlogPost::query()
            ->when($this->search, fn($q) =>
                $q->where('title', 'like', '%' . $this->search . '%')
                ->orWhere('content', 'like', '%' . $this->search . '%')
            )
            ->when($this->status, fn($q) => $q->where('status', $this->status))
            ->when($this->type, fn($q) => $q->where('type', $this->type))
            ->when($this->level, fn($q) => $q->where('level', $this->level))
            ->latest()
            ->get();

        return view('livewire.dash.blog.blog', [
            'posts' => $posts
        ]);
    }
}
