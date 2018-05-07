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
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">{{ $title }}</h3>
                    </div>
                    <form class="form-horizontal" action="{{ url('/admin/do-add-service/') }}" method="POST">
                    {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Title:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="service_title" placeholder="service title here" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Slug:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="service_slug" placeholder="service slug here" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Short Description:</label>
                                <div class="col-sm-10">
                                    <textarea name="service_short_desc" class="form-control" rows="3" placeholder="service short dech here" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Dynamic Content:</label>
                                <div class="col-sm-10">
                                    <textarea name="content" class="form-control my-editor"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-fw fa-check-square-o"></i> Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection