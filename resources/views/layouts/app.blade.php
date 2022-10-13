<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Artixun</title>
    <link rel="shortcut icon" href="{{ asset('frontend/images/smlogo.png') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <!-- silck CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick-theme.css') }}" />

    <!-- Style CSS -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="{{ asset('frontend/css/index.css') }}">

    <!-- Responsive CSS -->
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet" type="text/css">

</head>

<body>


@include('includes.header')
@yield('main-content')
@include('includes.footer')



<script type="text/javascript" src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('frontend/js/slick.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('frontend/js/custom.js') }}"></script>
</body>

</html>