<x-form.base class="form" method="post" action="{{ route('user.posts.store') }}">
    <x-align-container>
        <x-label>{{ __('Кличка вашего питомца') }}</x-label>
        <x-input type="text" name="alias" id="alias" autofocus />
        <x-error name="alias" />
    </x-align-container>
    <x-align-container>
        <x-label>{{ __('Описание запрашиваемых работ') }}</x-label>
        <textarea class="text-area" name="description" id="description" rows="6">{{ old('description') }}</textarea>
        <x-error name="description" />
    </x-align-container>
    <x-align-container>
        <x-label>{{ __('Категория') }}</x-label>
        <x-create-select name="category" :options="$categories" />
    </x-align-container>
    <x-align-container class="file-upload-place">
        <x-label for="photo">{{ __('Фото питомца') }}</x-label>
        <x-input type="file" class="file-upload" name="photo" id="photo" />
        <x-error name="photo" />
    </x-align-container>
    
    {{ $slot }}
</x-form.base>