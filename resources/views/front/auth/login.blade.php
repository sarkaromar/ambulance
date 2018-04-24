@extends('front.layouts.template')

@section('content')
<!-- main body section -->
<section class="main-body">
        <div class="sub-page login-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <table width="100%">
                            <tr>
                                <td>
                                    <button class="btn btn-primary btn-block"><i class="fa fa-facebook"></i> Log in with Facebook</button>
                                    <button class="btn btn-danger btn-block"><i class="fa fa-google"></i> Log in with Google</button>
                                </td>
                                <td>
                                    <span class="or-sec"><p>or</p></span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-6">
                        @if (Session::has('success'))
                        <div class="alert alert-success">
                            <strong>Congratulations!</strong> {{Session::get('success')}}
                        </div>
                        @endif
                        <!-- <div class="sign-in mx-auto"> -->
                        <div class="log-in">
                            <h1>Login Form</h1>
                            <form method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                    <div class="form-group{{ $errors->has('cre_email') ? ' has-error' : '' }}">
                                        <label for="email">Email address</label>
                                        <input id="email" type="email" class="form-control" placeholder="example@gmail.com" name="cre_email" value="{{ old('cre_email') }}" required autofocus >
                                        @if ($errors->has('cre_email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('cre_email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password">Password</label>
                                        <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-success">Login</button>
                                    <!-- <a href="{{ route('password.request') }}">Forgot Your Password?</a> -->
                                    Not a member yet?
                                    <a href="{{ route('register') }}">Create a free user account</a><br>
                                    <a href="{{ url('vendors-signup') }}">Create a free vendor account</a>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<!-- <section class="main-body">
    <div class="sub-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="log-in">
                        <h1>Log in</h1>
                        <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('ow_email') ? ' has-error' : '' }}">
                                <label for="ow_email">Email address</label>
                                <input id="ow_email" type="email" class="form-control" placeholder="example@gmail.com" name="ow_email" value="{{ old('ow_email') }}" required autofocus >
                                @if ($errors->has('ow_email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ow_email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-success">Login</button>
                            <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
@endsection