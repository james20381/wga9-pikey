<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/auth/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto:300,400" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light" style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);">
            
                    <a href="{{ url('/') }}"><img src="{{asset('img/wga-logo-34383a.svg')}}" class="img-fluid navbar-logo" alt="WGA Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      <!-- Authentication Links -->
                      @guest

                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  Pages <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('pages.index') }}">
                                      Page List
                                  </a>
                                  <a class="dropdown-item" href="{{ route('pages.create') }}">
                                      Create New
                                  </a>
                              </div>
                          </li>
                          @can('manageUsers', App\User::class)
                          <li>
                            <a href="{{ route('users.index') }}" class="nav-link">Manage Users</a>
                          </li>
                          @endcan
                      @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                    <li class="nav-item {{ Request::is('login') ? 'active-state' : null }}"><a class="nav-link link" href="{{ route('login') }}">{{ __('LOGIN') }}</a></li>
                    <li class="nav-item {{ Request::is('register') ? 'active-state' : null }}"><a class="nav-link link" href="{{ route('register') }}">{{ __('REGISTER') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            
        </nav>

        {{-- <main class="py-4"> --}}
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
