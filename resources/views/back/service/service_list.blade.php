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
                            <a href="{{ url('admin/add-service/') }}" class="btn btn-success" title="add">Add Service</a>
                            <a href="#" onclick="location.reload()" class="btn btn-default"><i class="fa fa-refresh"></i></a>
                        </div>
                    </div>
                    <div class="box-body">
                        <table id="data_table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Service Title</th>
                                    <th>Service Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $list)
                                <tr>
                                    <td>{{ $list->service_title }}</td>
                                    <td>{{ $list->service_slug }}</td>
                                    <td>
                                        <a href="{{ url('admin/service-slider-list/'. $list->service_id) }}" class="btn btn-info" title="Slider"><i class='fa fa-image'></i></a>
                                        <a href="{{ url('admin/update-service/'. $list->service_id) }}" class="btn btn-primary" title="Edit"><i class='fa fa-pencil-square-o'></i></a>
                                        <a href="{{ url('admin/delete-service/'. $list->service_id) }}" class="btn btn-danger" onclick='check()' title="Delete"><i class='fa fa-trash-o'></i></a>
                                    </td>
                                </tr>
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