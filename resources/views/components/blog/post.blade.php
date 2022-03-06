<x-post.card>
    <x-post.header>
        <x-post.title href="{{ route('blog.show', $post->id) }}">
            {{ $post->alias }}
        </x-post.title>
        <x-post.category href="{{ route('blog') }}" :post='$post'>
            {{ $post->category }}
        </x-post.category>
    </x-post.header>

    <x-post.date>
        {{ now()->format('d.m.y - H.i.s') }}
    </x-post.date>
</x-post.card>