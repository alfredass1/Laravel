<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/bootstrap/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ mix('/css/vendor.css') }}"/>
    <link rel="stylesheet" href="{{ mix('/css/style.css') }}"/>

    <title>Skelbimai</title>
</head>
<body>

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    @include('skelbimai/_partials/header')
    @yield('content')
    @include('skelbimai/_partials/newsletter')
    @include('skelbimai/_partials/footer')
</div>
<script src="{{ mix('/js/app.js') }}"></script>

</body>
</html>