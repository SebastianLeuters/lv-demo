<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PostController extends Controller
{
    public function __invoke(): RedirectResponse
    {
        return redirect(route('posts'));
    }

    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->where('author_id', auth()->user()->id)->get();

        return view('livewire.post.index', [
            'posts' => $posts
        ]);
    }

    public function image(string $postId)
    {
        $post = Post::findOrFail($postId);
//        $response = response()->make(Storage::get($post->image_path), 200);
        $path = Storage::disk('local')->path($post->image_path);

        if(!file_exists($path)) {
            throw new NotFoundHttpException();
        }

        return response()->file(Storage::disk('local')->path($post->image_path));

    }

    public function store(Request $request)
    {
        $post = new Post();

        $data = $request->post();

        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->author_id = auth()->user()->id;


        $post->save();;
    }

    public function create(): View
    {
        return view('livewire.post.detail', [
            'post' => null
        ]);
    }

    public function update(string $id): View
    {
        return view('livewire.post.detail', [
            'post' => Post::findOrFail($id)
        ]);
    }


    public function show(string $id): View
    {
        return view('livewire.post.show', [
            'post' => Post::findOrFail($id)
        ]);
    }


}
