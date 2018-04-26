<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ $title }}</title>
        <link rel="icon" href="{{ URL::to('assets/back/favicon.png') }}" type="image/x-icon" />
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{ URL::to('assets/back/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/back/extra/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/back/extra/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/back/dist/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/back/plugins/iCheck/square/blue.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/back/css/custom.css') }}">
        <!--[if lt IE 9]>
        <script src="{{ URL::to('assets/back/extra/html5shiv.min.js') }}"></script>
        <script src="{{ URL::to('assets/back/extra/respond.min.js') }}"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page">
        @yield('auth-content')
        <!-- javascript -->
        <script src="{{ URL::to('assets/back/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
        <script src="{{ URL::to('assets/back/bootstrap/js/bootstrap.min.js') }}"></script> 
        <script src="{{ URL::to('assets/back/plugins/iCheck/icheck.min.js') }}"></script> 
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%'
                });
            });
        </script>
    </body>
</html>