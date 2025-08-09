<?php

namespace App\Livewire\Dash\Blog;

use Livewire\Component;

class FilterBlog extends Component
{
    public $search = '';
    public $status = '';
    public $type = '';
    public $level = '';

    public function updated($field)
    {
        $this->dispatch('filterUpdated', [
            'search' => $this->search,
            'status' => $this->status,
            'type' => $this->type,
            'level' => $this->level,
        ]);

    }
    public function render()
    {
        return view('livewire.dash.blog.filterblog');
    }
}
