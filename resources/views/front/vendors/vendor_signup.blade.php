@extends('front.layouts.template')

@section('content')
<!-- mainbody -->
<section class="main-body">
    <div class="log-us">
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
                    @if (Session::has('error'))
                    <div class="alert alert-danger">
                        <strong>Sorry!</strong> {{Session::get('error')}}
                    </div>
                    @endif
                    <!-- <div class="sign-in mx-auto"> -->
                    <div class="log-in">
                        <h1>{{ $title }}</h1>
                        <form method="POST" action="{{ url('vendors-do-signup') }}">
                        {{ csrf_field() }}
                            <!-- personal info -->
                            <div class="form-row">
                                <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }} col-md-6">
                                    <label for="type" class="col-form-label">Vendor Type</label>
                                    <select class="form-control" name="type" id="type" required>
                                        <option value="">Please Select...</option>
                                        @if(!empty($vendors_types[0]))
                                        @foreach($vendors_types as $ven_type)
                                        <option value="{{ $ven_type->vendor_types_id }}">{{ $ven_type->vendor_types_name }}</option>
                                        @endforeach
                                        @endif
                                        @if ($errors->has('type'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('type') }}</strong>
                                        </span>
                                        @endif
                                     </select>
                                </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-6">
                                <label for="name" class="col-form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Your full name" required>
                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                              </div>
                              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-6">
                                <label for="email" class="col-form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="example@gmail.com" required>
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-6">
                                <label for="password" class="col-form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                              </div>
                              <div class="form-group col-md-6">
                                <label for="re-type_assword" class="col-form-label">Re-type password</label>
                                <input type="password" class="form-control" id="re-type_assword" name="password_confirmation" placeholder="Re-type password" required>
                              </div>
                            </div>
                            <!-- address area -->
                            <div class="form-row">
                                <div class="form-group{{ $errors->has('division') ? ' has-error' : '' }} col-md-6">
                                    <label for="vendortype" class="col-form-label">Division</label>
                                    <select class="form-control" name="division" id="address_division" required>
                                        <option value="">Please Select</option>
                                        @if(!empty($divis['0']))
                                        @foreach($divis as $divi)
                                        <option value="{{ $divi->id }}">{{ $divi->di_name }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                    @if ($errors->has('division'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('division') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('area') ? ' has-error' : '' }} col-md-6">
                                    <label for="area">Area<sup>*</sup></label>
                                    <select class="form-control" name="area" id="address_area" required>
                                        <option value="">Please Select</option>
                                    </select>
                                    @if ($errors->has('area'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('area') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="inputAddress" class="col-form-label">Address</label>
                                <textarea class="form-control" name="address" rows="2" placeholder="e.g. section A, Block C" required>{{ old('address') }}</textarea>
                                @if ($errors->has('address'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox"> Terms of use
                                </label>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection