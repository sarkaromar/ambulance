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
    <div class="report">
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (Session::has('success'))
            <div class="alert alert-success">
                <strong>Thanks!</strong> {{Session::get('success')}}
            </div>
            @endif
            <form action="{{ url('send-found-report') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group row">
                    <label for="inputItemName" class="col-sm-3 col-form-label">What have you found? <sup style="color:red">*</sup></label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputItemName" name="ItemName" placeholder="Three word max..." required>
                    </div>
                    <div class="col-md-5">
                        <select name="ItemCategory" class="form-control" required>
                          <option value="">Select category</option>
                          @foreach($postcats as $cat_list)
                          <option value="{{ $cat_list->id }}">{{ $cat_list->post_category_name }}</option>
                          @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="division" class="col-sm-3 col-form-label">Where did you found it? <sup style="color:red">*</sup></label>
                    <div class="col-sm-4">
                        <select class="form-control" id="division" name="DiviId" required>
                            <option selected>Select division</option>
                            @foreach($divisions as $divi_list)
                            <option value="{{ $divi_list->id }}">{{ $divi_list->divi_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-5">
                        <select class="form-control" name="AreaId" id="area" required>
                            <option value="">Please Select</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="FoundAddress" placeholder="street address" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">When did you found it? <sup style="color:red">*</sup></label>
                    <div class="col-sm-4">
                        <input type="text" id="datepicker" class="form-control" name="FoundDate" placeholder="found date here" readonly required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Upload" class="col-sm-3 col-form-label">Upload Images</label>
                    <div class="col-sm-4">
                        <input type="file" class="form-control-file" id="Upload" name="images[]" multiple required />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtemDetails" class="col-sm-3 col-form-label">Item Details <sup style="color:red">*</sup></label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="inputtemDetails" name="Details" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-success btn-lg">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<br>
@endsection