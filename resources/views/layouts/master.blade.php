<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title')</title>
    <meta charset='utf-8'>

    <link href='/css/calculator.css' rel='stylesheet'>

    @yield('head')
</head>
<body>

<header>
    <a href='/'><img src='/images/calculator.png' id='logo' alt='Foobooks Logo'></a>
</header>

<section>
    @yield('content')
</section>

<footer>
    &copy; {{ date('Y') }}
</footer>

</body>
</html>