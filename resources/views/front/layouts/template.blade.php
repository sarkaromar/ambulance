<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}} - Lost and Found</title>
    <link rel="shortcut icon" href="{{ URL::to('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendors/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/vendors/css/animate.min.css') }}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script defer src="{{ URL::to('assets/js/fa.js') }}"></script>
    <script>
        function check() {
            var chk = confirm("Are you sure want to do this?");
            if (chk) {
                return true;
            } else {
                return false;
            }
        }
        var BASE_URL = '{{ url('/') }}';
    </script>
</head>
<body>
    <!-- header -->
    <header id="header">
        <div class="top-nav">
            <div class="container-fluid">
                <div class="float-left">
                    <p class="d-none d-sm-block"><i class="fa fa-phone-square"></i> 0123 456 789</p>
                </div>
                <div class="float-right">
                    <ul class="top-menu">
                        <li><a href="{{url('help')}}"><i class="fa fa-info-circle"></i> Help</a></li>
                        @guest
                        <li><a href="{{url('login')}}"><i class="fa fa-sign-in-alt"></i> Login</a></li>
                        <li><a href="{{url('register')}}"><i class="fa fa-user-plus"></i> Registration</a></li>
                        @else
                        @php $full = Auth::user()->name; $first = explode(" ", $full); @endphp
                        <li><a href="{{url('/')}}"><i class="fa fa-user"></i>Hi, {{ $first[0] }}</a></li>
                        <li><a href="{{url('my-account')}}"><i class="fa fa-user-circle"></i> My Account</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
        <div class="d-block d-sm-none res-point">
            <a href="#"><i class="fa fa-bars"></i></a>
        </div>
        @if($menu != 'home')
        <div class="container-fluid subpage-nav">
        <div class="logo-sub-page animated zoomIn">
            <a href="index.html">
                <div class="svg">
                    <svg version="1.1" id="r1ulHRhnIDG" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1224 792" style="enable-background:new 0 0 1224 792;" xmlns:svgjs="http://svgjs.com/svgjs">
                    <style type="text/css">
                        @-webkit-keyframes Bk0lr0n3UDz_Sy__w6IPM_Animation {
                    0% {
                        -webkit-transform: rotate(-180deg);
                                transform: rotate(-180deg);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    33.33% {
                        -webkit-transform: rotate(0deg);
                                transform: rotate(0deg);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        -webkit-transform: rotate(0deg);
                                transform: rotate(0deg);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @keyframes Bk0lr0n3UDz_Sy__w6IPM_Animation {
                    0% {
                        -webkit-transform: rotate(-180deg);
                                transform: rotate(-180deg);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    33.33% {
                        -webkit-transform: rotate(0deg);
                                transform: rotate(0deg);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        -webkit-transform: rotate(0deg);
                                transform: rotate(0deg);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @-webkit-keyframes Bk0lr0n3UDz_Animation {
                    0% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    33.33% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @keyframes Bk0lr0n3UDz_Animation {
                    0% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    33.33% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @-webkit-keyframes BJGfSA33LPz_Animation {
                    66.67% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    0% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @keyframes BJGfSA33LPz_Animation {
                    66.67% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    0% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @-webkit-keyframes rJyzBChhLDf_Animation {
                    66.67% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    0% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @keyframes rJyzBChhLDf_Animation {
                    66.67% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    0% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @-webkit-keyframes H16ZSRnn8PM_Animation {
                    66.67% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    0% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @keyframes H16ZSRnn8PM_Animation {
                    66.67% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    0% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @-webkit-keyframes H1mbBA3nUPz_Animation {
                    33.33% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    66.67% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    0% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @keyframes H1mbBA3nUPz_Animation {
                    33.33% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    66.67% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    0% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @-webkit-keyframes H1GbBR3nIwM_Animation {
                    33.33% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    66.67% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    0% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @keyframes H1GbBR3nIwM_Animation {
                    33.33% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    66.67% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    0% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @-webkit-keyframes rJW-HRhhLDz_Animation {
                    33.33% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    66.67% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    0% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @keyframes rJW-HRhhLDz_Animation {
                    33.33% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    66.67% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    0% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @-webkit-keyframes BklZHRnhLPz_Animation {
                    33.33% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    66.67% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    0% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @keyframes BklZHRnhLPz_Animation {
                    33.33% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    66.67% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    0% {
                        opacity: 0;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        opacity: 1;
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @-webkit-keyframes HyVGHRnhLwz_B1dPXa8wz_Animation {
                    15.56% {
                        -webkit-transform: translate(0px, -100px);
                                transform: translate(0px, -100px);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    33.33% {
                        -webkit-transform: translate(0px, 0px);
                                transform: translate(0px, 0px);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    0% {
                        -webkit-transform: translate(0px, -100px);
                                transform: translate(0px, -100px);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        -webkit-transform: translate(0px, 0px);
                                transform: translate(0px, 0px);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @keyframes HyVGHRnhLwz_B1dPXa8wz_Animation {
                    15.56% {
                        -webkit-transform: translate(0px, -100px);
                                transform: translate(0px, -100px);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    33.33% {
                        -webkit-transform: translate(0px, 0px);
                                transform: translate(0px, 0px);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    0% {
                        -webkit-transform: translate(0px, -100px);
                                transform: translate(0px, -100px);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        -webkit-transform: translate(0px, 0px);
                                transform: translate(0px, 0px);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @-webkit-keyframes SJu-r0hn8PG_SJ-HXa8vf_Animation {
                    0% {
                        -webkit-transform: scale(1, 1);
                                transform: scale(1, 1);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    33.33% {
                        -webkit-transform: scale(1, 1);
                                transform: scale(1, 1);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        -webkit-transform: scale(1, 1);
                                transform: scale(1, 1);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @keyframes SJu-r0hn8PG_SJ-HXa8vf_Animation {
                    0% {
                        -webkit-transform: scale(1, 1);
                                transform: scale(1, 1);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    33.33% {
                        -webkit-transform: scale(1, 1);
                                transform: scale(1, 1);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        -webkit-transform: scale(1, 1);
                                transform: scale(1, 1);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @-webkit-keyframes SyaxB032LwG_BJosz6UwM_Animation {
                    0% {
                        -webkit-transform: scale(0.5, 0.5);
                                transform: scale(0.5, 0.5);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    33.33% {
                        -webkit-transform: scale(1, 1);
                                transform: scale(1, 1);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        -webkit-transform: scale(1, 1);
                                transform: scale(1, 1);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @keyframes SyaxB032LwG_BJosz6UwM_Animation {
                    0% {
                        -webkit-transform: scale(0.5, 0.5);
                                transform: scale(0.5, 0.5);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    33.33% {
                        -webkit-transform: scale(1, 1);
                                transform: scale(1, 1);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        -webkit-transform: scale(1, 1);
                                transform: scale(1, 1);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @-webkit-keyframes HyheH02nIvM_HyHLGTIPz_Animation {
                    0% {
                        -webkit-transform: scale(0.5, 0.5);
                                transform: scale(0.5, 0.5);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    33.33% {
                        -webkit-transform: scale(1, 1);
                                transform: scale(1, 1);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        -webkit-transform: scale(1, 1);
                                transform: scale(1, 1);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @keyframes HyheH02nIvM_HyHLGTIPz_Animation {
                    0% {
                        -webkit-transform: scale(0.5, 0.5);
                                transform: scale(0.5, 0.5);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    33.33% {
                        -webkit-transform: scale(1, 1);
                                transform: scale(1, 1);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        -webkit-transform: scale(1, 1);
                                transform: scale(1, 1);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @-webkit-keyframes BJr-H0n3Uvf_S1xc-T28wG_Animation {
                    0% {
                        -webkit-transform: scale(0.5, 0.5);
                                transform: scale(0.5, 0.5);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    33.33% {
                        -webkit-transform: scale(1, 1);
                                transform: scale(1, 1);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        -webkit-transform: scale(1, 1);
                                transform: scale(1, 1);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @keyframes BJr-H0n3Uvf_S1xc-T28wG_Animation {
                    0% {
                        -webkit-transform: scale(0.5, 0.5);
                                transform: scale(0.5, 0.5);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    33.33% {
                        -webkit-transform: scale(1, 1);
                                transform: scale(1, 1);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        -webkit-transform: scale(1, 1);
                                transform: scale(1, 1);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @-webkit-keyframes r1igS0h3Iwz_H1M--aLPG_Animation {
                    0% {
                        -webkit-transform: scale(0.5, 0.5);
                                transform: scale(0.5, 0.5);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    33.33% {
                        -webkit-transform: scale(1, 1);
                                transform: scale(1, 1);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        -webkit-transform: scale(1, 1);
                                transform: scale(1, 1);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @keyframes r1igS0h3Iwz_H1M--aLPG_Animation {
                    0% {
                        -webkit-transform: scale(0.5, 0.5);
                                transform: scale(0.5, 0.5);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    33.33% {
                        -webkit-transform: scale(1, 1);
                                transform: scale(1, 1);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        -webkit-transform: scale(1, 1);
                                transform: scale(1, 1);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @-webkit-keyframes BJr-H0n3Uvf_rypgp3Lwf_Animation {
                    0% {
                        -webkit-transform: translate(0px, -70px);
                                transform: translate(0px, -70px);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    33.33% {
                        -webkit-transform: translate(0px, -150px);
                                transform: translate(0px, -150px);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    66.67% {
                        -webkit-transform: translate(0px, -150px);
                                transform: translate(0px, -150px);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        -webkit-transform: translate(0px, 150px);
                                transform: translate(0px, 150px);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                @keyframes BJr-H0n3Uvf_rypgp3Lwf_Animation {
                    0% {
                        -webkit-transform: translate(0px, -70px);
                                transform: translate(0px, -70px);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    33.33% {
                        -webkit-transform: translate(0px, -150px);
                                transform: translate(0px, -150px);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    66.67% {
                        -webkit-transform: translate(0px, -150px);
                                transform: translate(0px, -150px);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                    100% {
                        -webkit-transform: translate(0px, 150px);
                                transform: translate(0px, 150px);
                        transform-box: fill-box;
                        -webkit-transform-origin: 50% 50%;
                                transform-origin: 50% 50%
                    }
                }
                #r1ulHRhnIDG * {
                    -webkit-animation-duration: 1.5s;
                            animation-duration: 1.5s;
                    -webkit-animation-timing-function: cubic-bezier(0, 0, 1, 1);
                            animation-timing-function: cubic-bezier(0, 0, 1, 1)
                }
                #BJr-H0n3Uvf_rypgp3Lwf {
                    -webkit-animation-name: BJr-H0n3Uvf_rypgp3Lwf_Animation;
                            animation-name: BJr-H0n3Uvf_rypgp3Lwf_Animation
                }
                #r1igS0h3Iwz_H1M--aLPG {
                    -webkit-animation-name: r1igS0h3Iwz_H1M--aLPG_Animation;
                            animation-name: r1igS0h3Iwz_H1M--aLPG_Animation;
                    -webkit-animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1);
                            animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1)
                }
                #BJr-H0n3Uvf_S1xc-T28wG {
                    -webkit-animation-name: BJr-H0n3Uvf_S1xc-T28wG_Animation;
                            animation-name: BJr-H0n3Uvf_S1xc-T28wG_Animation
                }
                #HyheH02nIvM_HyHLGTIPz {
                    -webkit-animation-name: HyheH02nIvM_HyHLGTIPz_Animation;
                            animation-name: HyheH02nIvM_HyHLGTIPz_Animation
                }
                #SyaxB032LwG_BJosz6UwM {
                    -webkit-animation-name: SyaxB032LwG_BJosz6UwM_Animation;
                            animation-name: SyaxB032LwG_BJosz6UwM_Animation
                }
                #SJu-r0hn8PG_SJ-HXa8vf {
                    -webkit-animation-name: SJu-r0hn8PG_SJ-HXa8vf_Animation;
                            animation-name: SJu-r0hn8PG_SJ-HXa8vf_Animation
                }
                #HyVGHRnhLwz_B1dPXa8wz {
                    -webkit-animation-name: HyVGHRnhLwz_B1dPXa8wz_Animation;
                            animation-name: HyVGHRnhLwz_B1dPXa8wz_Animation
                }
                #BklZHRnhLPz {
                    -webkit-animation-name: BklZHRnhLPz_Animation;
                            animation-name: BklZHRnhLPz_Animation
                }
                #rJW-HRhhLDz {
                    -webkit-animation-name: rJW-HRhhLDz_Animation;
                            animation-name: rJW-HRhhLDz_Animation
                }
                #H1GbBR3nIwM {
                    -webkit-animation-name: H1GbBR3nIwM_Animation;
                            animation-name: H1GbBR3nIwM_Animation
                }
                #H1mbBA3nUPz {
                    -webkit-animation-name: H1mbBA3nUPz_Animation;
                            animation-name: H1mbBA3nUPz_Animation
                }
                #H16ZSRnn8PM {
                    -webkit-animation-name: H16ZSRnn8PM_Animation;
                            animation-name: H16ZSRnn8PM_Animation
                }
                #rJyzBChhLDf {
                    -webkit-animation-name: rJyzBChhLDf_Animation;
                            animation-name: rJyzBChhLDf_Animation
                }
                #BJGfSA33LPz {
                    -webkit-animation-name: BJGfSA33LPz_Animation;
                            animation-name: BJGfSA33LPz_Animation
                }
                #Bk0lr0n3UDz {
                    -webkit-animation-name: Bk0lr0n3UDz_Animation;
                            animation-name: Bk0lr0n3UDz_Animation
                }
                #Bk0lr0n3UDz_Sy__w6IPM {
                    -webkit-animation-name: Bk0lr0n3UDz_Sy__w6IPM_Animation;
                            animation-name: Bk0lr0n3UDz_Sy__w6IPM_Animation
                }
                    </style>
                    <style type="text/css"/>
                    <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="0" x2="0.7071" y2="0.7071">
                        <stop offset="0" style="stop-color:#DEDFE3"/>
                        <stop offset="0.1738" style="stop-color:#D8D9DD"/>
                        <stop offset="0.352" style="stop-color:#C9CACD"/>
                        <stop offset="0.5323" style="stop-color:#B4B5B8"/>
                        <stop offset="0.7139" style="stop-color:#989A9C"/>
                        <stop offset="0.8949" style="stop-color:#797C7E"/>
                        <stop offset="1" style="stop-color:#656B6C"/>
                    </linearGradient>
                    <g id="SktxS0hnLvM" class="svg-logo">
                        <g id="ry5gSAhn8wf">
                            <g id="r1igS0h3Iwz_H1M--aLPG" data-animator-group="true" data-animator-type="2">
                                <path d="M75.6,102.6v214.6H118v53.7H5.9V102.6H75.6z" id="r1igS0h3Iwz"/>
                            </g>
                            <g id="HyheH02nIvM_HyHLGTIPz" data-animator-group="true" data-animator-type="2">
                                <path d="M462.2,183.8h-64.8v-19.9c0-9.3-0.8-15.2-2.5-17.7c-1.7-2.5-4.4-3.8-8.3-3.8c-4.2,0-7.4,1.7-9.5,5.1&#10;&#9;&#9;&#9;c-2.2,3.4-3.2,8.6-3.2,15.6c0,9,1.2,15.7,3.6,20.2c2.3,4.5,8.9,10,19.7,16.4c31,18.4,50.6,33.6,58.7,45.4&#10;&#9;&#9;&#9;c8.1,11.8,12.1,30.9,12.1,57.2c0,19.1-2.2,33.2-6.7,42.2c-4.5,9.1-13.1,16.7-25.9,22.8c-12.8,6.1-27.7,9.2-44.7,9.2&#10;&#9;&#9;&#9;c-18.7,0-34.6-3.5-47.8-10.6c-13.2-7.1-21.8-16.1-25.9-27c-4.1-10.9-6.1-26.5-6.1-46.6v-17.6h64.8v32.6c0,10.1,0.9,16.5,2.7,19.4&#10;&#9;&#9;&#9;s5.1,4.3,9.7,4.3s8.1-1.8,10.4-5.5c2.3-3.6,3.4-9.1,3.4-16.2c0-15.8-2.2-26.1-6.5-31c-4.4-4.9-15.3-13-32.6-24.4&#10;&#9;&#9;&#9;c-17.3-11.5-28.8-19.8-34.5-25s-10.3-12.4-14-21.5c-3.7-9.2-5.6-20.9-5.6-35.1c0-20.5,2.6-35.6,7.9-45.1&#10;&#9;&#9;&#9;c5.2-9.5,13.7-16.9,25.4-22.3c11.7-5.4,25.8-8,42.4-8c18.1,0,33.6,2.9,46.3,8.8c12.8,5.9,21.2,13.2,25.3,22.1&#10;&#9;&#9;&#9;c4.1,8.9,6.2,24,6.2,45.3V183.8z" id="HyheH02nIvM"/>
                            </g>
                            <g id="SyaxB032LwG_BJosz6UwM" data-animator-group="true" data-animator-type="2">
                                <path d="M630.3,102.6v53.7h-41.4v214.6h-69.8V156.3h-41.3v-53.7H630.3z" id="SyaxB032LwG"/>
                            </g>
                            <g id="Bk0lr0n3UDz_Sy__w6IPM" data-animator-group="true" data-animator-type="1">
                                <path d="M883,269v45.2l-18.7,11.9l23.4,44.7h-62l-8-14.9c-20.8,13.7-40.4,20.5-59,20.5c-19.4,0-34.4-6.5-44.9-19.4&#10;&#9;&#9;&#9;c-10.5-12.9-15.7-28.5-15.7-46.7c0-14.6,3.1-26,9.3-34.3c6.2-8.3,15.5-15,27.8-20.2c-17.7-12.7-26.5-29.9-26.5-51.5&#10;&#9;&#9;&#9;c0-18.7,6.3-33.7,18.9-45.1c12.6-11.4,29.9-17.1,52-17.1c19.9,0,35.5,5.6,47,16.7c11.4,11.2,17.1,25.3,17.1,42.6&#10;&#9;&#9;&#9;c0,18.1-7,34.2-20.9,48.2l23.6,42.7L883,269z M794.8,325.7l-21.6-36.2c-8.3,7.5-12.4,15.6-12.4,24.4c0,6.3,1.3,11,3.9,14.2&#10;&#9;&#9;&#9;c2.6,3.1,6.4,4.7,11.5,4.7C781.5,332.8,787.7,330.4,794.8,325.7z M779.6,221.9c7.6-9.8,11.4-19.2,11.4-28.2&#10;&#9;&#9;&#9;c0-3.9-1.1-7.4-3.3-10.6c-2.2-3.2-5.3-4.8-9.3-4.8c-3.6,0-6.4,1.2-8.3,3.6c-1.9,2.4-2.8,6.1-2.8,11.1&#10;&#9;&#9;&#9;C767.4,203.5,771.4,213.1,779.6,221.9z" id="Bk0lr0n3UDz"/>
                            </g>
                        </g>
                        <g id="r1y-r0nn8PG">
                            <path d="M0,391h118.1v53.7H69.8v50.9h43.1v51H69.8v112.7H0V391z" id="BklZHRnhLPz"/>
                            <path d="M473,391v179.3c0,20.3-0.7,34.6-2,42.8c-1.3,8.2-5.2,16.7-11.8,25.4c-6.5,8.7-15.1,15.2-25.8,19.7&#10;&#9;&#9;&#9;c-10.7,4.5-23.2,6.7-37.7,6.7c-16,0-30.2-2.7-42.4-8c-12.3-5.3-21.4-12.2-27.5-20.7c-6.1-8.5-9.7-17.5-10.8-26.9&#10;&#9;&#9;&#9;c-1.1-9.4-1.7-29.3-1.7-59.6V391h69.8v201.1c0,11.7,0.6,19.2,1.9,22.5c1.3,3.3,3.8,4.9,7.7,4.9c4.4,0,7.3-1.8,8.5-5.4&#10;&#9;&#9;&#9;c1.3-3.6,1.9-12.1,1.9-25.4V391H473z" id="rJW-HRhhLDz"/>
                            <path d="M655.8,391v268.2h-61.1l-36.3-121.9v121.9H500V391h58.3l39.1,120.8V391H655.8z" id="H1GbBR3nIwM"/>
                            <path d="M683.8,391H736c33.7,0,56.5,1.5,68.3,4.6c11.9,3.1,20.9,8.2,27.1,15.2c6.2,7.1,10,14.9,11.6,23.6&#10;&#9;&#9;&#9;c1.5,8.7,2.3,25.7,2.3,51.1v93.9c0,24.1-1.1,40.2-3.4,48.3c-2.3,8.1-6.2,14.5-11.8,19.1c-5.6,4.6-12.6,7.8-20.9,9.6&#10;&#9;&#9;&#9;c-8.3,1.8-20.8,2.7-37.4,2.7h-88V391z M753.5,436.8v176.5c10,0,16.2-2,18.6-6c2.3-4,3.5-15,3.5-32.9V470.1&#10;&#9;&#9;&#9;c0-12.2-0.4-19.9-1.2-23.4c-0.8-3.4-2.5-5.9-5.3-7.5C766.4,437.6,761.2,436.8,753.5,436.8z" id="H1mbBA3nUPz"/>
                        </g>
                        <g id="S14Wr022IwM">
                            <g id="BJr-H0n3Uvf_rypgp3Lwf" data-animator-group="true" data-animator-type="0">
                                <g id="BJr-H0n3Uvf_S1xc-T28wG" data-animator-group="true" data-animator-type="2">
                                    <path d="M299.1,402c0,27-0.6,46-1.9,57.2c-1.3,11.2-5.2,21.5-11.9,30.7c-6.7,9.3-15.7,16.4-27.1,21.4c-11.4,5-24.6,7.5-39.8,7.5&#10;&#9;&#9;&#9;c-14.4,0-27.3-2.3-38.7-7c-11.4-4.7-20.6-11.7-27.6-21.1c-7-9.4-11.1-19.6-12.4-30.7c-1.3-11-2-30.4-2-58v-45.9&#10;&#9;&#9;&#9;c0-26.9,0.6-46,1.9-57.2c1.3-11.2,5.2-21.5,11.9-30.7c6.7-9.3,15.7-16.4,27.1-21.4c11.4-5,24.6-7.5,39.8-7.5&#10;&#9;&#9;&#9;c14.4,0,27.3,2.3,38.7,7c11.4,4.7,20.6,11.7,27.6,21.1c7,9.4,11.1,19.6,12.4,30.7c1.3,11,2,30.4,2,58V402z M229.4,313.9&#10;&#9;&#9;&#9;c0-12.5-0.7-20.5-2.1-23.9c-1.4-3.5-4.2-5.2-8.5-5.2c-3.6,0-6.4,1.4-8.4,4.2c-1.9,2.8-2.9,11.1-2.9,24.9v125.3&#10;&#9;&#9;&#9;c0,15.6,0.6,25.2,1.9,28.8c1.3,3.6,4.2,5.5,8.9,5.5c4.7,0,7.8-2.1,9.1-6.3c1.3-4.2,2-14.2,2-30V313.9z" id="BJr-H0n3Uvf"/>
                                </g>
                            </g>
                        </g>
                        <g id="r1L-rR2nLDG">
                            <g id="BywZH0hhLvG">
                                <g id="SJu-r0hn8PG_SJ-HXa8vf" data-animator-group="true" data-animator-type="2">
                                    <path d="M1032,100.3V155h-50.5v-54.7H1032z" id="SJu-r0hn8PG"/>
                                </g>
                            </g>
                            <g id="rJFZrA23LPf">
                                <path d="M1154.4,100.3V155h-50.5v-54.7H1154.4z" id="Sy5WS022Lwf"/>
                            </g>
                        </g>
                        <g id="rki-SR2nLvf">
                            <g id="Hyn-BA2nLvM">
                                <path d="M1032,441.2v54.7h-50.5v-54.7H1032z" id="H16ZSRnn8PM"/>
                            </g>
                            <g id="BkRbr0238wG">
                                <path d="M1154.4,441.2v54.7h-50.5v-54.7H1154.4z" id="rJyzBChhLDf"/>
                            </g>
                        </g>
                        <g id="rJlfrAh3IPM">
                            <g id="S1Zzr0228Pz">
                                <path d="M1224,562.1v45.8c-42.1,38.2-93.8,57.3-155.2,57.3c-59.2,0-111.6-19.1-157-57.3v-45.4c47.5,35.8,99.9,53.7,157,53.7&#10;&#9;&#9;&#9;&#9;C1125.9,616.2,1177.6,598.2,1224,562.1z" id="BJGfSA33LPz"/>
                            </g>
                            <g id="Bk7fHC2nUvG">
                                <g id="HyVGHRnhLwz_B1dPXa8wz" data-animator-group="true" data-animator-type="0">
                                    <path d="M1224,323.3v45.4c-46.1-36.2-97.8-54.3-155.2-54.3c-56.9,0-109.2,18.1-157,54.3V323c45.5-38.3,97.8-57.5,157-57.5&#10;&#9;&#9;&#9;&#9;C1129.7,265.5,1181.4,284.8,1224,323.3z" id="HyVGHRnhLwz"/>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                </div>
            </a>
        </div> 
        @endif
        <div class="main-nav">
            <div class="overly"></div>
            @if($menu == 'home')
            <div class="container-fluid">
            @endif
                <ul>
                    <li><a href="{{url('/')}}"><i class="fa fa-home"></i> HOME</a></li>
                    <li><a href="{{url('lost-list')}}">LOST ITEMS</a></li>
                    <li><a href="{{url('found-list')}}">FOUND ITEMS</a></li>
                    <li><a href="{{url('lost-report')}}">REPORT LOST ITEM</a></li>
                    <li><a href="{{url('found-report')}}">REPORT FOUND ITEM</a></li>
                    <li><a href="{{url('how-to')}}"><i class="fa fa-question-circle"></i> HOW TO</a></li>
                </ul>
            @if($menu == 'home')
            </div>
            @endif
        </div>
        @if($menu == 'home')
        <!-- animated logo -->
        <div class="logo animated zoomIn">
        <a href="index.html">
          <div class="svg">
              <svg version="1.1" id="r1ulHRhnIDG" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1224 792" style="enable-background:new 0 0 1224 792;" xmlns:svgjs="http://svgjs.com/svgjs">
                <style type="text/css">
                    @-webkit-keyframes Bk0lr0n3UDz_Sy__w6IPM_Animation {
                0% {
                    -webkit-transform: rotate(-180deg);
                            transform: rotate(-180deg);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                33.33% {
                    -webkit-transform: rotate(0deg);
                            transform: rotate(0deg);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    -webkit-transform: rotate(0deg);
                            transform: rotate(0deg);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @keyframes Bk0lr0n3UDz_Sy__w6IPM_Animation {
                0% {
                    -webkit-transform: rotate(-180deg);
                            transform: rotate(-180deg);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                33.33% {
                    -webkit-transform: rotate(0deg);
                            transform: rotate(0deg);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    -webkit-transform: rotate(0deg);
                            transform: rotate(0deg);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @-webkit-keyframes Bk0lr0n3UDz_Animation {
                0% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                33.33% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @keyframes Bk0lr0n3UDz_Animation {
                0% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                33.33% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @-webkit-keyframes BJGfSA33LPz_Animation {
                66.67% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                0% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @keyframes BJGfSA33LPz_Animation {
                66.67% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                0% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @-webkit-keyframes rJyzBChhLDf_Animation {
                66.67% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                0% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @keyframes rJyzBChhLDf_Animation {
                66.67% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                0% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @-webkit-keyframes H16ZSRnn8PM_Animation {
                66.67% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                0% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @keyframes H16ZSRnn8PM_Animation {
                66.67% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                0% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @-webkit-keyframes H1mbBA3nUPz_Animation {
                33.33% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                66.67% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                0% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @keyframes H1mbBA3nUPz_Animation {
                33.33% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                66.67% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                0% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @-webkit-keyframes H1GbBR3nIwM_Animation {
                33.33% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                66.67% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                0% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @keyframes H1GbBR3nIwM_Animation {
                33.33% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                66.67% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                0% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @-webkit-keyframes rJW-HRhhLDz_Animation {
                33.33% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                66.67% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                0% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @keyframes rJW-HRhhLDz_Animation {
                33.33% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                66.67% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                0% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @-webkit-keyframes BklZHRnhLPz_Animation {
                33.33% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                66.67% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                0% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @keyframes BklZHRnhLPz_Animation {
                33.33% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                66.67% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                0% {
                    opacity: 0;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    opacity: 1;
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @-webkit-keyframes HyVGHRnhLwz_B1dPXa8wz_Animation {
                15.56% {
                    -webkit-transform: translate(0px, -100px);
                            transform: translate(0px, -100px);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                33.33% {
                    -webkit-transform: translate(0px, 0px);
                            transform: translate(0px, 0px);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                0% {
                    -webkit-transform: translate(0px, -100px);
                            transform: translate(0px, -100px);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    -webkit-transform: translate(0px, 0px);
                            transform: translate(0px, 0px);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @keyframes HyVGHRnhLwz_B1dPXa8wz_Animation {
                15.56% {
                    -webkit-transform: translate(0px, -100px);
                            transform: translate(0px, -100px);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                33.33% {
                    -webkit-transform: translate(0px, 0px);
                            transform: translate(0px, 0px);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                0% {
                    -webkit-transform: translate(0px, -100px);
                            transform: translate(0px, -100px);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    -webkit-transform: translate(0px, 0px);
                            transform: translate(0px, 0px);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @-webkit-keyframes SJu-r0hn8PG_SJ-HXa8vf_Animation {
                0% {
                    -webkit-transform: scale(1, 1);
                            transform: scale(1, 1);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                33.33% {
                    -webkit-transform: scale(1, 1);
                            transform: scale(1, 1);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    -webkit-transform: scale(1, 1);
                            transform: scale(1, 1);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @keyframes SJu-r0hn8PG_SJ-HXa8vf_Animation {
                0% {
                    -webkit-transform: scale(1, 1);
                            transform: scale(1, 1);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                33.33% {
                    -webkit-transform: scale(1, 1);
                            transform: scale(1, 1);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    -webkit-transform: scale(1, 1);
                            transform: scale(1, 1);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @-webkit-keyframes SyaxB032LwG_BJosz6UwM_Animation {
                0% {
                    -webkit-transform: scale(0.5, 0.5);
                            transform: scale(0.5, 0.5);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                33.33% {
                    -webkit-transform: scale(1, 1);
                            transform: scale(1, 1);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    -webkit-transform: scale(1, 1);
                            transform: scale(1, 1);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @keyframes SyaxB032LwG_BJosz6UwM_Animation {
                0% {
                    -webkit-transform: scale(0.5, 0.5);
                            transform: scale(0.5, 0.5);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                33.33% {
                    -webkit-transform: scale(1, 1);
                            transform: scale(1, 1);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    -webkit-transform: scale(1, 1);
                            transform: scale(1, 1);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @-webkit-keyframes HyheH02nIvM_HyHLGTIPz_Animation {
                0% {
                    -webkit-transform: scale(0.5, 0.5);
                            transform: scale(0.5, 0.5);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                33.33% {
                    -webkit-transform: scale(1, 1);
                            transform: scale(1, 1);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    -webkit-transform: scale(1, 1);
                            transform: scale(1, 1);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @keyframes HyheH02nIvM_HyHLGTIPz_Animation {
                0% {
                    -webkit-transform: scale(0.5, 0.5);
                            transform: scale(0.5, 0.5);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                33.33% {
                    -webkit-transform: scale(1, 1);
                            transform: scale(1, 1);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    -webkit-transform: scale(1, 1);
                            transform: scale(1, 1);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @-webkit-keyframes BJr-H0n3Uvf_S1xc-T28wG_Animation {
                0% {
                    -webkit-transform: scale(0.5, 0.5);
                            transform: scale(0.5, 0.5);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                33.33% {
                    -webkit-transform: scale(1, 1);
                            transform: scale(1, 1);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    -webkit-transform: scale(1, 1);
                            transform: scale(1, 1);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @keyframes BJr-H0n3Uvf_S1xc-T28wG_Animation {
                0% {
                    -webkit-transform: scale(0.5, 0.5);
                            transform: scale(0.5, 0.5);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                33.33% {
                    -webkit-transform: scale(1, 1);
                            transform: scale(1, 1);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    -webkit-transform: scale(1, 1);
                            transform: scale(1, 1);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @-webkit-keyframes r1igS0h3Iwz_H1M--aLPG_Animation {
                0% {
                    -webkit-transform: scale(0.5, 0.5);
                            transform: scale(0.5, 0.5);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                33.33% {
                    -webkit-transform: scale(1, 1);
                            transform: scale(1, 1);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    -webkit-transform: scale(1, 1);
                            transform: scale(1, 1);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @keyframes r1igS0h3Iwz_H1M--aLPG_Animation {
                0% {
                    -webkit-transform: scale(0.5, 0.5);
                            transform: scale(0.5, 0.5);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                33.33% {
                    -webkit-transform: scale(1, 1);
                            transform: scale(1, 1);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    -webkit-transform: scale(1, 1);
                            transform: scale(1, 1);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @-webkit-keyframes BJr-H0n3Uvf_rypgp3Lwf_Animation {
                0% {
                    -webkit-transform: translate(0px, -70px);
                            transform: translate(0px, -70px);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                33.33% {
                    -webkit-transform: translate(0px, -150px);
                            transform: translate(0px, -150px);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                66.67% {
                    -webkit-transform: translate(0px, -150px);
                            transform: translate(0px, -150px);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    -webkit-transform: translate(0px, 150px);
                            transform: translate(0px, 150px);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            @keyframes BJr-H0n3Uvf_rypgp3Lwf_Animation {
                0% {
                    -webkit-transform: translate(0px, -70px);
                            transform: translate(0px, -70px);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                33.33% {
                    -webkit-transform: translate(0px, -150px);
                            transform: translate(0px, -150px);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                66.67% {
                    -webkit-transform: translate(0px, -150px);
                            transform: translate(0px, -150px);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
                100% {
                    -webkit-transform: translate(0px, 150px);
                            transform: translate(0px, 150px);
                    transform-box: fill-box;
                    -webkit-transform-origin: 50% 50%;
                            transform-origin: 50% 50%
                }
            }
            #r1ulHRhnIDG * {
                -webkit-animation-duration: 1.5s;
                        animation-duration: 1.5s;
                -webkit-animation-timing-function: cubic-bezier(0, 0, 1, 1);
                        animation-timing-function: cubic-bezier(0, 0, 1, 1)
            }
            #BJr-H0n3Uvf_rypgp3Lwf {
                -webkit-animation-name: BJr-H0n3Uvf_rypgp3Lwf_Animation;
                        animation-name: BJr-H0n3Uvf_rypgp3Lwf_Animation
            }
            #r1igS0h3Iwz_H1M--aLPG {
                -webkit-animation-name: r1igS0h3Iwz_H1M--aLPG_Animation;
                        animation-name: r1igS0h3Iwz_H1M--aLPG_Animation;
                -webkit-animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1);
                        animation-timing-function: cubic-bezier(0.42, 0, 0.58, 1)
            }
            #BJr-H0n3Uvf_S1xc-T28wG {
                -webkit-animation-name: BJr-H0n3Uvf_S1xc-T28wG_Animation;
                        animation-name: BJr-H0n3Uvf_S1xc-T28wG_Animation
            }
            #HyheH02nIvM_HyHLGTIPz {
                -webkit-animation-name: HyheH02nIvM_HyHLGTIPz_Animation;
                        animation-name: HyheH02nIvM_HyHLGTIPz_Animation
            }
            #SyaxB032LwG_BJosz6UwM {
                -webkit-animation-name: SyaxB032LwG_BJosz6UwM_Animation;
                        animation-name: SyaxB032LwG_BJosz6UwM_Animation
            }
            #SJu-r0hn8PG_SJ-HXa8vf {
                -webkit-animation-name: SJu-r0hn8PG_SJ-HXa8vf_Animation;
                        animation-name: SJu-r0hn8PG_SJ-HXa8vf_Animation
            }
            #HyVGHRnhLwz_B1dPXa8wz {
                -webkit-animation-name: HyVGHRnhLwz_B1dPXa8wz_Animation;
                        animation-name: HyVGHRnhLwz_B1dPXa8wz_Animation
            }
            #BklZHRnhLPz {
                -webkit-animation-name: BklZHRnhLPz_Animation;
                        animation-name: BklZHRnhLPz_Animation
            }
            #rJW-HRhhLDz {
                -webkit-animation-name: rJW-HRhhLDz_Animation;
                        animation-name: rJW-HRhhLDz_Animation
            }
            #H1GbBR3nIwM {
                -webkit-animation-name: H1GbBR3nIwM_Animation;
                        animation-name: H1GbBR3nIwM_Animation
            }
            #H1mbBA3nUPz {
                -webkit-animation-name: H1mbBA3nUPz_Animation;
                        animation-name: H1mbBA3nUPz_Animation
            }
            #H16ZSRnn8PM {
                -webkit-animation-name: H16ZSRnn8PM_Animation;
                        animation-name: H16ZSRnn8PM_Animation
            }
            #rJyzBChhLDf {
                -webkit-animation-name: rJyzBChhLDf_Animation;
                        animation-name: rJyzBChhLDf_Animation
            }
            #BJGfSA33LPz {
                -webkit-animation-name: BJGfSA33LPz_Animation;
                        animation-name: BJGfSA33LPz_Animation
            }
            #Bk0lr0n3UDz {
                -webkit-animation-name: Bk0lr0n3UDz_Animation;
                        animation-name: Bk0lr0n3UDz_Animation
            }
            #Bk0lr0n3UDz_Sy__w6IPM {
                -webkit-animation-name: Bk0lr0n3UDz_Sy__w6IPM_Animation;
                        animation-name: Bk0lr0n3UDz_Sy__w6IPM_Animation
            }
                </style>
                <style type="text/css"/>
                <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="0" x2="0.7071" y2="0.7071">
                    <stop offset="0" style="stop-color:#DEDFE3"/>
                    <stop offset="0.1738" style="stop-color:#D8D9DD"/>
                    <stop offset="0.352" style="stop-color:#C9CACD"/>
                    <stop offset="0.5323" style="stop-color:#B4B5B8"/>
                    <stop offset="0.7139" style="stop-color:#989A9C"/>
                    <stop offset="0.8949" style="stop-color:#797C7E"/>
                    <stop offset="1" style="stop-color:#656B6C"/>
                </linearGradient>
                <g id="SktxS0hnLvM" class="svg-logo">
                    <g id="ry5gSAhn8wf">
                        <g id="r1igS0h3Iwz_H1M--aLPG" data-animator-group="true" data-animator-type="2">
                            <path d="M75.6,102.6v214.6H118v53.7H5.9V102.6H75.6z" id="r1igS0h3Iwz"/>
                        </g>
                        <g id="HyheH02nIvM_HyHLGTIPz" data-animator-group="true" data-animator-type="2">
                            <path d="M462.2,183.8h-64.8v-19.9c0-9.3-0.8-15.2-2.5-17.7c-1.7-2.5-4.4-3.8-8.3-3.8c-4.2,0-7.4,1.7-9.5,5.1&#10;&#9;&#9;&#9;c-2.2,3.4-3.2,8.6-3.2,15.6c0,9,1.2,15.7,3.6,20.2c2.3,4.5,8.9,10,19.7,16.4c31,18.4,50.6,33.6,58.7,45.4&#10;&#9;&#9;&#9;c8.1,11.8,12.1,30.9,12.1,57.2c0,19.1-2.2,33.2-6.7,42.2c-4.5,9.1-13.1,16.7-25.9,22.8c-12.8,6.1-27.7,9.2-44.7,9.2&#10;&#9;&#9;&#9;c-18.7,0-34.6-3.5-47.8-10.6c-13.2-7.1-21.8-16.1-25.9-27c-4.1-10.9-6.1-26.5-6.1-46.6v-17.6h64.8v32.6c0,10.1,0.9,16.5,2.7,19.4&#10;&#9;&#9;&#9;s5.1,4.3,9.7,4.3s8.1-1.8,10.4-5.5c2.3-3.6,3.4-9.1,3.4-16.2c0-15.8-2.2-26.1-6.5-31c-4.4-4.9-15.3-13-32.6-24.4&#10;&#9;&#9;&#9;c-17.3-11.5-28.8-19.8-34.5-25s-10.3-12.4-14-21.5c-3.7-9.2-5.6-20.9-5.6-35.1c0-20.5,2.6-35.6,7.9-45.1&#10;&#9;&#9;&#9;c5.2-9.5,13.7-16.9,25.4-22.3c11.7-5.4,25.8-8,42.4-8c18.1,0,33.6,2.9,46.3,8.8c12.8,5.9,21.2,13.2,25.3,22.1&#10;&#9;&#9;&#9;c4.1,8.9,6.2,24,6.2,45.3V183.8z" id="HyheH02nIvM"/>
                        </g>
                        <g id="SyaxB032LwG_BJosz6UwM" data-animator-group="true" data-animator-type="2">
                            <path d="M630.3,102.6v53.7h-41.4v214.6h-69.8V156.3h-41.3v-53.7H630.3z" id="SyaxB032LwG"/>
                        </g>
                        <g id="Bk0lr0n3UDz_Sy__w6IPM" data-animator-group="true" data-animator-type="1">
                            <path d="M883,269v45.2l-18.7,11.9l23.4,44.7h-62l-8-14.9c-20.8,13.7-40.4,20.5-59,20.5c-19.4,0-34.4-6.5-44.9-19.4&#10;&#9;&#9;&#9;c-10.5-12.9-15.7-28.5-15.7-46.7c0-14.6,3.1-26,9.3-34.3c6.2-8.3,15.5-15,27.8-20.2c-17.7-12.7-26.5-29.9-26.5-51.5&#10;&#9;&#9;&#9;c0-18.7,6.3-33.7,18.9-45.1c12.6-11.4,29.9-17.1,52-17.1c19.9,0,35.5,5.6,47,16.7c11.4,11.2,17.1,25.3,17.1,42.6&#10;&#9;&#9;&#9;c0,18.1-7,34.2-20.9,48.2l23.6,42.7L883,269z M794.8,325.7l-21.6-36.2c-8.3,7.5-12.4,15.6-12.4,24.4c0,6.3,1.3,11,3.9,14.2&#10;&#9;&#9;&#9;c2.6,3.1,6.4,4.7,11.5,4.7C781.5,332.8,787.7,330.4,794.8,325.7z M779.6,221.9c7.6-9.8,11.4-19.2,11.4-28.2&#10;&#9;&#9;&#9;c0-3.9-1.1-7.4-3.3-10.6c-2.2-3.2-5.3-4.8-9.3-4.8c-3.6,0-6.4,1.2-8.3,3.6c-1.9,2.4-2.8,6.1-2.8,11.1&#10;&#9;&#9;&#9;C767.4,203.5,771.4,213.1,779.6,221.9z" id="Bk0lr0n3UDz"/>
                        </g>
                    </g>
                    <g id="r1y-r0nn8PG">
                        <path d="M0,391h118.1v53.7H69.8v50.9h43.1v51H69.8v112.7H0V391z" id="BklZHRnhLPz"/>
                        <path d="M473,391v179.3c0,20.3-0.7,34.6-2,42.8c-1.3,8.2-5.2,16.7-11.8,25.4c-6.5,8.7-15.1,15.2-25.8,19.7&#10;&#9;&#9;&#9;c-10.7,4.5-23.2,6.7-37.7,6.7c-16,0-30.2-2.7-42.4-8c-12.3-5.3-21.4-12.2-27.5-20.7c-6.1-8.5-9.7-17.5-10.8-26.9&#10;&#9;&#9;&#9;c-1.1-9.4-1.7-29.3-1.7-59.6V391h69.8v201.1c0,11.7,0.6,19.2,1.9,22.5c1.3,3.3,3.8,4.9,7.7,4.9c4.4,0,7.3-1.8,8.5-5.4&#10;&#9;&#9;&#9;c1.3-3.6,1.9-12.1,1.9-25.4V391H473z" id="rJW-HRhhLDz"/>
                        <path d="M655.8,391v268.2h-61.1l-36.3-121.9v121.9H500V391h58.3l39.1,120.8V391H655.8z" id="H1GbBR3nIwM"/>
                        <path d="M683.8,391H736c33.7,0,56.5,1.5,68.3,4.6c11.9,3.1,20.9,8.2,27.1,15.2c6.2,7.1,10,14.9,11.6,23.6&#10;&#9;&#9;&#9;c1.5,8.7,2.3,25.7,2.3,51.1v93.9c0,24.1-1.1,40.2-3.4,48.3c-2.3,8.1-6.2,14.5-11.8,19.1c-5.6,4.6-12.6,7.8-20.9,9.6&#10;&#9;&#9;&#9;c-8.3,1.8-20.8,2.7-37.4,2.7h-88V391z M753.5,436.8v176.5c10,0,16.2-2,18.6-6c2.3-4,3.5-15,3.5-32.9V470.1&#10;&#9;&#9;&#9;c0-12.2-0.4-19.9-1.2-23.4c-0.8-3.4-2.5-5.9-5.3-7.5C766.4,437.6,761.2,436.8,753.5,436.8z" id="H1mbBA3nUPz"/>
                    </g>
                    <g id="S14Wr022IwM">
                        <g id="BJr-H0n3Uvf_rypgp3Lwf" data-animator-group="true" data-animator-type="0">
                            <g id="BJr-H0n3Uvf_S1xc-T28wG" data-animator-group="true" data-animator-type="2">
                                <path d="M299.1,402c0,27-0.6,46-1.9,57.2c-1.3,11.2-5.2,21.5-11.9,30.7c-6.7,9.3-15.7,16.4-27.1,21.4c-11.4,5-24.6,7.5-39.8,7.5&#10;&#9;&#9;&#9;c-14.4,0-27.3-2.3-38.7-7c-11.4-4.7-20.6-11.7-27.6-21.1c-7-9.4-11.1-19.6-12.4-30.7c-1.3-11-2-30.4-2-58v-45.9&#10;&#9;&#9;&#9;c0-26.9,0.6-46,1.9-57.2c1.3-11.2,5.2-21.5,11.9-30.7c6.7-9.3,15.7-16.4,27.1-21.4c11.4-5,24.6-7.5,39.8-7.5&#10;&#9;&#9;&#9;c14.4,0,27.3,2.3,38.7,7c11.4,4.7,20.6,11.7,27.6,21.1c7,9.4,11.1,19.6,12.4,30.7c1.3,11,2,30.4,2,58V402z M229.4,313.9&#10;&#9;&#9;&#9;c0-12.5-0.7-20.5-2.1-23.9c-1.4-3.5-4.2-5.2-8.5-5.2c-3.6,0-6.4,1.4-8.4,4.2c-1.9,2.8-2.9,11.1-2.9,24.9v125.3&#10;&#9;&#9;&#9;c0,15.6,0.6,25.2,1.9,28.8c1.3,3.6,4.2,5.5,8.9,5.5c4.7,0,7.8-2.1,9.1-6.3c1.3-4.2,2-14.2,2-30V313.9z" id="BJr-H0n3Uvf"/>
                            </g>
                        </g>
                    </g>
                    <g id="r1L-rR2nLDG">
                        <g id="BywZH0hhLvG">
                            <g id="SJu-r0hn8PG_SJ-HXa8vf" data-animator-group="true" data-animator-type="2">
                                <path d="M1032,100.3V155h-50.5v-54.7H1032z" id="SJu-r0hn8PG"/>
                            </g>
                        </g>
                        <g id="rJFZrA23LPf">
                            <path d="M1154.4,100.3V155h-50.5v-54.7H1154.4z" id="Sy5WS022Lwf"/>
                        </g>
                    </g>
                    <g id="rki-SR2nLvf">
                        <g id="Hyn-BA2nLvM">
                            <path d="M1032,441.2v54.7h-50.5v-54.7H1032z" id="H16ZSRnn8PM"/>
                        </g>
                        <g id="BkRbr0238wG">
                            <path d="M1154.4,441.2v54.7h-50.5v-54.7H1154.4z" id="rJyzBChhLDf"/>
                        </g>
                    </g>
                    <g id="rJlfrAh3IPM">
                        <g id="S1Zzr0228Pz">
                            <path d="M1224,562.1v45.8c-42.1,38.2-93.8,57.3-155.2,57.3c-59.2,0-111.6-19.1-157-57.3v-45.4c47.5,35.8,99.9,53.7,157,53.7&#10;&#9;&#9;&#9;&#9;C1125.9,616.2,1177.6,598.2,1224,562.1z" id="BJGfSA33LPz"/>
                        </g>
                        <g id="Bk7fHC2nUvG">
                            <g id="HyVGHRnhLwz_B1dPXa8wz" data-animator-group="true" data-animator-type="0">
                                <path d="M1224,323.3v45.4c-46.1-36.2-97.8-54.3-155.2-54.3c-56.9,0-109.2,18.1-157,54.3V323c45.5-38.3,97.8-57.5,157-57.5&#10;&#9;&#9;&#9;&#9;C1129.7,265.5,1181.4,284.8,1224,323.3z" id="HyVGHRnhLwz"/>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
          </div>
         </a>
        </div>
        <!-- animated logo end -->
        <!-- search -->
        <section class="search">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <a class="animated slideInDown" href="lost-report.html">
                          <h1>Lost something ?</h1>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="animated slideInDown" href="found-report.html">
                            <h1>Found something ?</h1>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container d-none d-sm-block">
                <div class="lost-search animated jackInTheBox add-1s">
                    <form>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><h3>What?</h3></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your losted item">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><h3>Where?</h3></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter where you lost">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary btn-block btn-search">Find now</button>
                            </div>
                        </div>
                    <!-- </div> what -->
                    </form>
                </div>
            </div>
        </section>
        @endif
    </header>
    <!-- /header -->
    @yield('content')
    <!-- subscribe -->
    <section class="q-contact sucscribe">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>To get the latest info about found and lost items in your area — subscribe to our newsletter today</h4>
                    <br>
                    <form>
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-3">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter your name">
                            </div>
                            </div>
                            <div class="col-lg-3">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email">
                            </div>
                            </div>
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary btn-block btn-search">Subscribe</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /subscribe -->
    <!-- footer -->    
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h3>ABOUT LOST AND FOUND</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam optio voluptatum aperiam cum! Labore illum ea necessitatibus, quas incidunt porro odio molestiae reiciendis vel consequatur optio? Praesentium laboriosam facere dicta?</p>
                </div>
                <div class="col-lg-3">
                    <h3>QUICK LINK</h3>
                    <ul>
                        <li><a href="{{url('lost-list')}}">LOST ITEMS</a></li>
                        <li><a href="{{url('found-list')}}">FOUND ITEMS</a></li>
                        <li><a href="{{url('lost-report')}}">REPORT LOST ITEM</a></li>
                        <li><a href="{{url('found-report')}}">REPORT FOUND ITEM</a></li>
                        <li><a href="{{url('how-to')}}">HOW TO</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3>LOST AND FOUND</h3>
                    <ul>
                        <li><a href="{{url('/')}}">HOME</a></li>
                        <li><a href="{{url('about')}}">ABOUT US</a></li>
                        <li><a href="{{url('blogs')}}">BLOG</a></li>
                        <li><a href="{{url('privacy')}}">PRIVACY POLICY</a></li>
                        <li><a href="{{url('trams')}}">TRAMS & CONDITION</a></li>
                        <li><a href="{{url('contact')}}">CONTACT US</a></li>
                        <li><a href="{{url('sitemap')}}">SITE MAP</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3>STAY IN TOUCH</h3>
                    <ul class="social-link">
                        <li><a href="#"><i class="fab fa-facebook-square  fa-2x"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-square fa-2x"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube-square fa-2x"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter-square fa-2x"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin fa-2x"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->
    <!-- footer bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6"><p>Copyright &copy; @php echo date('Y'); @endphp - All rights reserved.</p></div>
                <div class="col-lg-6"><p class="float-right">Developed by <a href="#">CloudNEXT Generation Ltd.</a></p></div>
            </div>
        </div>
    </div>
    <!-- /footer bottom -->
    <!-- script -->
    <script src="{{ URL::to('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="{{ URL::to('assets/vendors/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/area.js') }}"></script>
    <!-- data picker -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker({
                maxDate: 0,
                dateFormat: 'yy-mm-dd'
            });
        } );
    </script>
</body>
</html>