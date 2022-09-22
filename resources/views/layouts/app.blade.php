<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    

    @stack('head_injection')
</head>
<body class="@stack('body_class')">
   
<div id="app">

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col text-center py-5 lead">
                    <a href="/" class="py-3 px-5">Home</a>
                    <a href="about">About</a>
                </div>
            </div>
        </div>
    </header>

    <main id="main">
        @yield('content')
    </main>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col text-center text-light py-5 lead">
                    Footer
                </div>
            </div>
        </div>
    </footer>
</div>

</body>
</html>
