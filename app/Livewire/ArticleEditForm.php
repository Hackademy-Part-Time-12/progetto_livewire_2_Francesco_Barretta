<?php

namespace App\Livewire;

use Livewire\Component;

class ArticleEditForm extends Component
{

    public $title;
    public $subtitle;
    public $body;
    public $article;

    public function update(){
        $this->article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);
        session()->flash('articleUpdated', 'Articolo modificato con successo');
    }

    public function mount(){
        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this->body = $this->article->body;
    }

    public function render()
    {
        return view('livewire.article-edit-form');
    }
}
