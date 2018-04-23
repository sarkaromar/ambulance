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
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-6">
                    <div class="log-in">
                        <h1>{{ $title }} Form</h1>
                        <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="inputName" class="col-form-label">Name</label>
                                <input class="form-control" type="text" id="inputName" name="name" value="{{ old('name') }}" placeholder="Full Name" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="inputEmail" class="col-form-label">Email</label>
                                <input class="form-control" type="email" id="inputEmail" name="email" value="{{ old('email') }}" placeholder="example@gmail.com" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-row">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-6">
                                    <label for="inputPassword4" class="col-form-label">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="InputPassword-confirm" class="col-form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="InputPassword-confirm" name="password_confirmation" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Register</button>
                            Already Registered? 
                            <a href="{{ url('login') }}">Login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </section>
<br>
@endsection