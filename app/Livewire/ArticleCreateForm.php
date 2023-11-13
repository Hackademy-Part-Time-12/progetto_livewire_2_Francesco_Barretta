<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCreateForm extends Component
{
    public $title;
    public $subtitle;
    public $body;


    protected $rules = [
        'title' => 'required|min:3|max:30',
        'subtitle' => 'required|min:10|max:50',
        'body' => 'required|min:20|max:1000',
    ];

    protected $messages = [
        'required' => 'Campo richiesto',
        'min' => 'Il campo deve avere almeno :min caratteri',
        'max' => 'Il campo deve avere al massimo :max caratteri',
    ];

//    public function cleanForm(){
//        $this->title = "";
//        $this->subtitle = "";
//        $this->body = "";
//    }

    public function update($propertyName){
        $this->validateOnly($propertyName);
    }

    public function store(){
        $this->validate();

        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);

        session()->flash('articleCreated', 'Articolo creato con successo');
        //$this->cleanForm();
        $this->reset();
    }

    public function render()
    {
        return view('livewire.article-create-form');
    }
}
