<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('index') }}" class="nav-link px-2 text-secondary">Главная</a></li>
            </ul>
            <div class="text-end">
                @guest
                    <a class="btn btn-outline-light me-2" href="{{ route('login') }}">Войти</a>
                @endguest
                @guest
                    <a class="btn btn-outline-light me-2" href="{{ route('register') }}">Регистрация</a>
                @endguest
                    {{-- @auth
                        @admin
                        (Auth::user()->isAdmin()){{ Auth::user()->name }}
                            <a class="btn btn-outline-light me-2" href="{{ route('admin.index') }}">@lang('main.admin_panel')</a>
                        @endadmin
                    @else
                    <a href="{{ route('person.orders.index') }}">@lang('main.my_orders')</a>
                    @endauth --}}

            </div>
        </div>
    </div>
</header>
