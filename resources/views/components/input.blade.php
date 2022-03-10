<input {{ $attributes->class(
    'form-input',
)->merge([
    'type' => 'text',
    'value' => old($attributes->get('name')),
]) }}>