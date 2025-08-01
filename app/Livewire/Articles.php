<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
class Articles extends Component
{

        public $content = '';

        public function updateSearch(){
            Article::create([
                // 'title' =>$this->title,
                'content' =>$this->content
            ]);
            $this ->reset(['title','content']);
        }
    public function render()
    {
        $articles = Article::where('content','like','%'.$this->content.'%')

        ->get();
        return view('livewire.articles',['articles'=>$articles]);
    }
}
