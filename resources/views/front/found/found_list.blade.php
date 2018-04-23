@extends('front.layouts.template')

@section('content')
<section class="main-body">
    <div class="filter-sec">
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
            <form method="GET" action="{{ url('found-search-list') }}">
                <div class="row">
                    <div class="col-lg-2">
                        <h3 class="title">{{ $title }}</h3>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="Category"><h3>Category?</h3></label>
                            <select class="form-control" id="Category" name="ItemCategory" required>
                                <option value="">Select category</option>
                                @foreach($postcats as $cat_list)
                                <option value="{{ $cat_list->post_category_slug }}">{{ $cat_list->post_category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="division_slug"><h3>Division?</h3></label>
                            <select class="form-control" id="division_slug" name="DiviName" required>
                                <option selected>Select division</option>
                                @foreach($divisions as $divi_list)
                                <option value="{{ $divi_list->divi_slug }}">{{ $divi_list->divi_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="area"><h3>Area?</h3></label>
                            <select class="form-control" name="AreaName" id="area" required>
                                <option value="">Please Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="exampleInputEmail1"><h3>Found date?</h3></label>
                            <input type="text" id="datepicker" class="form-control" name="FoundDate" placeholder="found date here" readonly>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <button type="submit" class="btn btn-primary btn-block btn-search">Find now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="recent-item clearfix">
    <br>
    <div class="recent-item-body lost-list">
        <div class="lost-i">
            <!-- row start -->
            <div class="row">
                @if(isset($lists[0]))
                @foreach($lists as $list)
                <div class="col-lg-2">
                    <div class="i-card">
                        <div class="i-card-img">
                            <img class="" src="{{ URL::to('assets/images/found_report/' . $list->found_item_image) }}" alt="{{ $list->found_item_name }}">
                        </div>
                        <div class="i-card-body lost-bg">
                            <a href="{{ url('/found-item-details/'. $list->found_id) }}" class="i-text">
                              <div class="hh">What?</div>  
                              <h5 class="i-card-title">{{ $list->found_item_name }}</h5>
                              <div class="hh">Where?</div> 
                              <p class="i-card-text"><i class="fa fa-map-marker"></i> {{ $list->area_name }}</p>
                              <div class="hh">When?</div> 
                              <p class="i-card-text"><i class="fa fa-calendar-alt"></i> {{ $list->found_date}}</p>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col-lg-12">
                    <div class="alert alert-danger">
                      <strong>Empty!</strong> There is no result!
                    </div>
                </div>
                @endif
            </div> <!-- /row start -->
            <br>
            <!-- another row -->
            <br>
            <!-- pagination -->
            {{ $lists->links() }}
            <!-- <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Prev</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav> -->
            <br>
        </div>
      </div>
    </div>
</section>
<section class="report-sec">
    <div class="report-btn">
        <ul>
            <li><a class="alt" href="{{ url('lost-report') }}">I didn't find my lost item</a></li>
            <li><a href="#">I want to report found item</a></li>
        </ul>
    </div>
</section>
@endsection