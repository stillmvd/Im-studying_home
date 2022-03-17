<x-form.base class="filter-form" method="get">
    <div class="filter-section">
        <x-input value="{{ request('search') }}" placeholder="Поиск" class="filter-input" name="search" />
        <x-select name="category_id" class="filter-select" :options="$categories" />
    </div>
    
    <div class="right-section">
        <button class="button" type="submit">
            {{ __('Применить') }}
        </button>
    </div>
</x-form.base>