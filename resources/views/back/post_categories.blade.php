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
                    </div>
                    <div class="box-body">
                        <!-- form -->
                        <form class="form-horizontal" action="{{ url('/admin/store-post-category') }}" method="POST">
                        {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('post_category_name') ? ' has-error' : '' }} {{ $errors->has('post_category_slug') ? ' has-error' : '' }}">
                                <div class="col-md-4">
                                    <input class="form-control" type="text" name="post_category_name" value="{{ old('post_category_name') }}" placeholder="Name" required>
                                    @if ($errors->has('post_category_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_category_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="text" name="post_category_slug" value="{{ old('post_category_slug') }}" placeholder="Slug" required>
                                    @if ($errors->has('post_category_slug'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_category_slug') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                                </div>
                            </div>
                        </form>
                        <table id="data_table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Category Name</th>
                                    <th>Slug</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($postcats as $list)
                                <tr>
                                    <td>{{ $list->post_category_name }}</td>
                                    <td>{{ $list->post_category_slug }}</td>
                                    <td>
                                        <a class="btn btn-primary" data-toggle="modal" href="#edit_<?=$list->id?>" title="Edit"><i class='fa fa-pencil-square-o'></i></a>
                                        <a class="btn btn-danger" href="{{ url('/admin/destroy-post-category/' . $list->id)  }}" title="Delete" onclick="return check();"><i class='fa fa-trash-o'></i></a>
                                    </td>
                                </tr>
                                <!-- update modal -->
                                <div class="modal fade" id="edit_<?=$list->id?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title"> Update</h4>
                                            </div>
                                            <form method="POST" action="{{ url('/admin/update-post-category/' . $list->id)  }}" method="POST">
                                            {{ csrf_field() }}
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label> Category Name<sup style="color: red">*</sup></label>
                                                                <input type="text" class="form-control" name="post_category_name" value="<?=$list->post_category_name?>" placeholder="Name" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label> Slug<sup style="color: red">*</sup></label>
                                                                <input type="text" class="form-control" name="post_category_slug" value="<?=$list->post_category_slug?>" placeholder="Slug" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success btn-icon pull-left"><i class="fa fa-fw  fa-save fa-lg"></i> Update</button>
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
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection