<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('backend/assets/images/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{ asset('backend/assets/images/favicon.png')}}">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('backend/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('backend/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('backend/assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
    @yield('link')
</head>
<body>
        @include('frontend.layouts._nav')
        @yield('content')
        @include('frontend.layouts._footer')
    <script src="{{asset('backend/assets/js/core/popper.min.js') }}"></script>
    <script src="{{asset('backend/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{asset('backend/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{asset('backend/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('backend/assets/js/soft-ui-dashboard.min.js?v=1.0.3')}}"></script>
    @stack('js')
</body>
</html>





