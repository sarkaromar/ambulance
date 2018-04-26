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
                            <script>
                                var table = ['bookings'];
                                var field = 'booking_id';
                            </script>
                            <a href="#" class="btn btn-danger" onclick="return deleteall(table, field);"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </div>
                    <div class="box-body">
                        <!-- show ajax error -->
                        <div class="alert-danger" id="error"></div>
                        <table id="data_table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th data-hide="phone"><input type="checkbox" name="selectall" id="selectall"/></th>
                                    <th>Amb. Type</th>
                                    <th>Form</th>
                                    <th>To</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Update by</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lists as $list)
                                <tr id="row_<?=$list->lost_id?>">
                                    <td><input class="checkbox1" type="checkbox" name="selected[]" id="del_<?=$list->booking_id?>" value="<?=$list->booking_id?>-img/category/<?php //echo $category->image;  ?>" /></td>
                                    <td>{{ $list->abmulance_type_name }}</td>
                                    <td>{{ $list->booking_form }}</td>
                                    <td>{{ $list->booking_to }}</td>
                                    <td>{{ $list->booking_date }}</td>
                                    <td>{{ $list->booking_time }}</td>
                                    <td>{{ $list->booking_mobile }}</td>
                                    <td>{{ $list->booking_address }}</td>
                                    <td>
                                        <?php if ($list->booking_status == 1) {
                                            echo "<span id='status_" . $list->booking_id . "'><a href='#' class = 'btn btn-success' onclick='common_status_change(bookings,booking_id,". $list->booking_id .",booking_status,0);'>Active</a></span>";
                                        } else {
                                            echo "<span id='status_" . $list->booking_id . "'><a href='#' class = 'btn btn-warning'  onclick='common_status_change(bookings,booking_id,". $list->booking_id .",booking_status,1);'>Inactive</a></span>";
                                        } ?>
                                    </td>
                                    <td>{{ $list->booking_updated_by }}</td>
                                    <td>
                                        <a class="btn btn-info" data-toggle="modal" href="#veiw_<?=$list->booking_id?>" title="View"><i class='fa fa-search'></i></a>
                                        <a class="btn btn-primary" data-toggle="modal" href="#edit_<?=$list->booking_id?>" title="Edit"><i class='fa fa-pencil-square-o'></i></a>
                                        <script>
                                            var table = ["lost_posts"];
                                            var field = "id";
                                        </script>
                                        <a class="btn btn-danger" href="#" onclick="return dodelete(table,field,<?=$list->booking_id?>);" title="Delete"><i class='fa fa-trash-o'></i></a>
                                    </td>
                                </tr>
                                <!-- view modal -->
                                
                                


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
                    <form method="POST" action="{{ url('/admin/update-area/' . $list->lost_id)  }}" method="POST">
                    {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
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
                                                <input type="text" class="form-control" name="date" placeholder="Form" required>
                                            </div>
                                            <div class="col-md-5">
                                                <label> Time<sup style="color: red">*</sup></label>
                                                <input type="text" class="form-control" name="time" placeholder="To" required>
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