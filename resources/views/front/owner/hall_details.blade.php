@extends('front.layouts.template')

@section('content')
<section class="main-body">
    <div class="venue-panel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2">
                    @include('front.owner.left_menu')
                </div>
                <div class="col-lg-10">
                    <div class="user-body-sec grid">
                        @if($error)
                        <div class="alert alert-danger">
                            <strong>Sorry!</strong> Invalid Details!
                        </div>
                        @else
                        <div class="venue-details hall">
                            <div class="card" id="name">
                                <h4 class="card-header">Name : <span style="color: #e53935">{{ $info->ha_name }}</span></h4>
                            </div>
                            <div class="card" id="price">
                                <h4 class="card-header">Start From Per Guest: <span style="color: #e53935">{{ $info->ha_gst_min_rate}}</span> Tk.</h4>
                            </div>
                            <div class="card" id="highlights">
                                    <h4 class="card-header">Photos</h4>
                                    <div class="card-body">
                                    <div class="photos">
                                        <div class="">
                                            @if(isset($images[0]))
                                            @foreach($images as $img)
                                            <div class="item" data-slide-number="0">
                                                <img src="{{ URL::to('img/hall_photo/',$img->ha_image) }}" class="img-fluid">
                                            </div>
                                            @endforeach
                                            @endif
                                        </div>
                                        <div class="clear-fix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" id="about">
                                <h4 class="card-header">About</h4>
                                <div class="card-body">
                                    {{ $info->ha_about }}
                                    <div class="clear-fix"></div>
                                </div>
                            </div>

                            <div class="card" id="highlights">
                                <h4 class="card-header">Highlights</h4>
                                <div class="card-body">
                                    <ul>
                                        <li><i class="fa fa-glass" aria-hidden="true"></i>Food &amp; Drinkss : 
                                        <?php if($info->ha_hi_food == '1'){ 
                                            echo 'Allowed'; 
                                        }else{
                                            echo 'Not allowed'; 
                                        } ?></li>
                                    <li><i class="fa fa fa-cutlery" aria-hidden="true"></i>Catering : 
                                        <?php if($info->ha_hi_cater == '1'){
                                            echo 'Option to choose'; 
                                        }elseif($info->ha_hi_cater == '2'){
                                            echo 'Inhouse'; 
                                        }elseif($info->ha_hi_cater == '3'){ 
                                            echo 'Outside';
                                        } ?></li>
                                    <li><i class="fa fa-cutlery" aria-hidden="true"></i>Decoration : 
                                    <?php if($info->ha_hi_decor == '1'){
                                            echo 'provide from venue'; 
                                        }elseif($info->ha_hi_decor == '2'){
                                            echo 'Option to choose'; 
                                        }?></li>
                                    <li><i class="fa fa-snowflake-o" aria-hidden="true"></i>AC : 
                                        <?php if($info->ha_hi_ac == '1'){
                                            echo 'Centralized'; 
                                        }elseif($info->ha_hi_ac == '2'){
                                            echo 'Not available'; 
                                        }elseif($info->ha_hi_ac == '3'){
                                            echo 'Semi Cover'; 
                                        }?></li>
                                    </ul>
                                    <div class="clear-fix"></div>
                                </div>
                            </div>
                            <div class="card" id="facilities">
                                <h4 class="card-header">Facilities</h4>
                                <div class="card-body">
                                    <ul>
                                        @if(isset($sel_facis[0]))
                                        @foreach($sel_facis as $sel_fac)
                                        <li><i class="fa fa-{{ $sel_fac->faci_icon }}"></i> {{ $sel_fac->faci_name }}</i></li>
                                        @endforeach
                                        @endif
                                    </ul>
                                    <div class="clear-fix"></div>
                                </div>
                            </div>
                            <div class="card" id="technology">
                                <h4 class="card-header">Technology &amp; Equipment</h4>
                                <div class="card-body">
                                    <ul>
                                        @if(isset($sel_techs[0]))
                                        @foreach($sel_techs as $sel_tech)
                                        <li><i class="fa fa-{{ $sel_tech->tech_icon }}"></i> {{ $sel_tech->tech_name }}</i></li>
                                        @endforeach
                                        @endif
                                    </ul>
                                    <div class="clear-fix"></div>
                                </div>
                            </div>
                            <div class="card" id="suited">
                                <h4 class="card-header">Event for</h4>
                                <div class="card-body">
                                    <ul>
                                        @if(isset($sel_events[0]))
                                        @foreach($sel_events as $event)
                                        <li><i class="fa fa-tag"></i> {{ $event->ev_name }}</li>
                                        @endforeach
                                        @endif
                                    </ul>
                                    <div class="clear-fix"></div>
                                </div>
                            </div>
                            <div class="card" id="capacity">
                                <h4 class="card-header">Parking</h4>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td>Bike</td>
                                                <td>Car</td>
                                                <td>Bus</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $info->ha_pa_bike }}</td>
                                                <td>{{ $info->ha_pa_car }}</td>
                                                <td>{{ $info->ha_pa_bus }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="clear-fix"></div>
                                </div>
                            </div>
                            <div class="card" id="capacity">
                                <h4 class="card-header">Capacity</h4>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td>Minimum Capacity</td>
                                                <td>Floating Capacity</td>
                                                <td>Maximum Capacity</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $info->ha_ca_min }}</td>
                                                <td>{{ $info->ha_ca_float }}</td>
                                                <td>{{ $info->ha_ca_max }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="clear-fix"></div>
                                </div>
                            </div>
                            <div class="card" id="seat">
                                <h4 class="card-header">Seating Arrangements</h4>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td>Shape Name</td>
                                                <td>Theater</td>
                                                <td>Class</td>
                                                <td>Cluster</td>
                                                <td>UShape</td>
                                                <td>Board</td>
                                                <td>Open</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Capacity</td>
                                                <td>{{ $info->ha_se_board }}</td>
                                                <td>{{ $info->ha_se_class }}</td>
                                                <td>{{ $info->ha_se_theat }}</td>
                                                <td>{{ $info->ha_se_resta }}</td>
                                                <td>{{ $info->ha_se_ushape }}</td>
                                                <td>{{ $info->ha_se_open }}</td>
                                            </tr>
                                            <tr>
                                                <td>Shape</td>
                                                <td><img src="{{ URL::to('img/seating_arrang_photo/board.png') }}" alt="board" width="50px"></td>
                                                <td><img src="{{ URL::to('img/seating_arrang_photo/class.png') }}" alt="class" width="50px"></td>
                                                <td><img src="{{ URL::to('img/seating_arrang_photo/theater.png') }}" alt="theater" width="50px"></td>
                                                <td><img src="{{ URL::to('img/seating_arrang_photo/cluster.png') }}" alt="cluster" width="50px"></td>
                                                <td><img src="{{ URL::to('img/seating_arrang_photo/u-shape.png') }}" alt="u-shape" width="50px"></td>
                                                <td><img src="{{ URL::to('img/seating_arrang_photo/open.png') }}" alt="board" width="50px"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="clear-fix"></div>
                                </div>
                            </div>
                            <div class="card" id="policies">
                                <h4 class="card-header">Terms &amp; Conditions</h4>
                                <div class="card-body">
                                    {{ $info->ha_terms }}
                                    <div class="clear-fix"></div>
                                    <a href="{{URL::to('edit-hall', $info->id)}}" class="btn btn-info float-right"><i class="fa fa-pencil"></i> Update</a>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection