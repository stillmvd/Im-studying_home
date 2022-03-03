<div {{ $attributes->merge([
    'class' => 'card-header',
]) }}>
    {{ $slot }}

    @isset($right)
        {{ $right }}
    @endisset
</div>
