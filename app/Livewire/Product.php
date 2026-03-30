<?php

namespace App\Livewire;

use App\Livewire\Dash\Blog\Blog;
use App\Models\BlogPost;
use Livewire\Component;

class Product extends Component
{
    public $posts;
    public function mount()
    {
        $this->posts = BlogPost::all();
    }
    public function render()
    {
        return view('livewire.product',['posts'=>$this->posts]);
    }
}
