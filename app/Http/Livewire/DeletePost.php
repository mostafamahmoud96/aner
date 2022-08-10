<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class DeletePost extends Component
{
    public $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function deletePost()
    {
           if (auth()->guest()) {
            abort(Response::HTTP_FORBIDDEN);
        }

        Post::destroy($this->post->id);

        session()->flash('success_message', 'post was deleted successfully!');

        return redirect()->route('post.index');
    }

    public function render()
    {
        return view('livewire.delete-post');
    }
}