<?php

namespace App\Livewire\Dash\Blog;

use App\Models\BlogPost;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Attributes\Validate;

#[Title('create article')]
class Post extends Component
{
    #[Validate(['required', 'min:2', 'max:10'])]
    public $title;
    #[Validate(['required', 'min:2', 'max:30'])]
    public $content;
    #[Validate(['required'])]
    public $status = 'published';
    #[Validate(['required'])]
    public $type = 'reading';
    #[Validate(['required'])]
    public $level = 'beginner';

    public function submit()
    {
        $this->validate();
        BlogPost::create([
            'title' => $this->title,
            'content' => $this->content,
            'status' => $this->status,
            'type' => $this->type,
            'level' => $this->level,
        ]);
        $this->reset(['title', 'content', 'status', 'type', 'level']);
    }

    public function render()
    {
        return view('livewire.dash.blog.post');
    }
}
