<button {{ $attributes->merge([
    'class' => 'form-button',
    'type' => 'button',
]) }}>
    {{ $slot }}
</button>