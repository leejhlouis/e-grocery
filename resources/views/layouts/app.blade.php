<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary py-3 shadow-sm">
            <div class="container">
                <div>
                    <a class="navbar-brand fw-bold" href="{{ url(app()->getLocale().'/') }}">Amazing E-Grocery</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav navbar-nav me-auto mb-2 mb-lg-0">
                        @auth()
                            <li class="nav-item me-2">
                                <a class="nav-link" href="{{ url(app()->getLocale().'/') }}">@lang('ui.home')</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="nav-link" href="{{ url(app()->getLocale().'/cart') }}">@lang('ui.cart')</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url(app()->getLocale().'/profile') }}">@lang('ui.profile')</a>
                            </li>
                            @if (Auth::user()->role->role_name == "Admin")
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url(app()->getLocale().'/accounts/maintenance') }}">@lang('ui.account_maintenance')</a>
                                </li>
                            @endif
                        @endauth
                    </ul>
                    @auth()
                        <form action="{{ url(app()->getLocale().'/auth/logout') }}" method="post">
                            @csrf
                            <button class="btn btn-primary" href=>@lang('ui.logout')</button> 
                        </form>
                    @else
                    <div class="d-flex gap-3">
                        <a class="btn btn-primary" href="{{ url(app()->getLocale().'/register') }}">@lang('ui.register')</a>
                        <a class="btn btn-primary" href="{{ url(app()->getLocale().'/login') }}">@lang('ui.login')</a>
                    </div>
                    @endauth
                </div>
            </div>
          </nav>
        <main class="py-4">
            @yield('content')
        </main>

        <footer class="container">
            <hr>
            <div class="d-flex justify-content-between align-items-center">
                <p>© Amazing E-Grocery 2023</p>
                <div>
                    <ul class="">
                        @if (app()->getLocale() == "en")
                            <li class="d-inline-block list-unstyled">English (EN)</li>
                        @else
                            <li class="d-inline-block list-unstyled"><a class="btn btn-link" href={{ url('en/locale/switch') }}>English (EN)</a></li>
                        @endif

                        @if (app()->getLocale() == "id")
                            <li class="d-inline-block list-unstyled">Bahasa Indonesia (ID)</li>
                        @else
                            <li class="d-inline-block list-unstyled"><a class="btn btn-link" href={{ url('id/locale/switch') }}>Bahasa Indonesia (ID)</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
