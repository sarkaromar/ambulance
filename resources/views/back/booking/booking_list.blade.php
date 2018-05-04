@extends('back.layouts.admin_template')

@section('admin-content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>{{ $title }}</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Admin Panel</a></li>
            <li class="active">{{ $title }}</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- /page btn -->
        <div class="row">
            <div class="col-md-12">
                <!-- box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ $title }}</h3>
                        <!-- top btn -->
                        <div class="pull-right">
                            <a class="btn btn-success" data-toggle="modal" href="#add" title="add">Add Booking</a>
                            <a href="#" onclick="location.reload()" class="btn btn-default"><i class="fa fa-refresh"></i></a>
                        </div>
                    </div>
                    <div class="box-body">
                        <table id="data_table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Applicant Name</th>
                                    <th>Amb. Type</th>
                                    <th>Mobile</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bookinglists as $list)
                                <tr>
                                    <td>{{ $list->booking_applicant_name }}</td>
                                    <td>{{ $list->abmulance_type_name }}</td>
                                    <td>{{ $list->booking_mobile }}</td>
                                    <td>
                                        @if($list->booking_status == 1) 
                                            <a href="{{ url('admin/booking-status/'. $list->booking_id .'/'. 0) }}" class = 'btn btn-success' onclick='check()'>Active</a>
                                        @else
                                            <a href="{{ url('admin/booking-status/'. $list->booking_id .'/'. 1) }}" class = 'btn btn-warning'  onclick='check()'>Inactive</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" data-toggle="modal" href="#edit_<?=$list->booking_id?>" title="Edit"><i class='fa fa-pencil-square-o'></i></a>
                                        <a href="{{ url('admin/booking-delete/'. $list->booking_id) }}" class="btn btn-danger" onclick='check()' title="Delete"><i class='fa fa-trash-o'></i></a>
                                    </td>
                                </tr>
                                <!-- update modal -->
                                <div class="modal fade" id="edit_{{ $list->booking_id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title"> update Booking</h4>
                                            </div>
                                            <form method="POST" action="{{ url('/admin/update-booking/' . $list->booking_id)  }}" method="POST">
                                            {{ csrf_field() }}
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label> Applicant Name<sup style="color: red">*</sup></label>
                                                                <input type="text" class="form-control" name="name" value="{{ $list->booking_applicant_name }}" placeholder="Applicant Name" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label> Ambulance Type<sup style="color: red">*</sup></label>
                                                                <select class="form-control" name="amb_type" required>
                                                                    <option value="">Choose Ambulance</option>
                                                                    @if($ambtypes[0])
                                                                    @foreach($ambtypes as $amb_type)
                                                                    <option value="{{ $amb_type->abmulance_type_id }}" <?php if($list->booking_ambulance_type_id == $amb_type->abmulance_type_id ){ echo "selected";} ?> >{{ $amb_type->abmulance_type_name }}</option>
                                                                    @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group">
                                                                    <div class="col-md-7">
                                                                        <label> Form<sup style="color: red">*</sup></label>
                                                                        <input type="text" class="form-control" name="form" value="{{ $list->booking_form }}" placeholder="Form" required>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <label> To<sup style="color: red">*</sup></label>
                                                                        <input type="text" class="form-control" name="to" value="{{ $list->booking_to }}" placeholder="To" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group">
                                                                    <div class="col-md-7">
                                                                        <label> Date<sup style="color: red">*</sup></label>
                                                                        <input type="text" id="jquery_datepicker_{{ $list->booking_id }}" class="form-control" name="date" value="{{ $list->booking_date }}" placeholder="Form" required>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <label> Time<sup style="color: red">*</sup></label>
                                                                        <input type="text" class="form-control" name="time" value="{{ $list->booking_time }}" placeholder="To" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group">
                                                                    <div class="col-md-7">
                                                                        <label> Mobile<sup style="color: red">*</sup></label>
                                                                        <input type="text" class="form-control" name="mobile" value="{{ $list->booking_mobile }}" placeholder="Mobile" required>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <label> Email</label>
                                                                        <input type="text" class="form-control" name="email" value="{{ $list->booking_email }}" placeholder="Email">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label> Full Address<sup style="color: red">*</sup></label>
                                                                <textarea class="form-control" name="address" rows="2" placeholder="Full address" required>{{ $list->booking_address }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary btn-icon pull-left"><i class="fa fa-fw  fa-save fa-lg"></i> Update Booking</button>
                                                </div>
                                            </form>
                                        </div> 
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- add modal -->
        <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title"> Add Booking</h4>
                    </div>
                    <form method="POST" action="{{ url('/admin/add-booking') }}" method="POST">
                    {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label> Applicant Name<sup style="color: red">*</sup></label>
                                        <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label> Ambulance Type<sup style="color: red">*</sup></label>
                                        <select class="form-control" name="amb_type" required>
                                            <option value="">Choose Ambulance</option>
                                            @if($ambtypes[0])
                                            @foreach($ambtypes as $amb_type)
                                            <option value="{{ $amb_type->abmulance_type_id }}">{{ $amb_type->abmulance_type_name }}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-7">
                                                <label> Form<sup style="color: red">*</sup></label>
                                                <input type="text" class="form-control" name="form" placeholder="Form" required>
                                            </div>
                                            <div class="col-md-5">
                                                <label> To<sup style="color: red">*</sup></label>
                                                <input type="text" class="form-control" name="to" placeholder="To" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-7">
                                                <label> Date<sup style="color: red">*</sup></label>
                                                <input type="text" id="jquery_datepicker" class="form-control" name="date" placeholder="Form" required>
                                            </div>
                                            <div class="col-md-5">
                                                <label> Time<sup style="color: red">*</sup></label>
                                                <input type="text" class="time-selector form-control" name="time" placeholder="To" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-7">
                                                <label> Mobile<sup style="color: red">*</sup></label>
                                                <input type="text" class="form-control" name="mobile" placeholder="Mobile" required>
                                            </div>
                                            <div class="col-md-5">
                                                <label> Email</label>
                                                <input type="text" class="form-control" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label> Full Address<sup style="color: red">*</sup></label>
                                        <textarea class="form-control" name="address" rows="2" placeholder="Full address" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success btn-icon pull-left"><i class="fa fa-fw  fa-save fa-lg"></i> Add Booking</button>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection