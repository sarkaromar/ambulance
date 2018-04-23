@extends('front.layouts.template')

@section('content')
<section class="main-body">
    <div class="filter-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6"><h3>{{ $title }}</h3></div>
                <div class="col-lg-6"></div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <table width="100%">
                    <tbody>
                        <tr>
                        <td>
                            <button class="btn btn-primary btn-block"><i class="fab fa-facebook"></i> Log in with Facebook</button>
                            <button class="btn btn-danger btn-block"><i class="fab fa-google"></i> Log in with Google</button>
                        </td>
                        <td>
                            <span class="or-sec"><p>or</p></span>
                        </td>
                    </tr>
                </tbody></table>
            </div>
            <div class="col-lg-6">
                <!-- <div class="sign-in mx-auto"> -->
                <div class="log-in">
                    <h1>{{ $title }} Form</h1>
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="example@gmail.com" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success">Login</button>
                        Not a member yet?
                        <a href="{{ url('register') }}">Create a free account</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
@endsection