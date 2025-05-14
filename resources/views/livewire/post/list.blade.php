<div wire:poll.5s="refresh">
    @forelse ($posts as $post)
        <livewire:post.item :$post :key="$post->id">
            @empty
                <p class="bg-orange-400 m-10 p-2">Es sind keine Posts vorhanden aktuell.</p>
    @endforelse
</div>
