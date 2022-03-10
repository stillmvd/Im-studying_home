<header>
    <div class="container">
        <div class="inner-header">
            <ul class="navigation-left">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('img/logo.png') }}" alt="logo">
                </a>
                <li>
                    <a href="{{ route('user.posts') }}" class="link {{ Route::is('user*') ? 'active-link' : '' }}">
                        {{ __('Мои заявки') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('blog') }}" class="link {{ Route::is('blog*') ? 'active-link' : '' }}">
                        {{ __('Все заявки') }}
                    </a>
                </li>
            </ul>
            
            @guest
                <ul class="navigation-right">
                    <li>
                        <a href="{{ route('register') }}" class="link {{ Route::is('register') ? 'active-link' : '' }}">
                            {{ __('Регистрация') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}" class="link {{ Route::is('login') ? 'active-link' : '' }}">
                            {{ __('Вход') }}
                        </a>
                    </li>
                </ul>
            @endguest

            @auth
                <ul class="navigation-right">
                    <li>
                        <a href="{{ route('user') }}" class="link {{ Route::is('user') ? 'active-link' : '' }} ">
                            {{ __('Профиль') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" class="link">
                            {{ __('Выход') }}
                        </a>
                    </li>
                </ul>
            @endauth

        </div>
    </div>
</header>