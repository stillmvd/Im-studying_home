<header>
    <div class="container">
        <div class="inner-header">

            <div class="header-left-sec">
                <a href="{{ route('home') }}" class="logo-link">
                    <img src="{{ asset('img/logo.png') }}" alt="logo">
                </a>
            </div>

            <div class="header-right-sec">
                @guest
                    <a href="{{ route('user.posts') }}" class="link {{ Route::is('user.posts*') ? 'active-link' : '' }}">
                        {{ __('Мои заявки') }}
                    </a>
                    <p class="separator">|</p>
                    <a href="{{ route('blog') }}" class="link {{ Route::is('blog*') ? 'active-link' : '' }}">
                        {{ __('Все заявки') }}
                    </a>
                    <p class="separator">|</p>
                    <a href="{{ route('register') }}" class="link {{ Route::is('register') ? 'active-link' : '' }}">
                        {{ __('Регистрация') }}
                    </a>
                    <p class="separator">|</p>
                    <a href="{{ route('login') }}" class="link {{ Route::is('login') ? 'active-link' : '' }}">
                        {{ __('Вход') }}
                    </a>
                @endguest

                @auth
                    <a href="{{ route('user.posts') }}" class="link {{ Route::is('user.posts*') ? 'active-link' : '' }}">
                        {{ __('Мои заявки') }}
                    </a>
                    <p class="separator">|</p>
                    <a href="{{ route('blog') }}" class="link {{ Route::is('blog*') ? 'active-link' : '' }}">
                        {{ __('Все заявки') }}
                    </a>
                    <p class="separator">|</p>
                    <a href="{{ route('user') }}" class="link {{ Route::is('user') ? 'active-link' : '' }} ">
                        {{ __('Профиль') }}
                    </a>
                    <p class="separator">|</p>
                    <a href="{{ route('logout') }}" class="link">
                        {{ __('Выход') }}
                    </a>
                @endauth
            </div>

        </div>
    </div>
</header>