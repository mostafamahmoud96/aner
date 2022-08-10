<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\WithAuthRedirects;
use App\Models\Post;
use Livewire\Component;

class PostShow extends Component
{

    use WithAuthRedirects;
    public $post;

    protected $listeners = [
        'statusWasUpdated',
        'statusWasUpdatedError',
        'postWasUpdated',
        'commentWasAdded',
        'commentWasDeleted',
    ];

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function statusWasUpdated()
    {
        $this->post->refresh();
    }

    public function statusWasUpdatedError()
    {
        $this->post->refresh();
    }

    public function postWasUpdated()
    {
        $this->post->refresh();
    }


    public function commentWasAdded()
    {
        $this->post->refresh();
    }

    public function commentWasDeleted()
    {
        $this->post->refresh();
    }



    public function render()
    {
        return view('livewire.post-show');
    }
}