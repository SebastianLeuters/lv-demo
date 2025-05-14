<?php

namespace App\Livewire\Post;

use Livewire\Component;
use App\Models\Post as PostModel;

class Detail extends Component
{
    public $id;
    public $title;
    public $body;
    public $imagePath;

    public function mount(PostModel $post)
    {
        $this->id = $post->id;
        $this->title = $post->title;
        $this->body = $post->body;
        $this->imagePath = $post->image_path;
    }

    public function render()
    {
        return view('livewire.post.detail');
    }
}
