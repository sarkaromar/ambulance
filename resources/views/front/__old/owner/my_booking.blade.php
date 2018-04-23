@extends('front.layouts.template')

@section('content')
<!-- main body section -->
<section class="main-body">
    <div class="venue-panel">
        <div class="container-fluid">
            <div class="row">
                <!-- sidebar -->
                <div class="col-lg-2">
                    <div class="user-sec">
                        <div class="avater">
                            <a href="">
                                <img src="{{ URL::to('images/4_1.png') }}" alt="">
                            </a>
                            <div class="venue-user">
                                <h3>{{ Auth::user()->ow_name }}</h3>
                                <h4>ID: {{ Auth::user()->ow_id }}</h4>
                            </div>
                            <div class="user-menu">
                                <ul>
                                    <li><a href="{{url('my-venue')}}">My Venue</a></li>
                                    <li><a href="{{url('my-hall-list')}}">My Hall List</a></li>
                                    <li><a href="{{url('my-profile')}}">My Profile</a></li>
                                </ul>
                            </div>
                            <div class="offers">
                                <h3>Notice Section</h3> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content -->
                <div class="col-lg-10">
                    <div class="user-body-sec">
                        <div class="row">
                            <div class="col-lg-6">
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
                                <!-- button -->
                                <div style="margin-bottom: 20px">
                                    <div class="pull-left">
                                        <div class="pull-left">
                                            <a href="{{url('/my-hall-list')}}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back</a>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <button class="btn btn-success btn-sm" data-toggle="modal" href="#create" title="Add New Event">Create event</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <p>
                                    <strong>
                                        <?php if($info->ha_timing == '1'){echo 'Full day based'; }elseif($info->ha_timing == '2'){echo 'Shift based'; } ?>
                                    </strong>
                                    <strong style="background-color: #ff5252; color: #fff">Full day</strong>
                                    <strong style="background-color: #eddd4a;">Morning Session</strong>
                                    <strong style="background-color: #42ffdd;">Evening session</strong>
                                </p>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Event Name</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Shift</th>
                                            <th>Booked By</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($lists as $list)
                                        <tr>
                                            <td>{{ $list->event_name }}</td>
                                            <td><?php 
                                                    $d = strtotime($list->start_date);
                                                    $nd = date('d - M - Y', $d);
                                                    echo $nd;
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                    if($list->end_date){
                                                       $d = strtotime($list->end_date);
                                                        $nd = date('d - M - Y', $d);
                                                        echo $nd; 
                                                    }else{
                                                        echo 'not define';
                                                    }
                                                ?>
                                            </td>
                                            @if($info->ha_timing == '2')
                                            <td><?php if($list->shift == 1){echo "Morning Session"; }elseif($list->shift == 2){ echo "Evening Session"; }?></td>
                                            @endif
                                            <td>{{ $list->booked_by }}</td>
                                            <td>
                                                <a href="#edit_{{ $list->id }}" class="text-primary" data-toggle="modal" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                                <a href="{{url('admin/delete-booking', $list->id)}}" class="text-danger" onclick="return check();" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <!--edit modal-->
                                        <div id="edit_{{ $list->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <form method="POST" action="{{ route('update-booking') }}" method="POST">
                                                        {{ csrf_field() }}
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h5 class="modal-title">Update Event</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label class="control-label mb-10">Event Name: <sup style="color:red">*</sup></label>
                                                                <input type="text" class="form-control" id="ename" value="{{ $list->event_name }}" name="event_name" placeholder="event name" required>
                                                            </div>
                                                            <?php $sd = explode('T', $list->start_date); ?>
                                                            <div class="form-group">
                                                                <label class="control-label mb-10">Event Date:<sup style="color:red">*</sup></label>
                                                                <input id="datepicker_{{ $list->id }}" class="form-control" type="text" placeholder="select date" name="event_date" value="<?=$sd[0]?>" required />
                                                                <input type="hidden" name="o_sd" value="<?=$sd[0]?>">
                                                            </div>
                                                            @if($info->ha_timing == '2')
                                                            <div class="form-group">
                                                                <label for="timeshift" class="control-label mb-10">Shift:<sup style="color:red">*</sup></label>
                                                                <select class="form-control" name="shift" required>
                                                                    <option value="1" <?php if($list->shift == '1'){ echo 'selected'; } ?> >Morning Session - Lunch</option>
                                                                    <option value="2" <?php if($list->shift == '2'){ echo 'selected'; } ?>>Evening Session - Dinner</option>
                                                                </select>
                                                                <input type="hidden" name="o_shift" value="<?=$list->shift?>">
                                                            </div>
                                                            @else
                                                            <input type="hidden" name="shift" value="0"/>
                                                            @endif
                                                            <div class="form-group">
                                                                <label class="control-label mb-10">Booked by:</label>
                                                                <input type="text" class="form-control" value="{{ $list->booked_by }}" name="booked_by" placeholder="Booked by" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label mb-10">Note:</label>
                                                                <textarea class="form-control" id="note" name="note" rows="5">{{ $list->note }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="id" value="{{ $list->id }}" />
                                                            <input type="hidden" name="ha_id" value="{{ $ha_id}}" />
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Close</button>
                                                            <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach                                
                                    </tbody>
                                </table>
                            </div> 
                            <!-- /col-lg-5 -->
                            <div class="col-lg-6">
                                <div id='calendar'></div>
                            </div> 
                        </div>
                        <!-- /row -->
                    </div>
                </div>
            </div>
            <!--add modal-->
            <div id="create" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('do-booking') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h5 class="modal-title">Create New Event</h5>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label mb-10">Event Name: <sup style="color:red">*</sup></label>
                                    <input type="text" class="form-control" id="ename" name="event_name" placeholder="event name" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10">Event Date:<sup style="color:red">*</sup></label>
                                    <input id="datepicker" class="form-control" type="text" placeholder="select date" name="event_date" required />
                                </div>
                                @if($info->ha_timing == '2')
                                <div class="form-group">
                                    <label for="timeshift" class="control-label mb-10">Shift:<sup style="color:red">*</sup></label>
                                    <select class="form-control" name="shift" required>
                                        <option value="1">Morning Session - Lunch</option>
                                        <option value="2">Evening Session - Dinner</option>
                                    </select>
                                </div>
                                @else
                                <input type="hidden" name="shift" value="0"/>
                                @endif
                                <div class="form-group">
                                    <label class="control-label mb-10">Booked by:<sup style="color:red">*</sup></label>
                                    <input type="text" class="form-control" name="booked_by" placeholder="Booked by" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-10">Note:</label>
                                    <textarea class="form-control" id="note" name="note" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="ha_id" value="{{ $ha_id}}" />
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Close</button>
                                <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection