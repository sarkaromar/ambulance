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
                            <a href="booking/add" class="btn btn-success">Add Booking</a>
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
                                    <td><input class="checkbox1" type="checkbox" name="selected[]" id="del_<?=$list->lost_id?>" value="<?=$list->lost_id?>-img/category/<?php //echo $category->image;  ?>" /></td>
                                    <td>{{ $list->booking_ambulance_type_id }}</td>
                                    <td>{{ $list->booking_form }}</td>
                                    <td>{{ $list->booking_to }}</td>
                                    <td>{{ $list->booking_date }}</td>
                                    <td>{{ $list->booking_time }}</td>
                                    <td>{{ $list->booking_mobile }}</td>
                                    <td>{{ $list->booking_address }}</td>
                                    <td>
                                        {{ $list->booking_status }}
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
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection