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
                        <h5><i class="icon fa fa-check"></i><strong>Opps!</strong> {{Session::get('error')}}</p></h5>
                    </div>
                    @endif
                    @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fa fa-check"></i><strong>Opps!</strong> {{Session::get('success')}}</p></h5>
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
                                            <th><strong>Image</strong></th>
                                            <th><strong>Action</strong></th>
                                        </tr>
                                        @foreach ($lists as $list)
                                        <tr>
                                            <td><img src="{{ URL::to('photo/service_slider', $list->service_slider_image) }}" width="100px"></td>
                                            <td>
                                                <a href="#edit_{{$list->service_slider_id}}" class="text-primary" data-toggle="modal" title="Edit"><i class="fa fa-pencil-square-o fa-lg"></i></a> |
                                                <a href="{{url('admin/delete-service-slider', $list->service_slider_id)}}" class="text-danger" onclick="return check();" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o fa-lg"></i></a>
                                            </td>
                                        </tr>
                                        <!--edit-->
                                        <div id="edit_{{$list->service_slider_id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form method="POST" action="{{ url('admin/update-service-slider', $list->service_slider_id) }}" enctype="multipart/form-data">
                                                        {{ csrf_field() }}
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h5 class="modal-title">Edit {{ $title}}</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label class="control-label">Image:<sup style="color: red">*</sup></label>
                                                                <input class="form-control" type="file" name="image"/>
                                                                <input type="hidden" name="old_image" value="{{ $list->service_slider_image }}" required/>
                                                                <img src="{{ URL::to('photo/service_slider', $list->service_slider_image) }}" width="150px">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Close</button>
                                                            <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- /add blog --> 
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
    <!-- add modal -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"> Add</h4>
                </div>
                <form method="POST" action="{{ url('admin/add-service-slider', $serviceid) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label >Image:<sup style="color: red">*</sup></label>
                                    <input class="form-control" type="file" name="image" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-icon pull-left"><i class="fa fa-fw  fa-save fa-lg"></i> Add</button>
                    </div>
                </form>
            </div> 
        </div>
    </div>   
</div>
<!-- /.content-wrapper -->
@endsection