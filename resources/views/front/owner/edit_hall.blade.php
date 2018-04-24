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
                    <div class="user-body-sec">
                        <div class="tab-pane fade show active" id="addnew" role="tabpanel" aria-labelledby="addnew-tab">
                            <div class="card" id="highlight-">
                                @if (Session::has('error'))
                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <i class="zmdi zmdi-block pr-15 pull-left"></i><p class="pull-left"><strong>Opps!</strong> {{Session::get('error')}}</p>
                                    <div class="clearfix"></div>
                                </div>
                                @endif
                                @if (Session::has('success'))
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <i class="zmdi zmdi-check pr-15 pull-left"></i><p class="pull-left"><strong>Yay!</strong> {{Session::get('success')}}</p> 
                                    <div class="clearfix"></div>
                                </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if($error)
                                <div class="alert alert-danger">
                                    <strong>Sorry!</strong> Invalid Details!
                                </div>
                                @else
                                <h4 class="card-header">Edit Hall</h4>
                                <div class="card-body">
                                    <form action="{{ route('update_hall') }}" method="POST"  enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div id="error"></div>
                                        <div class="form-group">
                                            <label for="name">Name<sup style="color: red">*</sup></label>
                                            <input type="text" class="form-control" id="name" value="{{ $info[0]->ha_name }}" name="name" placeholder="e.g. hall name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="about">About<sup style="color: red">*</sup></label>
                                            <textarea id="about" class="form-control" rows="5" name="about" placeholder="write about hall..." >{{ $info[0]->ha_about }}</textarea>
                                        </div>  
                                        <h6>Highlights</h6><hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="about">Food & Drinkss<sup style="color: red">*</sup></label>
                                                    <select class="form-control" name="food" required>
                                                        <option value="1" <?php if($info[0]->ha_hi_food == '1'){echo 'selected'; }?>>Allowed</option>
                                                        <option value="0" <?php if($info[0]->ha_hi_food == '0'){echo 'selected'; }?>>Not allowed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="about">Catering<sup style="color: red">*</sup></label>
                                                    <select class="form-control" name="catering" required>
                                                        <option value="1" <?php if($info[0]->ha_hi_cater == '1'){echo 'selected'; }?>>Option to choose</option>
                                                        <option value="2" <?php if($info[0]->ha_hi_cater == '2'){echo 'selected'; }?>>Inhouse</option>
                                                        <option value="3" <?php if($info[0]->ha_hi_cater == '3'){echo 'selected'; }?>>Outside</option>
                                                    </select>
                                                </div>  
                                            </div> 
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="about">Decoration<sup style="color: red">*</sup></label>
                                                    <select class="form-control" name="decoration" required>
                                                        <option value="1" <?php if($info[0]->ha_hi_decor == '1'){echo 'selected'; }?>>Venue owner will provide</option>
                                                        <option value="2" <?php if($info[0]->ha_hi_decor == '2'){echo 'selected'; }?>>Option to choose</option>
                                                    </select>
                                                </div> 
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="about">AC<sup style="color: red">*</sup></label>
                                                    <select class="form-control" name="ac" required>
                                                        <option value="1" <?php if($info[0]->ha_hi_ac == '1'){echo 'selected'; }?>>Centralized</option>
                                                        <option value="2" <?php if($info[0]->ha_hi_ac == '2'){echo 'selected'; }?>>Not available</option>
                                                        <option value="3" <?php if($info[0]->ha_hi_ac == '3'){echo 'selected'; }?>>Semi Cover</option>
                                                    </select>
                                                </div> 
                                            </div> 
                                        </div>  
                                        <h6>Other Options</h6><hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="about"><strong>Old Facilities</strong><sup style="color: red">*</sup></label>
                                                    @foreach ($sel_facis as $sel_faci)
                                                    <button class="btn btn-default btn-xs mr-5"><i class="fa fa-<?= $sel_faci->faci_icon ?>" aria-hidden="true"></i>   {{ $sel_faci->faci_name }}</button> <br>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="about"><strong>Old Tech. & Equip</strong><sup style="color: red">*</sup></label>
                                                    @foreach ($sel_techs as $sel_tech)
                                                    <button class="btn btn-default btn-xs mr-5"><i class="fa fa-<?= $sel_tech->tech_icon ?>" aria-hidden="true"></i>   {{ $sel_tech->tech_name }}</button><br>
                                                    @endforeach
                                                </div>  
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="about"><strong>Old Event Type</strong><sup style="color: red">*</sup></label>
                                                    @foreach ($sel_events as $sel_event)
                                                    <button class="btn btn-default btn-xs mr-5"> {{ $sel_event->ev_name }}</button><br>
                                                    @endforeach
                                                </div>  
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="about"><strong>Facilities</strong><sup style="color: red">*</sup></label>
                                                    @foreach ($facis as $faci)
                                                    <div class="checkbox checkbox-primary">
                                                        <input name="faci[]" value="{{ $faci->id }}" type="checkbox">
                                                        <label>
                                                            <i class="fa fa-{{ $faci->faci_icon }}" aria-hidden="true"></i> {{ $faci->faci_name }}
                                                        </label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="about"><strong>Tech. & Equip</strong><sup style="color: red">*</sup></label>
                                                    @foreach ($techs as $tech)
                                                    <div class="checkbox checkbox-primary">
                                                        <input name="tech[]" value="{{ $tech->id }}" type="checkbox" >
                                                        <label for="checkbox2">
                                                            <i class="fa fa-{{ $tech->tech_icon }}" aria-hidden="true"></i> {{ $tech->tech_name }}
                                                        </label>
                                                    </div>
                                                    @endforeach
                                                </div>  
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="about"><strong>Event For</strong><sup style="color: red">*</sup></label>
                                                    @foreach ($events as $event)
                                                    <div class="checkbox checkbox-primary">
                                                        <input name="event[]" value="{{ $event->id }}" type="checkbox" >
                                                        <label for="checkbox2">{{ $event->ev_name }}</label>
                                                    </div>
                                                    @endforeach
                                                </div>  
                                            </div>
                                        </div>
                                        <h6>Parking</h6><hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" value="{{ $info[0]->ha_pa_bike }}"  name="bike" placeholder="bike" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" value="{{ $info[0]->ha_pa_car }}" name="car" placeholder="car" required>
                                                </div>  
                                            </div> 
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" value="{{ $info[0]->ha_pa_bus }}" name="bus" placeholder="bus" required>
                                                </div> 
                                            </div>
                                        </div>
                                        <h6>Hall Capacity</h6><hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" value="{{ $info[0]->ha_ca_min }}"  name="min" placeholder="minimum seating" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" value="{{ $info[0]->ha_ca_max }}" name="max" placeholder="maximum seating" required>
                                                </div>  
                                            </div> 
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" value="{{ $info[0]->ha_ca_float }}" name="float" placeholder="floating capacity" required>
                                                </div> 
                                            </div>
                                        </div>
                                        <h6>Seating Arrangements</h6><hr>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="caption text-center">
                                                    <h5>Board</h5>
                                                    <img src="{{ URL::to('img/seating_arrang_photo/board.png') }}" alt="" width="60px" />
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" value="{{ $info[0]->ha_se_board }}" name="board">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="caption text-center">
                                                    <h5>Class</h5>
                                                    <img src="{{ URL::to('img/seating_arrang_photo/class.png') }}" alt="" width="60px" />
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" value="{{ $info[0]->ha_se_class }}" name="class">
                                                    </div>
                                                </div> 
                                            </div> 
                                            <div class="col-md-2">
                                                <div class="caption text-center">
                                                    <h5>Theater</h5>
                                                    <img src="{{ URL::to('img/seating_arrang_photo/theater.png') }}" alt="" width="60px" />
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" value="{{ $info[0]->ha_se_theat }}" name="theater" >
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="col-md-2">
                                                <div class="caption text-center">
                                                    <h5>Restaurant</h5>
                                                    <img src="{{ URL::to('img/seating_arrang_photo/cluster.png') }}" alt="" width="60px" />
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" value="{{ $info[0]->ha_se_resta }}" name="restaurant">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="caption text-center">
                                                    <h5>U-shape</h5>
                                                    <img src="{{ URL::to('img/seating_arrang_photo/u-shape.png') }}" alt="" width="60px" />
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" value="{{ $info[0]->ha_se_ushape }}" name="u_shape">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="caption text-center">
                                                    <h5>Open Space</h5>
                                                    <img src="{{ URL::to('img/seating_arrang_photo/board.png') }}" alt="" width="60px" />
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" value="{{ $info[0]->ha_se_open }}" name="open">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Price per guest :<sup style="color: red">*</sup></label>
                                                    <input type="number" class="form-control"  name="min_rate" value="<?=$info[0]->ha_gst_min_rate?>" placeholder="strat from" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Timing :<sup style="color: red">*</sup></label>
                                                    <select class="form-control" name="timing" required>
                                                        <option value="1" <?php if($info[0]->ha_timing == '1'){echo 'selected'; } ?>>Full Day</option>
                                                        <option value="2" <?php if($info[0]->ha_timing == '2'){echo 'selected'; } ?>>Shift Based</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="about">Terms &  conditions<sup style="color: red">*</sup></label>
                                            <textarea class="form-control" rows="5" name="terms" placeholder="write your terms..." >{{ $info[0]->ha_terms }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="about">Main Image :<sup style="color: red">*</sup></label>
                                            <input type="file" name="main_image" />
                                        </div>
                                        <div class="form-group">
                                            <img src="{{ URL::to('img/hall_photo/', $info[0]->ha_m_image ) }}" alt="{{ $info[0]->ha_name }}" width="80px">
                                            <input type="hidden" name="old_main_image" value="{{ $info[0]->ha_m_image }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="about">Images :<sup style="color: red">*</sup></label>
                                            <input type="file" name="images[]" multiple/>
                                        </div>
                                        <div class="form-group">
                                            @foreach($images as $image)
                                                <img src="{{ URL::to('img/hall_photo/', $image->ha_image ) }}" alt="{{ $info[0]->ha_name }}" width="80px" style="margin-right: 5px">
                                                <input type="hidden" name="old_images[]" value="{{ $image->ha_image }}">
                                            @endforeach
                                        </div>
                                        <input type="hidden" value="{{ $info[0]->id }}" name="ha_id"/>
                                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
                                    </form>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection