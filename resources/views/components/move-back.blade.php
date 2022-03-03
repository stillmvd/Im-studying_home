<a {{ $attributes->merge([
    'class' => 'link',
]) }} {{ $attributes->class([
    'move-back'
]) }}>

{{ $slot }}
</a>