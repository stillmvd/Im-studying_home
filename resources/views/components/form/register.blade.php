<x-form.base class="form" method="post" action="{{route ('register.store') }}">
    <x-align-container>
        <x-label for="identity">{{ __('ФИО') }}</x-label>
        <x-input type="text" name="identity" id="identity" autofocus />
        <x-error name="identity" />
    </x-align-container>

    <x-align-container>
        <x-label for="login">{{ __('Логин') }}</x-label>
        <x-input type="text" name="login" id="login" />
        <x-error name="login" />
    </x-align-container>

    <x-align-container>
        <x-label for="email">{{ __('Почта') }}</x-label>
        <x-input type="email" name="email" id="email" />
        <x-error name="email" />
    </x-align-container>

    <x-align-container>
        <x-label for="password">{{ __('Пароль') }}</x-label>
        <x-input type="password" name="password" id="password" />
        <x-error name="password" />
    </x-align-container>

    <x-align-container>
        <x-label for="password-confirmation">{{ __('Пароль ещё раз') }}</x-label>
        <x-input type="password" name="password_confirmation" id="password_confirmation" />
        <x-error name="password-confirmation" />
    </x-align-container>

    <x-align-container class="file-upload-place">
        <x-checkbox name="agreement">
            {{ __('Даю согласие на обработку персональных данных') }}
        </x-checkbox>
        <x-error name="agreement" />
    </x-align-container>

    <x-form-button id="store">
        {{ __('Зарегистрироваться') }}
    </x-form-button>
</x-form.base>