<?php

namespace App\Livewire;

use App\Livewire\Dash\Blog\Blog;
use App\Models\BlogPost;
use Livewire\Component;
use Livewire\Attributes\Lazy;
#[Lazy]
class Product extends Component
{
    public $posts;
    public function mount()
    {
        sleep(3);
        $this->posts = BlogPost::all();
    }
    public function render()
    {
        return view('livewire.product',['posts'=>$this->posts]);
    }
}
