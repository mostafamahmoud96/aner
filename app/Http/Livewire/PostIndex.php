<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\WithAuthRedirects;
use App\Models\Post;
use Livewire\Component;

class PostIndex extends Component
{
    use WithAuthRedirects;

    public $post;


    public function mount(Post $post)
    {
        $this->post = $post;
    }



    public function render()
    {
        return view('livewire.post-index');
    }
}