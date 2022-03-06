<button {{ $attributes->class(
    'form-button'
)->merge([
    'type' => 'button',
]) }}>
    {{ $slot }}
</button>