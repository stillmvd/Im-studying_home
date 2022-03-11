@props([ 'value' => request('category_id'), 'options' => [] ])

<select {{ $attributes }}>
    {{ $slot }}

    @foreach ($options as $key => $_value)
        <option value="{{ $key }}" {{ ($key == $value) ? 'selected' : '' }}>
            {{ $_value }}
        </option>
    @endforeach

</select>