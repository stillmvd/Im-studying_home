@props([ 'value' => request('category_id'), 'options' => [] ])

<select {{ $attributes->class(
    'select'
) }}>
    {{ $slot }}

    <option value="{{ null }}" selected disabled>
        {{ __('Выберите категорию') }}
    </option>

    @foreach ($options as $key => $_value)
        <option value="{{ $_value }}">
            {{ $_value }}
        </option>
    @endforeach
</select>