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
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (Session::has('success'))
                    <div class="alert alert-success">
                        <strong>Thanks!</strong> {{Session::get('success')}}
                    </div>
                    @endif
                    <form method="POST" action="{{ url('/admin/rants-update/')  }}">
                    {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea name="content" class="form-control my-editor">{!! old('content', $content) !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <button class="btn btn-warning" onclick="window.history.back();"><i class="fa fa-fw fa-arrow-left"></i> Back</button>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-fw fa-check-square-o"></i> Update</button>
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