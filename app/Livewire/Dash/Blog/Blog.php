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
    public $search ='';
    public $status ='';
    public $type ='';
    public $level ='';

    protected $listeners = ['filterUpdated' => 'updateFilters'];


    public function updateFilters($filter)
    {
        $this->search = $filter['search'];
        $this->status = $filter['status'];
        $this->type = $filter['type'];
        $this->level = $filter['level'];
    }

    public function mount()
    {
        // $this->posts = BlogPost::all();
        $this->posts = BlogPost::query()
        ->when($this->search, fn($q) => $q->where('title', 'like', "%{$this->search}%")
        ->orWhere('content', 'like', "%{$this->search}%"))
        ->when($this->status, fn($q) => $q->where('status', $this->status))
        ->when($this->type, fn($q) => $q->where('type', $this->type))
        ->when($this->level, fn($q) => $q->where('level', $this->level))
        ->latest()
        ->get();
    }
    public function render()
    {
        return view('livewire.dash.blog.blog',['posts'=>$this->posts]);
    }
}
