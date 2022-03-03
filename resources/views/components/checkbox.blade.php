<div class="agreement">
    <input {{ $attributes->merge([
        'type' => 'checkbox',
        'value' => 1,
        'id' => 'agreement',
    ]) }} onclick="changeActivity()">
    
    <label for="agreement">
        {{ $slot }}
    </label>
</div>