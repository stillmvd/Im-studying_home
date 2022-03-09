<button {{ $attributes->class(
    'form-button'
)->merge([
    'type' => 'submit',
]) }}>
    {{ $slot }}
</button>