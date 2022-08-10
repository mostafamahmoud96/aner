<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Component;

class PostComments extends Component
{


    public $post;

    protected $listeners = ['commentWasAdded', 'commentWasDeleted', 'statusWasUpdated'];

    public function commentWasAdded()
    {
        $this->post->refresh();
        //$this->goToPage($this->post->comments()->paginate()->lastPage());
    }

    public function statusWasUpdated()
    {
        $this->post->refresh();
        //$this->goToPage($this->post->comments()->paginate()->lastPage());
    }

    public function commentWasDeleted()
    {
        $this->post->refresh();
        //$this->goToPage(1);
    }

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.post-comments', [
            'comments' => Comment::with(['user'])->where('post_id', $this->post->id)->paginate()->withQueryString(),
        ]);
    }
}