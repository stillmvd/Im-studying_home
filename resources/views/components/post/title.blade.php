<a {{ $attributes->merge([
    'class' => 'post-title',
]) }}>
    {{ $slot }}
</a>