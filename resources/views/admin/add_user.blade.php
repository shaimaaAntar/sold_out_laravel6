@extends('layouts.admin');
<!-- Site wrapper -->
@section('content')

    <div class="wrapper">
    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-users"></i>
            </div>
            <div class="header-title">
                <h1>Add Customer</h1>
                <small>Customer list</small>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- Form controls -->
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="btn-group" id="buttonlist">
                                <a class="btn btn-add " href="clist.html">
                                    <i class="fa fa-list"></i>  Customer List </a>
                            </div>
                        </div>
                        <div class="panel-body">


  <form class="col-sm-6" method="POST" enctype="multipart/form-data"  action="{{route('users.store')}}">
      @csrf
        <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" class="form-control" placeholder="Enter Name" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input name="email" type="email" class="form-control" placeholder="Enter Email" required>
        </div>

    <div class="form-group">
        <label>Mobile</label>
        <input type="text" class="form-control" placeholder="Enter Mobile" required>
    </div>

    <div class="form-group">
        <label>Picture upload</label>
        <input type="file" name="img">
{{--        <input type="hidden" name="old_picture">--}}
    </div>
    <div class="form-group">
        <label>password</label>
        <input name="password" type="password" class="form-control" placeholder="Enter password" required>
    </div>
<!--
    <div class="form-group">
        <label>Passport</label>
        <input type="text" class="form-control" placeholder="Enter Passport details" required>
    </div>
-->
<!--
    <div class="form-group">
        <label>Facebook Id</label>
        <input type="text" class="form-control" placeholder="Enter Facebook details" required>
    </div>
-->
    <div class="form-group">
        <label>Date of Birth</label>
        <input id='minMaxExample' type="date" class="form-control" placeholder="Enter Date...">
    </div>
    <div class="form-group">
        <label>Address</label>
        <textarea class="form-control" rows="3" required></textarea>
    </div>
    <div class="form-group">
        <label>Customer type</label>
        <select class="form-control">
            <option>vendor</option>
            <option>Admin</option>
            <option>user</option>
        </select>
    </div>
    <div class="form-group">
        <label>Sex</label><br>
        <label class="radio-inline"><input name="sex" value="1" checked="checked" type="radio">Male</label>
        <label class="radio-inline"><input name="sex" value="0" type="radio">Female</label>
    </div>
      <button type="submit" class="btn btn-success">save</button>
<!--
    <div class="form-check">
        <label>Status</label><br>
        <label class="radio-inline">
            <input type="radio" name="status" value="1" checked="checked">Active</label>
        <label class="radio-inline"><input type="radio" name="status" value="0" >Inctive</label>
    </div>
-->


       </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@endsection


