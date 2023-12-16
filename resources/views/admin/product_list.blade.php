@extends('layouts.admin')
@section('content')

    <div>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="header-icon">
                    <i class="fa fa-users"></i>
                </div>
                <div class="header-title">
                    <h1>Product</h1>
                    <small>Product List</small>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-bd lobidrag">
                            <div class="panel-heading">
                                <div class="btn-group" id="buttonexport">
                                    <a href="#">
                                        <h4>Add Product</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="btn-group">
                                    <div class="buttonexport" id="buttonlist">
                                        <a class="btn btn-add" href="{{route('products.create')}}"> <i
                                                class="fa fa-plus"></i> New
                                        </a>

                                    </div>
                                    <br>
                                </div>
                                <div class="table-responsive">
                                <div class="table-responsive">
                                    <table id="dataTableExample1"
                                           class="table table-bordered table-striped table-hover">
                                        <thead>
                                        <tr class="info">
                                            <th>Photo</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>description</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($data as $data)

                                            <tr>
                                                <td><img src="{{asset('images/products/'.$data->img)}}"
                                                         class="img-circle" alt="User Image" width="50" height="50">
                                                </td>
                                                <td>{{$data->product_name}}</td>
                                                <td>
                                                    {{$data->price}}
                                                </td>
                                                <td>
                                                    {{$data->desc}}
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-add btn-sm" data-toggle="modal"
                                                            data-target="#{{ $data->id }}"><i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#deleteUser{{ $data->id }}"><i
                                                            class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>



                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- customer Modal1 -->
{{--                @foreach($data2 as $data2)--}}
{{--                    <div>--}}
{{--                        <div class="modal fade" id="{{$data2->id }}" tabindex="-1" role="dialog" aria-hidden="true">--}}
{{--                            <div class="modal-dialog">--}}
{{--                                <div class="modal-content">--}}
{{--                                    <div class="modal-header modal-header-primary">--}}
{{--                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×--}}
{{--                                        </button>--}}
{{--                                        <h3><i class="fa fa-user m-r-5"></i> Update User</h3>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-body">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-12">--}}
{{--                                                <form class="col-sm-6">--}}
{{--                                                <form class="col-sm-6"--}}
{{--                                                      action="{{route('users.update', $data2->id)}}">--}}
{{--                                                    @csrf--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        <label>Name</label>--}}
{{--                                                        <input name="name" type="text" class="form-control"--}}
{{--                                                               placeholder="Enter Name" required="">--}}
{{--                                                    </div>--}}

{{--                                                    <div class="form-group">--}}
{{--                                                        <label>Email</label>--}}
{{--                                                        <input name="email" type="email" class="form-control"--}}
{{--                                                               placeholder="Enter Email" required="">--}}
{{--                                                    </div>--}}

{{--                                                    <div class="form-group">--}}
{{--                                                        <label>Mobile</label>--}}
{{--                                                        <input type="text" class="form-control"--}}
{{--                                                               placeholder="Enter Mobile" required="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        <label>Picture upload</label>--}}
{{--                                                        <input type="file" name="picture">--}}
{{--                                                        <input type="hidden" name="old_picture">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        <label>password</label>--}}
{{--                                                        <input name="password" type="password" class="form-control"--}}
{{--                                                               placeholder="Enter password" required="">--}}
{{--                                                    </div>--}}

{{--                                                    <div class="form-group">--}}
{{--                                                        <label>Date of Birth</label>--}}
{{--                                                        <input id="minMaxExample" type="date"--}}
{{--                                                               class="form-control hasDatepicker"--}}
{{--                                                               placeholder="Enter Date...">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        <label>Address</label>--}}
{{--                                                        <textarea class="form-control" rows="3" required=""></textarea>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        <label>Customer type</label>--}}
{{--                                                        <select class="form-control">--}}
{{--                                                            <option value="1">Admin</option>--}}
{{--                                                            <option value="2">vendor</option>--}}
{{--                                                            <option value="3">user</option>--}}
{{--                                                        </select>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="form-group">--}}
{{--                                                        <label>Sex</label><br>--}}
{{--                                                        <label class="radio-inline"><input name="sex" value="1"--}}
{{--                                                                                           checked="checked"--}}
{{--                                                                                           type="radio">Male</label>--}}
{{--                                                        <label class="radio-inline"><input name="sex" value="0"--}}
{{--                                                                                           type="radio">Female</label>--}}
{{--                                                    </div>--}}
{{--                                                    <a href="{{route('users.update',$data2->id)}}}"  class="btn btn-success">save</a>--}}
{{--                                                    <button type="submit" class="btn btn-success">save</button>--}}

{{--                                                </form>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-footer">--}}
{{--                                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">--}}
{{--                                            Close--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /.modal-content -->--}}
{{--                            </div>--}}
{{--                            <!-- /.modal-dialog -->--}}
{{--                        </div>--}}
{{--                        <!-- /.modal -->--}}
{{--                        <!-- Modal -->--}}
{{--                        <!-- Customer Modal2 -->--}}
{{--                        <div class="modal fade" id="deleteUser{{$data2->id }}" tabindex="-1" role="dialog"--}}
{{--                             aria-hidden="true">--}}
{{--                            <div class="modal-dialog">--}}
{{--                                <div class="modal-content">--}}
{{--                                    <div class="modal-header modal-header-primary">--}}
{{--                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×--}}
{{--                                        </button>--}}
{{--                                        <h3><i class="fa fa-user m-r-5"></i> Delete Customer</h3>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-body">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-md-12">--}}
{{--                                                <form class="form-horizontal" method="" action="{{route('users.destroy',$data2->id)}}" >--}}
{{--                                                    @csrf--}}
{{--                                                    <fieldset>--}}
{{--                                                        <div class="col-md-12 form-group user-form-group">--}}
{{--                                                            <label class="control-label">Delete Customer</label>--}}
{{--                                                            <div class="pull-right">--}}
{{--                                                                <button type="submit" class="btn btn-danger btn-sm">NO--}}
{{--                                                                <button type="button" class="btn btn-danger btn-sm">NO--}}
{{--                                                                </button>--}}
{{--                                                               <a  href="{{route('users.destroy',$data2->id)}}" class="btn btn-add btn-sm">YES--}}
{{--                                                                </a>--}}


{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </fieldset>--}}
{{--                                                </form>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="modal-footer">--}}
{{--                                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">--}}
{{--                                            Close--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /.modal-content -->--}}
{{--                            </div>--}}
{{--                            <!-- /.modal-dialog -->--}}
{{--                        </div>--}}
{{--                        <!-- /.modal -->--}}
{{--                    </div>--}}
{{--                @endforeach--}}
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
