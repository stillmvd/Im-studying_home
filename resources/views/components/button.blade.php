<a {{ $attributes->merge([
    'class' => 'button',
    'type' => 'button',
]) }}>
    {{ $slot }}
</a>