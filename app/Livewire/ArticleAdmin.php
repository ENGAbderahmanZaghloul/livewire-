<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Models\Article;
#[Layout('components.layouts.admin')]
#[Title('Article Admin')]
class ArticleAdmin extends Component
{
    public $form = false;
    public $title = '';
    public $content = '';
    public function ShowForm(){
        $this->form = true;
    }
    public function Create(){
        $this->validate([
            'title' => 'required|min:2|max:10',
            'content' => 'required|min:2|max:10',
        ]);
        
        Article::create([
            'title'=>$this->title,
            'content'=>$this->content
        ]);

        $this->reset(['title', 'content', 'form']);
    }

    public function delete(Article $articleId){
        $articleId->delete();
    }
    public function render()
    {
        return view('livewire.article-admin',['articles'=>Article::latest()->get()]);
    }
}
