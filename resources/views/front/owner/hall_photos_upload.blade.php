@extends('front.layouts.template')

@section('content')
<!-- main body section -->
<section class="main-body">
    <div class="venue-panel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    @include('front.owner.left_menu')
                </div>
                <div class="col-lg-10">
                    <div class="user-body-sec grid">
                        
                                <div class="card" id="highlight-">
                                    <h4 class="card-header">Images Gallery</h4>
                                    <div class="card-body">
                                        <div class="venue-photos">
                                            <h4></h4>
                                            <img src="{{URL::to('assets/images/v2.jpg') }}" class="img-fluid"> 
                                            <img src="{{URL::to('assets/images/v2.jpg') }}" class="img-fluid"> 
                                            <img src="{{URL::to('assets/images/v2.jpg') }}" class="img-fluid"> 
                                            <img src="{{URL::to('assets/images/v2.jpg') }}" class="img-fluid"> 
                                            <img src="{{URL::to('assets/images/v2.jpg') }}" class="img-fluid"> 
                                            <div class="clearfix"></div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="file2">Upload Photo</label>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="custom-file">
                                                        <input type="file" id="file2" class="custom-file-input">
                                                        <span class="custom-file-control"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <a class="btn btn-info" href="#">Save</a>
                                        </div>
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