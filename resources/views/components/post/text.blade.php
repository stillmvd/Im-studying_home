<p {{ $attributes->merge([
    'class' => 'post-text'
]) }}>
    {{ $slot }}
</p>