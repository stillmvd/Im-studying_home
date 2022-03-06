<x-form.base class="form" method="post" action="{{route ('login.store') }}">
    <x-align-container>
        <x-label for="login">{{ __('Логин') }}</x-label>
        <x-input type="text" name="login" id="login" autofocus />
    </x-align-container>

    <x-align-container>
        <x-label for="password">{{ __('Пароль') }}</x-label>
        <x-input type="password" name="password" id="password" />
    </x-align-container>
    
    <x-align-container>
        <x-checkbox name="agreement">
            {{ __('Запомнить меня') }}
        </x-checkbox>
    </x-align-container>

    <x-form-button type="submit">
        {{ __('Войти') }}
    </x-form-button>
</x-form.base>