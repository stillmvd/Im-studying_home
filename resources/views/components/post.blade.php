<x-post.card>
    <x-post.header>
        <x-post.title href="{{ route('user.posts.show', $post->id) }}">
            {{ $post->alias }}
        </x-post.title>
        <div class="category-place">
            {{ __('Категория -') }}
            <x-post.category :post='$post'>
                {{ $post->category }}
            </x-post.category>
        </div>
    </x-post.header>

    <x-post.date>
        {{ now()->format('d.M - H:i') }}
    </x-post.date>
</x-post.card>