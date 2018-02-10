<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--style-->
    @include("home.common.style");
    <!--end style-->
    <title>@yield('title')</title>
</head>
<body class="home">
<!-- HEADER -->
@include('home.common.header')
<!-- end header -->
<!-- Home slideder-->
@yield('slider')
<!-- END Home slideder-->
@yield('content')
<!-- Footer -->
@include('home.common.footer')
<!-- Script-->
@include('home.common.script')

</body>
</html>