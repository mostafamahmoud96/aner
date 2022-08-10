<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class PostComment extends Component
{

    public $comment;
    public $postUserId;

    protected $listeners = [
        'commentWasUpdated',
        'commentWasMarkedAsSpam',
        'commentWasMarkedAsNotSpam',
    ];

    public function commentWasUpdated()
    {
        $this->comment->refresh();
    }

    public function commentWasMarkedAsSpam()
    {
        $this->comment->refresh();
    }

    public function commentWasMarkedAsNotSpam()
    {
        $this->comment->refresh();
    }

    public function mount(Comment $comment, $postUserId)
    {
        $this->comment = $comment;
        $this->postUserId = $postUserId;
    }

    public function render()
    {
        return view('livewire.post-comment');
    }
}