<x-form.base action="{{route ('user.posts.store') }}" method="PUT">
    <x-align-container>
        <x-label>{{ __('Кличка вашего питомца') }}</x-label>
        <x-input name="alias" id="alias" value="{{ $post->title }}" autofocus />
    </x-align-container>
    <x-align-container>
        <x-label>{{ __('Описание запрашиваемых работ') }}</x-label>
        <textarea class="text-area" name="description" id="description" rows="6" value="{{ $post->description }}"></textarea>
    </x-align-container>
    <x-align-container>
        <x-label>{{ __('Категория') }}</x-label>
        <x-input name="category" id="category" value="{{ $post->category }}" />
    </x-align-container>
    <x-align-container>
        <x-label for="photo">{{ __('Фото питомца') }}</x-label>
        <x-input type="file" class="file-upload" name="photo" id="photo" />
    </x-align-container>

    <x-form-button type="submit">
        {{ __('Отправить') }}
    </x-form-button>
</x-form.base>