<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Http\Response;


class EditPost extends Component
{
    public $post;
    public $body;


    protected $rules = [
        'body' => 'required|min:4',
    ];

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->body = $post->body;
    }

    public function updatepost()
    {
        if (auth()->guest()) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $this->validate();

        $this->post->update([

            'body' => $this->body,
        ]);

        $this->emit('postWasUpdated', 'post was updated successfully!');
    }

    public function render()
    {
        return view('livewire.edit-post');
    }
}