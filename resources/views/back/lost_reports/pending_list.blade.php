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
        <!-- page btn -->
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('/admin/active-lost-lists') }}" class="btn btn-app">
                    <span class="badge bg-green">{{ $active }}</span>
                    <i class="fa fa-bullhorn"></i> Active List
                </a>
                <a href="{{ url('/admin/pending-lost-lists') }}" class="btn btn-app">
                    <span class="badge bg-yellow">{{ $pending }}</span>
                    <i class="fa fa-barcode"></i> Pending List
                </a>
                <a href="{{ url('/admin/inactive-lost-lists') }}" class="btn btn-app">
                    <span class="badge bg-red">{{ $inactive }}</span>
                    <i class="fa fa-users"></i> Inactive List
                </a>
            <div>
        </div>
        <!-- /page btn -->
        <div class="row">
            <div class="col-md-12">
                <!-- box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ $title }}</h3>
                        <!-- top btn -->
                        <div class="pull-right">
                            <a href="categories/add" class="btn btn-success">Add Post</a>
                            <a href="#" onclick="location.reload()" class="btn btn-default"><i class="fa fa-refresh"></i></a>
                            <script>
                                var table = ['lost_posts'];
                                var field = 'id';
                                var image = [];
                            </script>
                            <a href="#" class="btn btn-danger" onclick="return deleteall(table, field, image);"><i class="fa fa-trash-o"></i></a>
                        </div>
                    </div>
                    <div class="box-body">
                        <!-- show ajax error -->
                        <div class="alert-danger" id="error"></div>
                        <table id="data_table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th data-hide="phone"><input type="checkbox" name="selectall" id="selectall"/></th>
                                    <th>Item Name</th>
                                    <th>Category</th>
                                    <th>Division</th>
                                    <th>Area</th>
                                    <th>Date</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lists as $list)
                                <tr id="row_<?=$list->lost_id?>">
                                    <td><input class="checkbox1" type="checkbox" name="selected[]" id="del_<?=$list->lost_id?>" value="<?=$list->lost_id?>-img/category/<?php //echo $category->image;  ?>" /></td>
                                    <td>{{ $list->lost_item_name }}</td>
                                    <td>{{ $list->post_category_name }}</td>
                                    <td>{{ $list->divi_name }}</td>
                                    <td>{{ $list->area_name }}</td>
                                    <td>{{ $list->created_at }}</td>
                                    <td><img src="{{ URL::to('assets/images/lost_report/' . $list->lost_item_image) }}" alt="{{ $list->lost_item_name }}" width="100px"></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning">Pending</button>
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#" onclick="return status_change('lost_posts','id',<?=$list->lost_id?>,1,'lost_status');" title="Click to Active">Active</a></li>
                                                <li><a href="#" onclick="return status_change('lost_posts','id',<?=$list->lost_id?>,0,'lost_status');" title="Click to Inactive">Inactive</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-info" data-toggle="modal" href="#edit_<?=$list->lost_id?>" title="View"><i class='fa fa-search'></i></a>
                                        <a class="btn btn-primary" data-toggle="modal" href="#edit_<?=$list->lost_id?>" title="Edit"><i class='fa fa-pencil-square-o'></i></a>
                                        <script>
                                            var table = ["lost_posts"];
                                            var field = "id";
                                            var image = [];
                                        </script>
                                        <a class="btn btn-danger" href="#" onclick="return dodelete(table,field,<?=$list->lost_id?>, image);" title="Delete"><i class='fa fa-trash-o'></i></a>
                                    </td>
                                </tr>
                                <!-- view modal -->
                                <div class="modal fade" id="edit_<?=$list->lost_id?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title"> View</h4>
                                            </div>
                                            <form method="POST" action="{{ url('/admin/update-area/' . $list->lost_id)  }}" method="POST">
                                            {{ csrf_field() }}
                                                <div class="modal-body">
                                                @php
                                                echo "<pre>";
                                                echo "Item Name:" . $list->lost_item_name;
                                                echo "<br>";
                                                echo "category Name:" . $list->post_category_name;
                                                echo "<br>";
                                                echo "Division Name:" . $list->divi_name;
                                                echo "<br>";
                                                echo "Area Name:" . $list->area_name;
                                                echo "<br>";
                                                echo "Lost Date:" . $list->created_at;
                                                echo "<br>";
                                                echo "Status:" . $list->lost_status;
                                                echo "<br>";
                                                @endphp
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success btn-icon pull-left"><i class="fa fa-fw  fa-save fa-lg"></i> Update</button>
                                                </div>
                                            </form>
                                        </div> 
                                    </div>
                                </div>
                                <!-- update modal -->
                                <div class="modal fade" id="edit_<?=$list->lost_id?>" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title"> Update</h4>
                                            </div>
                                            <form method="POST" action="{{ url('/admin/update-area/' . $list->lost_id)  }}" method="POST">
                                            {{ csrf_field() }}
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label> Division Name<sup style="color: red">*</sup></label>
                                                                <select class="form-control" name="area_divi_id" required>
                                                                    <option value="">Please Select</option>
                                                                    
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label> Area Name<sup style="color: red">*</sup></label>
                                                                <input type="text" class="form-control" name="area_name" value="" placeholder="Name" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label> Slug<sup style="color: red">*</sup></label>
                                                                <input type="text" class="form-control" name="area_slug" value="" placeholder="Slug" required>
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