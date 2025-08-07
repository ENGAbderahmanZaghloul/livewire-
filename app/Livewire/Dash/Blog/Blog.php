<?php

namespace App\Livewire\Dash\Blog;

use App\Models\BlogPost;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;


#[Layout('components.layouts.admin')]
#[Title('Blog')]
class Blog extends Component
{
    public $posts;
    public function mount()
    {
        $this->posts = BlogPost::all();
    }
    public function render()
    {
        return view('livewire.dash.blog.blog',['posts'=>$this->posts]);
    }
}
