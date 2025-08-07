<?php

namespace App\Livewire\Dash\Blog;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;


#[Layout('components.layouts.admin')]
#[Title('Blog')]
class Blog extends Component
{
    public function render()
    {
        return view('livewire.dash.blog.blog');
    }
}
