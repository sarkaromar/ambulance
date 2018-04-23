@extends('back.layouts.auth')

@section('auth-content')
<div class="layer">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ URL::to('admin/login') }}"><b style="color:#fff;font-size:60px;">Login</b></a>
        </div>
        <div class="login-box-body" style="box-shadow: 0px 0px 20px 5px;">
            <p class="login-box-msg">Hi User!</p>
            <form class="form-horizontal" method="POST" action="{{ route('admin.login.submit') }}">
            {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="example@gmail.com" maxlength="128" required autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" name="password" placeholder="password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> &nbsp; Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection