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
                                    <i class="fa fa-list"></i>  Product List </a>
                            </div>
                        </div>
                        <div class="panel-body">

  <form class="col-sm-6" method="POST" enctype="multipart/form-data"  action="{{route('products.store')}}">
      @csrf

        <div class="form-group">
            <label>Product Name <span class="text-pink"> اسم المنتج </span> </label>
            <input name="product_name" type="text" class="form-control" placeholder="product name" required>
        </div>

      <div class="form-group">
          <label>Description  الوصف</label>
          <textarea name="desc" class="form-control" rows="3" required></textarea>
      </div>

      <div class="form-group">
          <label>السعر  Price</label>
          <input type="text" name="price" class="form-control" placeholder="price" required>
      </div>

      <div class="form-group">
          <label>Category الفئة</label>
          <select name="cat_id" class="form-control">
          @foreach($cat as $cat)

              <option value="{{$cat->id}}"> {{$cat->name}}</option>

          @endforeach
          </select>
      </div>

     <div class="form-group">
        <label>Add photo أضف صورة للمنتج </label>
        <input type="file" name="img">
{{--        <input type="hidden" name="old_picture">--}}
    </div>

      <button type="submit" class="btn btn-success">save</button>


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


