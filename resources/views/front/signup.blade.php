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
                        <!-- <div class="sign-in mx-auto"> -->
                        <div class="log-in">
                            <h1>SIGN UP</h1>
                            <form method="POST" action="{{ route('registration') }}">
                                {{ csrf_field() }}
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputEmail4" class="col-form-label">Email</label>
                                        <input type="email" name="user_email" class="form-control" id="inputEmail4" placeholder="Email">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="col-form-label">Password</label>
                                        <input type="password" name="user_password" class="form-control" id="inputPassword4" placeholder="Password">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputAddress" class="col-form-label">Address</label>
                                      <input type="text" name="user_address_1" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                    </div>
                                    <div class="form-group">
                                      <label for="inputAddress2" class="col-form-label">Address 2</label>
                                      <input type="text" name="user_address_2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                    </div>
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="inputCity" class="col-form-label">City</label>
                                        <input type="text" name="user_city" class="form-control" id="inputCity">
                                      </div>
                                      <div class="form-group col-md-4">
                                        <label for="inputState" class="col-form-label">State</label>
                                        <input type="text" name="user_state" class="form-control" id="inputCity">
                                      </div>
                                      <div class="form-group col-md-2">
                                        <label for="inputZip" class="col-form-label">Zip</label>
                                        <input type="text" name="user_zip" class="form-control" id="inputZip">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox"> Check me out
                                        </label>
                                      </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Sign up</button>
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