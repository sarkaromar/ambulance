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
        <div class="row">
            <div class="col-md-12">
                <!-- box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ $title }}</h3>
                        <div class="box-tools pull-right">
                            <a class="btn btn-success"  data-toggle="modal" href="#add"  title="Add User"><i class="fa fa-plus-square"></i> Add user</a>
                        </div>
                    </div>
                    <div class="box-body">
                        <table id="data_table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $list)
                                <tr>
                                    <td>{{ $list->name }}</td>
                                    <td>{{ $list->email }}</td>
                                    <td>{{ $list->phone }}</td>
                                    <td>{{ $list->status }}</td>
                                    <td>
                                        <a class="btn btn-primary" data-toggle="modal" href="#edit_<?=$list->id?>" title="Edit"><i class='fa fa-pencil-square-o'></i></a>
                                        <a class="btn btn-danger" href="{{ url('/admin/destroy-user/' . $list->id)  }}" title="Delete" onclick="return check();"><i class='fa fa-trash-o'></i></a>
                                    </td>
                                </tr>

                                <!-- update modal -->
                                <!-- update after phone verify -->
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
                        <h4 class="modal-title"> Add</h4>
                    </div>
                    <form action="{{ url('/admin/store-user') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <!-- name -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label> full name<sup style="color: red">*</sup></label>
                                        <input type="text" class="form-control" name="name" placeholder="full name"  required>
                                    </div>
                                </div>
                            </div>
                            <!-- email -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label> email<sup style="color: red">*</sup></label>
                                        <input type="email" class="form-control" name="email" placeholder="example@gmail.com"  required>
                                    </div>
                                </div>
                            </div>
                            <!-- password -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label> Password<sup style="color: red">*</sup></label>
                                        <input type="text" class="form-control" name="password" required>
                                    </div>
                                </div>
                            </div>
                            <!-- phone -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label> Phone<sup style="color: red">*</sup></label>
                                        <input type="number" class="form-control" name="phone" placeholder="e.g. 01914088503">
                                    </div>
                                </div>
                            </div>
                            <!-- status -->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label> Status</label>
                                        <select class="form-control" name="status">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success btn-icon pull-left"><i class="fa fa-fw  fa-save fa-lg"></i> Save</button>
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