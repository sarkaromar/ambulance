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
        <!-- slider form row -->
        <div class="row">
            <div class="col-md-12">
                <!-- box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ $title }}</h3>
                        <!-- top btn -->
                        <div class="pull-right">
                            <a class="btn btn-success" data-toggle="modal" href="#add" title="add">Add</a>
                        </div>
                    </div><!-- /.box-header -->
                   @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (Session::has('error'))
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fa fa-check"></i><strong>Sorry!</strong> {{Session::get('error')}}</p></h5>
                    </div>
                    @endif
                    @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fa fa-check"></i><strong>Success!</strong> {{Session::get('success')}}</p></h5>
                    </div>
                    @endif
                    <!-- list row -->
                    <div class="row">
                        <div class="col-md-12">
                            @if(isset($lists[0]))
                            <!-- box content -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <th><strong>Email</strong></th>
                                            <th><strong>Action</strong></th>
                                        </tr>
                                        @foreach ($lists as $list)
                                        <tr>
                                            <td>{{ $list->subscriber_email }} </td>
                                            <td>
                                                <a href="{{url('admin/delete-subscriber', $list->subscriber_id)}}" class="text-danger" onclick="return check();" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o fa-lg"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                            <div class="alert alert-warning" role="alert">
                                <strong>Sorry!</strong> There is no list!
                            </div>  
                            @endif
                        </div>
                    </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection