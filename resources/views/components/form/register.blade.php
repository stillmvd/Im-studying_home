<x-form.base action="{{route ('register.store') }}" method="POST">
    <x-align-container>
        <x-label for="identity">{{ __('ФИО') }}</x-label>
        <x-input type="text" name="identity" id="identity" autofocus />
    </x-align-container>

    <x-align-container>
        <x-label for="login">{{ __('Логин') }}</x-label>
        <x-input type="text" name="login" id="login" />
    </x-align-container>

    <x-align-container>
        <x-label for="email">{{ __('Почта') }}</x-label>
        <x-input type="email" name="email" id="email" />
    </x-align-container>

    <x-align-container>
        <x-label for="password">{{ __('Пароль') }}</x-label>
        <x-input type="password" name="password" id="password" />
    </x-align-container>

    <x-align-container>
        <x-label for="password-confirmation">{{ __('Пароль ещё раз') }}</x-label>
        <x-input type="password" name="password-confirmation" id="password-confirmation" />
    </x-align-container>

    <x-align-container>
        <x-checkbox name="agreement">
            {{ __('Даю согласие на обработку персональных данных') }}
        </x-checkbox>
    </x-align-container>

    <x-form-button type="submit" name="store" id="store" class="disabled" disabled>
        {{ __('Зарегистрироваться') }}
    </x-form-button>
</x-form.base>