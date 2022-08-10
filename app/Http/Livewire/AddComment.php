<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\WithAuthRedirects;
use App\Models\Comment;
use App\Models\Post;
use Livewire\Component;

class AddComment extends Component
{
    use WithAuthRedirects;

    public $post;
    public $comment;
    protected $rules = [
        'comment' => 'required|min:4',
    ];

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function addComment()
    {
        if (auth()->guest()) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $this->validate();

        $newComment = Comment::create([
            'user_id' => auth()->id(),
            'post_id' => $this->post->id,
            'body' => $this->comment,
        ]);

        $this->reset('comment');


        $this->emit('commentWasAdded', 'Comment was posted!');
    }

    public function render()
    {
        return view('livewire.add-comment');
    }
}