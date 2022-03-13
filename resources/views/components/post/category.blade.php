<form class="category-form">
    <x-input value="{{ $post->category_id }}" type="hidden" name="category_id" />

    <button type="submit" class="category">
        {{ $slot }}
    </button>
</form>