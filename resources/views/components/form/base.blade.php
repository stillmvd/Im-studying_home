<form {{ $attributes->merge([
    'class' => 'form',
]) }}>
    @csrf
    {{ $slot }}
</form>