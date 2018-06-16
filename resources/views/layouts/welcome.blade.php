<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('partials._head')
</head>

<body>
    <header id="page-top">
        @include('partials._navbar')
        @include('partials._carousel')
    </header>
    <main>
        @yield('content')
    </main>
    <footer id="footer">
        @include('partials._footer')
    </footer>
    <script src="{{asset('js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>