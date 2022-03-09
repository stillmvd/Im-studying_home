<div class="agreement">
    <input {{ $attributes->merge([
        'id' => 'agreement',
        'type' => 'checkbox',
        'checked' => !! old($attributes->get('name')),
    ]) }} onclick="changeActivity()">
    
    <label for="agreement">
        {{ $slot }}
    </label>
</div>