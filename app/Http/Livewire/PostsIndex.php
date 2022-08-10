<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostsIndex extends Component
{
    public function render()
    {
        $posts = Post::with('user')->orderBy('id', 'desc')->get();
        return view('livewire.posts-index', ['posts' => $posts]);
    }
}