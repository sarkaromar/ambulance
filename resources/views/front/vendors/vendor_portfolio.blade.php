@extends('front.layouts.template')

@section('content')
<!-- main body section -->
<section class="main-body">
        <div class="venue-panel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2">
                        @include('front.vendors.left_menu_vendor')
                    </div>
                    <div class="col-lg-10">
                        <div class="user-body-sec grid">
                            <div class="card" id="highlight-">
                                <h4 class="card-header">Images Gallery</h4>
                                <div class="card-body">
                                    @if (Session::has('error'))
                                    <div class="alert alert-danger"><strong>Sorry!</strong> {{Session::get('error')}}</div>
                                    @endif
                                    @if (Session::has('success'))
                                    <div class="alert alert-success"><strong>Thanks!</strong> {{Session::get('success')}}</div>
                                    @endif
                                    <div class="venue-photos">
                                        <form action="{{ route('vendors-photo-update') }}" method="POST"  enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                            @if(!empty($images[0]))
                                            @foreach( $images as $image)
                                            <img src="{{URL::to('img/vendor_photo/', $image->portfolio_images) }}" class="img-fluid">
                                            <input type="hidden" name="old_images[]" value="{{ $image->portfolio_images }}"> 
                                            @endforeach
                                            @else
                                            <div class="alert alert-warning"><strong>Your Gallery is empty!</strong> Please upload some image!</div>
                                            @endif
                                            <div class="clearfix"></div>
                                            <div class="form-group">
                                                <div class="col-md-3"> 
                                                    <input type="file" name="images[]" multiple required/>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection