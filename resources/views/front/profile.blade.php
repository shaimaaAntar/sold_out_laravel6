@extends('layouts.index')
@section('content')

    <section class="bg-black text-center">
        <h4 class="text-white pt-5 pb-5">الملف الشخصى</h4>
    </section>

    <section class="container">
        <div class="row mb-3 mt-3">
            <div class="col-md-3">
                <div class="card text-center pb-3">
                    <div class="justify-content-center pb-2 pt-5">
                        <img src="images/photo.png" class="img-fluid" width="100" height="100" alt="">
                    </div>

                    <h5>سارة على احمد </h5>
                    <p class="title">9660554621+</p>

                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link text-muted active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <div class="d-flex justify-content-start">
                                <img src="images/profile.png" width="20" height="20" alt="">
                                <h6 class="ml-3">البيانات الشخصية</h6>
                            </div>
                        </a>
                        <a class="nav-link text-muted" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <div class="d-flex justify-content-start">
                                <img src="images/shipping.png" width="20" height="20" alt="">
                                <h6 class="ml-3"> طلباتى</h6>
                            </div>
                        </a>
                        <a class="nav-link text-muted" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <div class="d-flex justify-content-start">
                                <img src="images/Icon ionic-ios-heart-empty.png" width="20" height="20" alt="">
                                <h6 class="ml-3">المفضلة</h6>
                            </div>
                        </a>
                        <a class="nav-link text-muted" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <div class="d-flex justify-content-start">
                                <img src="images/Icon feather-map-pin.png" width="20" height="20" alt="">
                                <h6 class="ml-3">العناوين</h6>
                            </div>
                        </a>
                        <a class="nav-link text-muted" id="v-pills-bankaccount-tab" data-toggle="pill" href="#v-pills-bankaccount" role="tab" aria-controls="v-pills-bankaccount" aria-selected="false">
                            <div class="d-flex justify-content-start">
                                <img src="images/buildings.png" width="20" height="20" alt="">
                                <h6 class="ml-3">الحسابات البنكية</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card space">

                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <form class="w-75 m-auto pt-5 pb-5">
                                <div class="form-group">
                                    <label class="h5" for="name">الاسم بالكامل</label>
                                    <input type="text" class="form-control" id="name" placeholder="سارة على احمد ">
                                </div>
                                <div class="form-group">
                                    <label class="h5" for="exampleInputEmail1">البريد الالكترونى</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="sara.ali@gmail.com">
                                </div>
                                <label class="h5" for="name">رقم الجوال</label>
                                <div class="row">
                                    <div class="col-3 telphone">
                                        <div class="dropdown">
                                            <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="images/saudi-arabia.png" alt=""> 966+
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#"><img src="images/saudi-arabia.png" alt="">966+</a>
                                                <a class="dropdown-item" href="#"> <img src="images/saudi-arabia.png" alt="">966+</a>
                                                <a class="dropdown-item" href="#"><img src="images/saudi-arabia.png" alt=""> 966+</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" class="form-control" placeholder="555556666">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="h5">كلمة المرور</label>
                                    <div class="buttonInside">
                                        <input placeholder="كلمة المرور" class="form-control password" type="password">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="button" class="btn btn-black text-white" data-toggle="modal" data-target="#Modal">
                                        تغيير كلمة المرور
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-left">
                                                    <form class="w-75 m-auto pt-5 pb-5">

                                                        <div class="form-group">
                                                            <label class="h5">كلمة المرور الجديدة </label>
                                                            <div class="buttonInside">
                                                                <input placeholder="كلمة المرور" class="form-control password" type="password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="h5">تأكيد كلمة المرور الجديدة </label>
                                                            <div class="buttonInside">
                                                                <input placeholder="كلمة المرور" class="form-control password" type="password">
                                                            </div>
                                                        </div>


                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-black text-white pr-5 pl-5">حفظ</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </form>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="card p-5 space">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                        <tr>
                                            <th scope="col">رقم الطلب</th>
                                            <th scope="col">التاريخ</th>
                                            <th scope="col">اسم المستلم</th>
                                            <th scope="col">حالة الطلب</th>
                                            <th scope="col">الاجمالى</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-muted">
                                        <tr>
                                            <th scope="row">
                                                0123456789#
                                            </th>
                                            <td>21 / 6 / 2020</td>
                                            <td>سارة على احمد</td>
                                            <td>تم الاستلام</td>
                                            <td>500</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                0123456789#
                                            </th>
                                            <td>21 / 6 / 2020</td>
                                            <td>سارة على احمد</td>
                                            <td>فى الطريق</td>
                                            <td>500</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                0123456789#
                                            </th>
                                            <td>21 / 6 / 2020</td>
                                            <td>سارة على احمد</td>
                                            <td>تم الاستلام</td>
                                            <td>500</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                0123456789#
                                            </th>
                                            <td>21 / 6 / 2020</td>
                                            <td>سارة على احمد</td>
                                            <td>فى الطريق</td>
                                            <td>500</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="card p-5 space">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                        <tr>
                                            <th scope="col">المنتج</th>
                                            <th scope="col">الحالة</th>
                                            <th scope="col">السعر</th>
                                            <th scope="col">متوفر</th>
                                            <th scope="col">حذف</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">
                                                <img src="images/bag.png" class="img-thumbnail" width="50" height="50" alt="">
                                                حقيبة يد ديور
                                            </th>
                                            <td>مستخدم كالجديد</td>
                                            <td>500</td>
                                            <td>متاح</td>
                                            <td>
                                                <a href="#">
                                                    <img src="images/delete.png" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <img src="images/bag.png" class="img-thumbnail" width="50" height="50" alt="">
                                                حقيبة يد ديور
                                            </th>
                                            <td>مستخدم كالجديد</td>
                                            <td>500</td>
                                            <td>نفذ</td>
                                            <td>
                                                <a href="#">
                                                    <img src="images/delete.png" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <img src="images/bag.png" class="img-thumbnail" width="50" height="50" alt="">
                                                حقيبة يد ديور
                                            </th>
                                            <td>مستخدم كالجديد</td>
                                            <td>500</td>
                                            <td>متاح</td>
                                            <td>
                                                <a href="#">
                                                    <img src="images/delete.png" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <img src="images/bag.png" class="img-thumbnail" width="50" height="50" alt="">
                                                حقيبة يد ديور
                                            </th>
                                            <td>مستخدم كالجديد</td>
                                            <td>500</td>
                                            <td>نفذ</td>
                                            <td>
                                                <a href="#">
                                                    <img src="images/delete.png" alt="">
                                                </a>
                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="card p-5 space">
                                <div class="card p-3">
                                    <div class="d-flex justify-content-between">
                                        <h4>عنوان 1</h4>
                                        <a href="adress1.html" class="text-dark">تعديل</a>
                                    </div>
                                    <h6 class="text-muted pt-2">سارة على</h6>
                                    <h6 class="text-muted">السعودية - الرياض - حى الزهور</h6>
                                    <h6 class="text-muted">96655467892+</h6>
                                </div>
                                <div class="card p-3 mt-3">
                                    <div class="d-flex justify-content-between">
                                        <h4>عنوان 1</h4>
                                        <a href="adress1.html" class="text-dark">تعديل</a>
                                    </div>
                                    <h6 class="text-muted pt-2">سارة على</h6>
                                    <h6 class="text-muted">السعودية - الرياض - حى الزهور</h6>
                                    <h6 class="text-muted">96655467892+</h6>
                                </div>
                                <div class="card p-3 mt-3">
                                    <div class="d-flex justify-content-between">
                                        <h4>عنوان 1</h4>
                                        <a href="adress1.html" class="text-dark">تعديل</a>
                                    </div>
                                    <h6 class="text-muted pt-2">سارة على</h6>
                                    <h6 class="text-muted">السعودية - الرياض - حى الزهور</h6>
                                    <h6 class="text-muted">96655467892+</h6>
                                </div>
                                <div class="text-right mt-3">
                                    <button type="button" class="btn btn-black text-white pr-5 pl-5" data-toggle="modal" data-target="#exampleModal2">
                                        إضافة عنوان جديد
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade bd-example-modal-lg" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-left">
                                                    <form class="w-100 m-auto">
                                                        <div class="form-group">
                                                            <label class="h5" for="name">الاسم </label>
                                                            <input type="text" class="form-control" id="name" placeholder="سارة على احمد ">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="h5" for="exampleInputEmail1">البريد الالكترونى</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="sara.ali@gmail.com">
                                                        </div>
                                                        <label class="h5" for="name">رقم الجوال</label>
                                                        <div class="row">
                                                            <div class="col-3 telphone">
                                                                <div class="dropdown">
                                                                    <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        <img src="images/saudi-arabia.png" alt=""> 966+
                                                                    </a>

                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                        <a class="dropdown-item" href="#"><img src="images/saudi-arabia.png" alt="">966+</a>
                                                                        <a class="dropdown-item" href="#"> <img src="images/saudi-arabia.png" alt="">966+</a>
                                                                        <a class="dropdown-item" href="#"><img src="images/saudi-arabia.png" alt=""> 966+</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-9">
                                                                <input type="text" class="form-control" placeholder="555556666">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="h5"> المدينة</label>
                                                            <div class="buttonInside">
                                                                <input placeholder="الرياض" class="form-control password" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="h5"> الحى</label>
                                                            <div class="buttonInside">
                                                                <input placeholder="اسم الحى" class="form-control password" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="h5"> الشارع</label>
                                                            <div class="buttonInside">
                                                                <input placeholder="اسم الشارع" class="form-control password" type="text">
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-black text-white pr-5 pl-5">إضافة عنوان جديد</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-bankaccount" role="tabpanel" aria-labelledby="v-pills-bankaccount-tab">
                            <div class="card p-5 space">
                                <div class="card p-3">
                                    <div class="media">
                                        <img src="images/bank.png" class="mr-3 img-fluid" width="200" height="100" alt="...">
                                        <div class="media-body">
                                            <h5 class="mt-3">بنك الراجحى</h5>
                                            <p class="text-muted">رقم الحساب : 1236547893256</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card p-3 mt-3">
                                    <div class="media">
                                        <img src="images/baank.png" class="mr-3 img-fluid" width="200" height="100" alt="...">
                                        <div class="media-body">
                                            <h5 class="mt-3">بنك البلاد</h5>
                                            <p class="text-muted">رقم الحساب : 1236547893256</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right mt-3">
                                    <button type="button" class="btn btn-black text-white pr-5 pl-5" data-toggle="modal" data-target="#exampleModal3">
                                        إضافة حساب جديد
                                    </button>
                                </div>


                                <!-- Modal -->
                                <div class="modal fade bd-example-modal-lg" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                <form class="w-100 m-auto">
                                                    <div class="form-group">
                                                        <label class="h5">اسم صاحب الحساب </label>
                                                        <input type="text" class="form-control" placeholder="سارة على احمد ">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="h5">اسم البنك  </label>
                                                        <input type="text" class="form-control" placeholder="بنك الراجحى ">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="h5"> رقم الحساب</label>
                                                        <div class="buttonInside">
                                                            <input placeholder="1236549871236" class="form-control password" type="number">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="h5"> رقم الابيان</label>
                                                        <div class="buttonInside">
                                                            <input placeholder="1236549871236" class="form-control password" type="number">
                                                        </div>
                                                    </div>


                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-black text-white pr-5 pl-5">إضافة حساب جديد</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
