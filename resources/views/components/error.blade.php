@props(['name' => ''])

@error($name)
    <div class="alert-message">
        {{ $message }}
    </div>
@enderror