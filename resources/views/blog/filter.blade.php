<x-form.base class="filter-form" method="get">
    <div class="filter-section">
        <x-input value="{{ request('search') }}" placeholder="Поиск" class="filter-input" name="search" />
        <x-select name="category_id" class="filter-select" :options="$categories" />
    </div>
    
    <button class="button" type="submit">
        {{ __('Применить') }}
    </button>
</x-form.base>