<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    #[Validate('required|min:8')]
    public $title = '';

    #[Validate('required|min:8')]
    public $body = '';

    #[Validate('image|max:1024|required')] // 1MB Max
    public $photo;


    public function save() {
        $this->validate();
        $post = new Post();
        $post->title = $this->title;
        $post->body =$this->body;
        $path = $this->photo->store('images');
        $post->image_path = $path;
        $post->author()->associate(auth()->user());
        $post->save();
        $this->dispatch('created');
        $this->resetFields();
    }

    private function resetFields() {
        $this->title = '';
        $this->body = '';
        $this->photo = null;
    }

    public function render()
    {
        return view('livewire.post.create');
    }
}
