<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\WithAuthRedirects;
use App\Models\Post;
use Livewire\Component;
use Illuminate\Http\Response;

class CreatePost extends Component
{
    use WithAuthRedirects;
    public $body;


    protected $rules = [
        'body' => 'required|min:4',
    ];

    public function createPost()
    {
        if (auth()->guest()) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $this->validate();

        $idea = Post::create([
            'user_id' => auth()->id(),
            'body' => $this->body,
        ]);

        session()->flash('success_message', 'Idea was added successfully!');

        $this->reset();

        return redirect()->route('post.index');
    }
    public function render()
    {
        return view('livewire.create-post');
    }
}