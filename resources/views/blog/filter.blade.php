<x-form.base class="filter-form" method="get">
    <x-input value="{{ request('search') }}" placeholder="Поиск" class="filter-input" name="search" />
    <x-select name="category_id" class="select" :options="$categories" />
    
    <button class="button" type="submit">
        {{ __('Применить') }}
    </button>
</x-form.base>