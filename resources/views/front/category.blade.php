@extends('layouts.index')
@section('content')

    <section class="banner wow fadeInRight" data-wow-duration="3s" data-wow-delay=".3s">
        <img src="{{asset('front/images/banner-product.png')}}" class="img-fluid" alt="">
        <div class="text-center">
            <h3>{{$cat->name}}</h3>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-lg-3 mt-5 wow fadeInRight" data-wow-duration="3s" data-wow-delay=".3s">
                <h6 class="mt-1">الفئة</h6><br>
                <hr>
                <table class="table table-borderless">
                    @foreach($allCat as $category)
                    <tr class=" wow fadeInDown" data-wow-duration="5s" data-wow-delay=".5s">
                        <td><a href="{{url('/cat/'.$category->id)}}" class="text-muted">{{$category->name}}</a></td>
                        <td>(35)</td>
                    </tr>
                    @endforeach


{{--                    <tr class=" wow fadeInDown" data-wow-duration="5s" data-wow-delay=".5s">--}}
{{--                        <td><a href="#" class="text-muted">ملابس</a></td>--}}
{{--                        <td><a href="#" class="text-muted">(20)</a></td>--}}
{{--                    </tr>--}}
{{--                    <tr class=" wow fadeInDown" data-wow-duration="5s" data-wow-delay=".5s">--}}
{{--                        <td><a href="#" class="text-muted">مجوهرات</a></td>--}}
{{--                        <td><a href="#" class="text-muted">(2)</a></td>--}}
{{--                    </tr>--}}
{{--                    <tr class=" wow fadeInDown" data-wow-duration="5s" data-wow-delay=".5s">--}}
{{--                        <td><a href="#" class="text-muted">أحذية</a></td>--}}
{{--                        <td><a href="#" class="text-muted">(3)</a></td>--}}
{{--                    </tr>--}}
{{--                    <tr class=" wow fadeInDown" data-wow-duration="5s" data-wow-delay=".5s">--}}
{{--                        <td><a href="#" class="text-muted">محافظ</a></td>--}}
{{--                        <td><a href="#" class="text-muted">(30)</a></td>--}}
{{--                    </tr>--}}
{{--                    <tr class=" wow fadeInDown" data-wow-duration="5s" data-wow-delay=".5s">--}}
{{--                        <td><a href="#" class="text-muted">اكسسوارات</a></td>--}}
{{--                        <td><a href="#" class="text-muted">(20)</a></td>--}}
{{--                    </tr>--}}
{{--                    <tr class=" wow fadeInDown" data-wow-duration="5s" data-wow-delay=".5s">--}}
{{--                        <td><a href="#" class="text-muted">حقائب</a></td>--}}
{{--                        <td><a href="#" class="text-muted">(2)</a></td>--}}
{{--                    </tr>--}}
                </table>
                <h6 class="mt-3">تصفية حساب</h6>
                <hr>
                <table class="table table-borderless">
                    <tr class=" wow fadeInDown" data-wow-duration="5s" data-wow-delay=".5s">
                        <td><a href="#" class="text-muted">شحن فورى</a></td>
                        <td><a href="#" class="text-muted">(35)</a></td>
                    </tr>
                    <tr class=" wow fadeInDown" data-wow-duration="5s" data-wow-delay=".5s">
                        <td><a href="#" class="text-muted">المضاف حديثا</a></td>
                        <td><a href="#" class="text-muted">(20)</a></td>
                    </tr>
                    <tr class=" wow fadeInDown" data-wow-duration="5s" data-wow-delay=".5s">
                        <td><a href="#" class="text-muted">الاعلى مشاهدة</a></td>
                        <td><a href="#" class="text-muted">(200)</a></td>
                    </tr>
                </table>
                <h6 class="mt-3"> الحالة</h6>
                <hr>
                <table class="table table-borderless">
                    <tr class=" wow fadeInDown" data-wow-duration="5s" data-wow-delay=".5s">
                        <td><a href="#" class="text-muted">مستخدم كالجديد</a></td>
                        <td><a href="#" class="text-muted">(35)</a></td>
                    </tr>
                    <tr class=" wow fadeInDown" data-wow-duration="5s" data-wow-delay=".5s">
                        <td><a href="#" class="text-muted">جديد</a></td>
                        <td><a href="#" class="text-muted">(20)</a></td>
                    </tr>
                    <tr class=" wow fadeInDown" data-wow-duration="5s" data-wow-delay=".5s">
                        <td><a href="#" class="text-muted">استخدام مقبول</a></td>
                        <td><a href="#" class="text-muted">(2)</a></td>
                    </tr>
                    <tr class=" wow fadeInDown" data-wow-duration="5s" data-wow-delay=".5s">
                        <td><a href="#" class="text-muted">استخدام جيد جدا</a></td>
                        <td><a href="#" class="text-muted">(3)</a></td>
                    </tr>
                </table>
                <h6 class="mt-3"> الماركات</h6>
                <hr>
                <table class="table table-borderless">
                    <tr class=" wow fadeInDown" data-wow-duration="5s" data-wow-delay=".5s">
                        <td><a href="#" class="text-muted">فرزاتشى</a></td>
                        <td><a href="#" class="text-muted">(35)</a></td>
                    </tr>
                    <tr>
                        <td><a href="#" class="text-muted">شانيل</a></td>
                        <td><a href="#" class="text-muted">(20)</a></td>
                    </tr>
                    <tr class=" wow fadeInDown" data-wow-duration="5s" data-wow-delay=".5s">
                        <td><a href="#" class="text-muted">ديور</a></td>
                        <td><a href="#" class="text-muted">(2)</a></td>
                    </tr>
                    <tr class=" wow fadeInDown" data-wow-duration="5s" data-wow-delay=".5s">
                        <td><a href="#" class="text-muted">برادا</a></td>
                        <td><a href="#" class="text-muted">(3)</a></td>
                    </tr>
                    <tr class=" wow fadeInDown" data-wow-duration="5s" data-wow-delay=".5s">
                        <td><a href="#" class="text-muted">دولتشى اند غاباتا</a></td>
                        <td><a href="#" class="text-muted">(30)</a></td>
                    </tr>
                    <tr class=" wow fadeInDown" data-wow-duration="5s" data-wow-delay=".5s">
                        <td><a href="#" class="text-muted">بيرى برى</a></td>
                        <td><a href="#" class="text-muted">(20)</a></td>
                    </tr>
                    <tr class=" wow fadeInDown" data-wow-duration="5s" data-wow-delay=".5s">
                        <td><a href="#" class="text-muted">جمى شو</a></td>
                        <td><a href="#" class="text-muted">(2)</a></td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-9 wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".3s">
                <div class="row">
                    <div class="col-12 mt-5 wow fadeInLeft" data-wow-duration="5s" data-wow-delay=".5s">
                        <div class="d-flex justify-content-between">
                            <h6>تم العثور على (30) منتج </h6>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>ترتيب حسب : <span class="text-muted">من منحفض الى مرتفع</span></option>
                                    <option>ترتيب حسب : <span class="text-muted">من مرتفع الى منخفض</span></option>
                                </select>
                            </div>
                        </div><hr>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3 mt-3 wow fadeInLeft" data-wow-duration="5s" data-wow-delay=".5s">
                        <div class="card">
                            <img src="images/watch.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h5>اسم المنتج</h5>
                                <span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>
                                <span class="text-red">500 ريال </span> &nbsp;&nbsp; <span class="text-muted through">700 ريال</span><br>
                                <a href="#">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star text-muted"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3 mt-3 wow fadeInLeft" data-wow-duration="5s" data-wow-delay=".5s">
                        <div class="card">
                            <img src="images/dress.png" class="img-fluid" alt="">
                            <span class="bg-red text-white sale">خصم 20%</span>
                            <div class="card-body">
                                <h5>اسم المنتج</h5>
                                <span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>
                                <span class="text-red">500 ريال </span> &nbsp;&nbsp; <span class="text-muted through">700 ريال</span><br>
                                <a href="#">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star text-muted"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3 mt-3 wow fadeInLeft" data-wow-duration="5s" data-wow-delay=".5s">
                        <div class="card">
                            <img src="images/necklacee.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h5>اسم المنتج</h5>
                                <span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>
                                <span class="text-red">500 ريال </span><br>
                                <a href="#">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star text-muted"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3 mt-3 wow fadeInLeft" data-wow-duration="5s" data-wow-delay=".5s">
                        <div class="card">
                            <img src="images/dress.png" class="img-fluid" alt="">
                            <span class="bg-red text-white sale">خصم 20%</span>
                            <div class="card-body">
                                <h5>اسم المنتج</h5>
                                <span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>
                                <span class="text-red">500 ريال </span> &nbsp;&nbsp; <span class="text-muted through">700 ريال</span><br>
                                <a href="#">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star text-muted"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3 mt-3 wow fadeInLeft" data-wow-duration="5s" data-wow-delay=".5s">
                        <div class="card">
                            <img src="images/necklacee.png" class="img-fluid" alt="">
                            <span class="bg-red text-white sale">خصم 20%</span>
                            <div class="card-body">
                                <h5>اسم المنتج</h5>
                                <span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>
                                <span class="text-red">500 ريال </span> &nbsp;&nbsp; <span class="text-muted through">700 ريال</span><br>
                                <a href="#">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star text-muted"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3 mt-3 wow fadeInLeft" data-wow-duration="5s" data-wow-delay=".5s">
                        <div class="card">
                            <img src="images/watch.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h5>اسم المنتج</h5>
                                <span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>
                                <span class="text-red">500 ريال </span><br>
                                <a href="#">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star text-muted"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3 mt-3 wow fadeInLeft" data-wow-duration="5s" data-wow-delay=".5s">
                        <div class="card">
                            <img src="images/watch.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h5>اسم المنتج</h5>
                                <span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>
                                <span class="text-red">500 ريال </span> &nbsp;&nbsp; <span class="text-muted through">700 ريال</span><br>
                                <a href="#">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star text-muted"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3 mt-3 wow fadeInLeft" data-wow-duration="5s" data-wow-delay=".5s">
                        <div class="card">
                            <img src="images/dress.png" class="img-fluid" alt="">
                            <span class="bg-red text-white sale">خصم 20%</span>
                            <div class="card-body">
                                <h5>اسم المنتج</h5>
                                <span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>
                                <span class="text-red">500 ريال </span> &nbsp;&nbsp; <span class="text-muted through">700 ريال</span><br>
                                <a href="#">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star text-muted"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3 mt-3 wow fadeInLeft" data-wow-duration="5s" data-wow-delay=".5s">
                        <div class="card">
                            <img src="images/necklacee.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h5>اسم المنتج</h5>
                                <span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>
                                <span class="text-red">500 ريال </span><br>
                                <a href="#">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star text-muted"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3 mt-3 wow fadeInLeft" data-wow-duration="5s" data-wow-delay=".5s">
                        <div class="card">
                            <img src="images/dress.png" class="img-fluid" alt="">
                            <span class="bg-red text-white sale">خصم 20%</span>
                            <div class="card-body">
                                <h5>اسم المنتج</h5>
                                <span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>
                                <span class="text-red">500 ريال </span> &nbsp;&nbsp; <span class="text-muted through">700 ريال</span><br>
                                <a href="#">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star text-muted"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3 mt-3 wow fadeInLeft" data-wow-duration="5s" data-wow-delay=".5s">
                        <div class="card">
                            <img src="images/necklacee.png" class="img-fluid" alt="">
                            <span class="bg-red text-white sale">خصم 20%</span>
                            <div class="card-body">
                                <h5>اسم المنتج</h5>
                                <span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>
                                <span class="text-red">500 ريال </span> &nbsp;&nbsp; <span class="text-muted through">700 ريال</span><br>
                                <a href="#">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star text-muted"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-3 mt-3 wow fadeInLeft" data-wow-duration="5s" data-wow-delay=".5s">
                        <div class="card">
                            <img src="images/watch.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h5>اسم المنتج</h5>
                                <span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>
                                <span class="text-red">500 ريال </span><br>
                                <a href="#">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star text-muted"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">التالى</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
@endsection
