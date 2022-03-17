@props(['post' => []])

<x-form.base class="ss" method="delete" action="{{ route('user.posts.destroy', $post->id) }}">
    <input type="submit" class="delete-button" value="Удалить">
</x-form.base>