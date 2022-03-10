<header>
    <div class="container">
        <div class="inner-header">

            <ul class="navigation-left">
                <li>
                    <a href="{{ route('home') }}" class="link {{ Route::is('home') ? 'active-link' : '' }}">
                        {{ config('app.name') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('blog') }}" class="link {{ Route::is('blog*') ? 'active-link' : '' }}">
                        {{ __('Заявки') }}
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
                    <a href="{{ route('logout') }}" class="link">
                        {{ __('Выход') }}
                    </a>
                </li>
            </ul>
            @endauth

        </div>
    </div>
</header>