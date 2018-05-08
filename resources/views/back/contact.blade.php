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
                                            <th><strong>Name</strong></th>
                                            <th><strong>From</strong></th>
                                            <th><strong>Action</strong></th>
                                        </tr>
                                        @foreach ($lists as $list)
                                        <tr>
                                            <td>{{ $list->contact_name }}</td>
                                            <td>{{ $list->contact_email }}</td>
                                            <td>
                                                <a href="#details_{{$list->contact_id}}" class="text-primary" data-toggle="modal" title="View Message"><i class="fa fa-eye fa-lg"></i></a> |
                                                <a href="{{url('admin/delete-contact', $list->contact_id)}}" class="text-danger" onclick="return check();" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o fa-lg"></i></a>
                                            </td>
                                        </tr>
                                        <!--edit-->
                                        <div id="details_{{$list->contact_id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <form method="" action="">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h5 class="modal-title">View {{ $title}}</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label class="control-label mb-10">Name:</label>
                                                                <input type="text" class="form-control" value="{{ $list->contact_name }}" placeholder="Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label mb-10">From:</label>
                                                               <input type="text" class="form-control" value="{{ $list->contact_email }}" placeholder="Email">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label mb-10">Subject:</label>
                                                               <input type="text" class="form-control" value="{{ $list->contact_subject }}" placeholder="Subject">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label mb-10">Message:</label>
                                                                <textarea class="form-control" rows="10" placeholder="email body">{{ $list->contact_subject }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Close</button>
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
</div>
<!-- /.content-wrapper -->
@endsection