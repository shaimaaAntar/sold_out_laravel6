@extends('layouts.index')
@section('content')
    <section class="bg-black text-center">
        <h4 class="text-white pt-5 pb-5">السلة  </h4>
    </section>

    <section class="container">
        <div class="row mt-5">
            <div class="col-md-9">
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th scope="col">المنتج</th>
                            <th scope="col">الوصف</th>
                            <th scope="col">الحالة</th>
                            <th scope="col">السعر</th>
                            <th scope="col">الكمية</th>
                            <th scope="col">الاجمالى</th>
                            <th scope="col">حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">
                                <img src="images/bag.png" class="img-thumbnail" width="50" height="50" alt="">
                            </th>
                            <td>حقيبة يد ديور</td>
                            <td>مستخدم كالجديد</td>
                            <td>500</td>
                            <td>
                                <select class="custom-select">
                                    <option selected>1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                </select>
                            </td>
                            <td>500</td>
                            <td>
                                <a href="#">
                                    <img src="images/delete.png" alt="">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <img src="images/bag.png" class="img-thumbnail" width="50" height="50" alt="">
                            </th>
                            <td>حقيبة يد ديور</td>
                            <td>مستخدم كالجديد</td>
                            <td>500</td>
                            <td>
                                <select class="custom-select">
                                    <option selected>1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                </select>
                            </td>
                            <td>500</td>
                            <td>
                                <a href="#">
                                    <img src="images/delete.png" alt="">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <img src="images/bag.png" class="img-thumbnail" width="50" height="50" alt="">
                            </th>
                            <td>حقيبة يد ديور</td>
                            <td>مستخدم كالجديد</td>
                            <td>500</td>
                            <td>
                                <select class="custom-select">
                                    <option selected>1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                </select>
                            </td>
                            <td>500</td>
                            <td>
                                <a href="#">
                                    <img src="images/delete.png" alt="">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <img src="images/bag.png" class="img-thumbnail" width="50" height="50" alt="">
                            </th>
                            <td>حقيبة يد ديور</td>
                            <td>مستخدم كالجديد</td>
                            <td>500</td>
                            <td>
                                <select class="custom-select">
                                    <option selected>1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                </select>
                            </td>
                            <td>500</td>
                            <td>
                                <a href="#">
                                    <img src="images/delete.png" alt="">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <img src="images/bag.png" class="img-thumbnail" width="50" height="50" alt="">
                            </th>
                            <td>حقيبة يد ديور</td>
                            <td>مستخدم كالجديد</td>
                            <td>500</td>
                            <td>
                                <select class="custom-select">
                                    <option selected>1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                </select>
                            </td>
                            <td>500</td>
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
            <div class="col-md-3">
                <table class="table table-borderless  bg-lwhite text-center">
                    <tr>
                        <td>الاجمالى</td>
                        <td class="text-muted">500 ريال </td>
                    </tr>
                    <tr>
                        <td>الضريبة</td>
                        <td class="text-muted">20 ريال </td>
                    </tr>
                    <tr>
                        <td>المجموع</td>
                        <td class="text-muted">520 ريال </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="#" class="btn btn-black btn-block text-white"> الدفع </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-12 m-4 text-center">
                <p class="h2">قطع مماثلة</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card">
                    <img src="images/shose.png" class="img-fluid" alt="">
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
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card">
                    <img src="images/sunglass.png" class="img-fluid" alt="">
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
            <div class="col-lg-3 col-md-6 mb-3">
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
            <div class="col-lg-3 col-md-6 mb-3">
                <div class="card">
                    <img src="images/necklacee.png" class="img-fluid" alt="">
                    <div class="card-body">
                        <h5>اسم المنتج</h5>
                        <span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>
                        <span class="text-red">500 ريال </span> <br>
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
    </section>
@endsection
