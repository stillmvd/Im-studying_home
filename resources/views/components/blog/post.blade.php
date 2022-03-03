<x-post.card>
    <x-post.title href="{{ route('blog.show', $post->id) }}">
        {{ $post->alias }}
    </x-post.title>
    <x-post.date>
        {{ now()->format('d.m.y - H.i.s') }}
    </x-post.date>
</x-post.card>