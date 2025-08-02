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

    public function delete(Article $articleId){
        $articleId->delete();
    }
    public function render()
    {
        return view('livewire.article-admin',['articles'=>Article::all()]);
    }
}
