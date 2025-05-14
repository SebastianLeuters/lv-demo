<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

class PostList extends Component
{
    /**
     * @var Collection
     */
    public $posts;

    public function mount(Collection $posts)
    {
        $this->posts = $posts;
    }

    #[On('created')]
    public function refresh()
    {

        $posts = Post::orderBy('id', 'desc')->where('author_id', auth()->user()->id)->get();
        $this->mount($posts);
    }

    public function render()
    {
        return view('livewire.post.list');
    }
}
