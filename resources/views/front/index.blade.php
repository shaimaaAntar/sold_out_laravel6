@extends('layouts.index')

@section('content')

    <header>
        <div class="container-fluid bg-black">
            <div class="container">
                <div class="row top-header">
                    <div class="col-sm-6 col-12 text-white">
                        <h6><img src="{{asset('/front/images/saudi-arabia.png')}}" alt=""> التوصيل لجميع انحاء الممكلة العربية السعودية <span>| </span>
                            <select class="mt-1 bg-black text-white">
                                <option>English</option>
                                <option>Arabic</option>
                            </select>
                        </h6>
                    </div>
                    <div class="col-sm-6 col-12 text-white right">
                        <a href="#" class="text-white mr-2">
                            +966 (014) 30 55555 <img src="{{asset('/front/images/phone.png')}}" alt="">
                        </a>
                        <span>|</span>
                        <a href="#" class="text-white ml-2 mail">
                            sold_out@gmail.com <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid shadow">
          <nav class="navbar navbar-expand-lg container">
            <a class="navbar-brand wow fadeInRight" data-wow-duration="2s" data-wow-delay=".2s" href="/">
                <img src="{{asset('front/images/Blacklogo-nobackground.png')}}" alt="" class="img-fluid" width="130">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      نساء<i class="fas fa-sort-down"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    @foreach($cats as $cats)

                            <a class="dropdown-item" href="{{url('/cat/'.$cats->id)}}">{{$cats->name}}</a>

                    @endforeach


                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      رجال<i class="fas fa-sort-down"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">ملابس</a>
                      <a class="dropdown-item" href="#">احذية</a>
                      <a class="dropdown-item" href="#">نظارات</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      أطفال<i class="fas fa-sort-down"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">ملابس</a>
                      <a class="dropdown-item" href="#">احذية</a>
                      <a class="dropdown-item" href="#">نظارات</a>
                    </div>
                </li>


              </ul>
              <ul class="d-flex justify-content-around wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s">
                  <li class="mr-1"><a href="#"><img src="{{asset('front/images/Search.png')}}" alt=""></a></li>
                  <li class="mr-1"><a href="cart"><img src="{{asset('front/images/cart.png')}}" alt=""></a></li>


                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">تسجيل دخول </a>
                          </li>
                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">انشاء حساب </a>
                              </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 <h2>{{ Auth::user()->name }}</h2>
{{--                                  <span class="caret"></span>--}}
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>

              </ul>
            </div>
          </nav>
        </div>

    </header>

    <section>
        <div class="container mt-3 mb-5">
            <div class="row">
                <div class="col-lg-6 mb-3 text-right clothes">
                    <h3 class="pr-4  wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s">أزياء الشباب</h3>
                    <a href="#" class="pr-4 text-dark wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".4s"> تسوق الآن >> </a>
                </div>
                <div class="col-lg-6 mb-3 clothes-w">
                    <h3 class="pr-4 wow fadeInRight" data-wow-duration="2s" data-wow-delay=".2s">أزياء النساء</h3>
                    <a href="#" class="pr-4 text-dark wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".4s"> تسوق الآن >> </a>
                </div>
            </div>
        </div>

    </section>

    <section class="add-recent">
        <div class="container">
            <div class="row">
                <div class="col-12 m-4 text-center">
                    <p class="h2 wow fadeInDown" data-wow-duration="3s" data-wow-delay=".4s">أضيف حديثا</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 wow fadeInRight" data-wow-duration="3s" data-wow-delay=".3s">
                    <div class="card">
                        <img src="{{asset('/front/images/bag.png')}}" class="img-fluid" alt="">
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


            @foreach($products as $product)

                <div class="col-lg-3 col-md-6 mb-3 wow fadeInRight" data-wow-duration="3s" data-wow-delay=".3s">
                <a href="{{url('/products/'.$product->id)}}">
                    <div class="card">
                        <img src="{{asset('/front/images/bag.png')}}" class="img-fluid" alt="">
                        <span class="bg-red text-white sale">خصم 20%</span>
                        <div class="card-body">
                            <h5> {{$product->product_name}} </h5>
                            <span class="text-muted">{{$product->desc}}</span><br>
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
                </a>
                </div>

            @endforeach
                {{--  comments --}}
                <div>

                {{--<div class="col-lg-3 col-md-6 mb-3 wow fadeInRight" data-wow-duration="5s" data-wow-delay=".5s">--}}
                    {{--<div class="card">--}}
                        {{--<img src="images/short.png" class="img-fluid" alt="">--}}
                        {{--<div class="card-body">--}}
                            {{--<h5>اسم المنتج</h5>--}}
                            {{--<span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>--}}
                            {{--<span class="text-red">500 ريال </span><br>--}}
                            {{--<a href="#">--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star text-muted"></span>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 mb-3 wow fadeInRight" data-wow-duration="7s" data-wow-delay=".7s">--}}
                    {{--<div class="card">--}}
                        {{--<img src="images/belt.png" class="img-fluid" alt="">--}}
                        {{--<span class="bg-red text-white sale">خصم 20%</span>--}}
                        {{--<div class="card-body">--}}
                            {{--<h5>اسم المنتج</h5>--}}
                            {{--<span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>--}}
                            {{--<span class="text-red">500 ريال </span> &nbsp;&nbsp; <span class="text-muted through">700 ريال</span><br>--}}
                            {{--<a href="#">--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star text-muted"></span>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 mb-3 wow fadeInRight" data-wow-duration="9s" data-wow-delay=".9s">--}}
                    {{--<div class="card">--}}
                        {{--<img src="images/sunglass.png" class="img-fluid" alt="">--}}
                        {{--<div class="card-body">--}}
                            {{--<h5>اسم المنتج</h5>--}}
                            {{--<span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>--}}
                            {{--<span class="text-red">500 ريال </span> <br>--}}
                            {{--<a href="#">--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star text-muted"></span>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 mb-3 wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".3s">--}}
                    {{--<div class="card">--}}
                        {{--<img src="images/short.png" class="img-fluid" alt="">--}}
                        {{--<div class="card-body">--}}
                            {{--<h5>اسم المنتج</h5>--}}
                            {{--<span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>--}}
                            {{--<span class="text-red">500 ريال </span><br>--}}
                            {{--<a href="#">--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star text-muted"></span>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 mb-3 wow fadeInLeft" data-wow-duration="5s" data-wow-delay=".5s">--}}
                    {{--<div class="card">--}}
                        {{--<img src="images/bag.png" class="img-fluid" alt="">--}}
                        {{--<span class="bg-red text-white sale">خصم 20%</span>--}}
                        {{--<div class="card-body">--}}
                            {{--<h5>اسم المنتج</h5>--}}
                            {{--<span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>--}}
                            {{--<span class="text-red">500 ريال </span> &nbsp;&nbsp; <span class="text-muted through">700 ريال</span><br>--}}
                            {{--<a href="#">--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star text-muted"></span>--}}
                            {{--</a>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 mb-3 wow fadeInLeft" data-wow-duration="7s" data-wow-delay=".7s">--}}
                    {{--<div class="card">--}}
                        {{--<img src="images/belt.png" class="img-fluid" alt="">--}}
                        {{--<span class="bg-red text-white sale">خصم 20%</span>--}}
                        {{--<div class="card-body">--}}
                            {{--<h5>اسم المنتج</h5>--}}
                            {{--<span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>--}}
                            {{--<span class="text-red">500 ريال </span> &nbsp;&nbsp; <span class="text-muted through">700 ريال</span><br>--}}
                            {{--<a href="#">--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star text-muted"></span>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 mb-3 wow fadeInLeft" data-wow-duration="9s" data-wow-delay=".9s">--}}
                    {{--<div class="card">--}}
                        {{--<img src="images/sunglass.png" class="img-fluid" alt="">--}}
                        {{--<div class="card-body">--}}
                            {{--<h5>اسم المنتج</h5>--}}
                            {{--<span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>--}}
                            {{--<span class="text-red">500 ريال </span> <br>--}}
                            {{--<a href="#">--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star text-muted"></span>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 mb-3 wow fadeInRight" data-wow-duration="3s" data-wow-delay=".3s">--}}
                    {{--<div class="card">--}}
                        {{--<img src="images/bag.png" class="img-fluid" alt="">--}}
                        {{--<span class="bg-red text-white sale">خصم 20%</span>--}}
                        {{--<div class="card-body">--}}
                            {{--<h5>اسم المنتج</h5>--}}
                            {{--<span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>--}}
                            {{--<span class="text-red">500 ريال </span> &nbsp;&nbsp; <span class="text-muted through">700 ريال</span><br>--}}
                            {{--<a href="#">--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star text-muted"></span>--}}
                            {{--</a>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 mb-3 wow fadeInRight" data-wow-duration="5s" data-wow-delay=".5s">--}}
                    {{--<div class="card">--}}
                        {{--<img src="images/short.png" class="img-fluid" alt="">--}}
                        {{--<div class="card-body">--}}
                            {{--<h5>اسم المنتج</h5>--}}
                            {{--<span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>--}}
                            {{--<span class="text-red">500 ريال </span><br>--}}
                            {{--<a href="#">--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star text-muted"></span>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 mb-3 wow fadeInRight" data-wow-duration="7s" data-wow-delay=".7s">--}}
                    {{--<div class="card">--}}
                        {{--<img src="images/belt.png" class="img-fluid" alt="">--}}
                        {{--<span class="bg-red text-white sale">خصم 20%</span>--}}
                        {{--<div class="card-body">--}}
                            {{--<h5>اسم المنتج</h5>--}}
                            {{--<span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>--}}
                            {{--<span class="text-red">500 ريال </span> &nbsp;&nbsp; <span class="text-muted through">700 ريال</span><br>--}}
                            {{--<a href="#">--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star text-muted"></span>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 mb-3 wow fadeInRight" data-wow-duration="9s" data-wow-delay=".9s">--}}
                    {{--<div class="card">--}}
                        {{--<img src="images/sunglass.png" class="img-fluid" alt="">--}}
                        {{--<div class="card-body">--}}
                            {{--<h5>اسم المنتج</h5>--}}
                            {{--<span class="text-muted">يكتب حالة المنتج كجديد او غيره</span><br>--}}
                            {{--<span class="text-red">500 ريال </span> <br>--}}
                            {{--<a href="#">--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star checked"></span>--}}
                                {{--<span class="fa fa-star text-muted"></span>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
           {{----}}
            </div>
            </div>
        </div>

    </section>

    <section>
        <div class="mt-3 mb-3 baner">
            <h3 class="text-white wow fadeInRight" data-wow-duration="2s" data-wow-delay=".2s">مجموعة من أكبر المصممين <br>فى الوطن العربى</h3>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-12 m-4 text-center">
                <p class="h2 wow fadeInDown" data-wow-duration="2s" data-wow-delay=".2s">قطع مميزة</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 wow fadeInRight" data-wow-duration="2s" data-wow-delay=".2s">
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
            <div class="col-lg-3 col-md-6 mb-3 wow fadeInRight" data-wow-duration="4s" data-wow-delay=".4s">
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
            <div class="col-lg-3 col-md-6 mb-3 wow fadeInRight" data-wow-duration="6s" data-wow-delay=".6s">
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
            <div class="col-lg-3 col-md-6 mb-3 wow fadeInRight" data-wow-duration="8s" data-wow-delay=".8s">
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
    <section class="bg-lwhite">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3 col-md-6 p-3 wow fadeInRight" data-wow-duration="2s" data-wow-delay=".2s">
                    <a href="#" class="text-decoration-none">
                        <img src="images/product.png" class="img-fluid mb-2" alt=""> <br>
                        <h6 class="text-dark">فحص الجودة</h6>
                    </a>

                </div>
                <div class="col-lg-3 col-md-6 p-3 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <a href="#" class="text-decoration-none">
                        <img src="images/dollar.png" class="img-fluid mb-2" alt=""> <br>
                        <h6 class="text-dark">استرجاع المنتج</h6>
                    </a>

                </div>
                <div class="col-lg-3 col-md-6 p-3 wow fadeInDown" data-wow-duration="2s" data-wow-delay=".2s">
                    <a href="#" class="text-decoration-none">
                        <img src="images/delivery.png" class="img-fluid mb-2" alt=""> <br>
                        <h6 class="text-dark">شحن لكافة مناطق المملكة</h6>
                    </a>

                </div>
                <div class="col-lg-3 col-md-6 p-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s">
                    <a href="#" class="text-decoration-none">
                        <img src="images/support.png" class="img-fluid mb-2" alt=""> <br>
                        <h6 class="text-dark">خدمة العملاء</h6>
                    </a>

                </div>
            </div>
        </div>
    </section>

    <footer class="bg-black text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInRight" data-wow-duration="2s" data-wow-delay=".2s">
                    <img src="images/Whitelogo-nobackground.png" class="img-fluid mt-3 mb-3 logo wow fadeInRight" data-wow-duration="3s" data-wow-delay=".3s" alt="">
                    <p class=" wow fadeInRight" data-wow-duration="4s" data-wow-delay=".4s">هذا النص  هو مثال لنص يمكن ان يستبدل فى نفس المساحة  لقد تم توليد هذا النص من مولد النص العربى حيث يمكنك توليد هذا النض  العديد من الاخرى اضافة الى زيادة عدد الحروف التى يودلها التطبيق </p>
                    <div class="d-flex justify-content-around p-3 social mt-3 wow fadeInRight" data-wow-duration="6s" data-wow-delay=".6s">
                        <a href="#" class="text-decoration-none">
                           <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3  mt-3 mb-3 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <hr class="bg-lwhite">
                    <h6>الاقسام</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link text-white" href="product.html">نساء</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#">رجال</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#">أطفال</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#">فيتنج</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#">أوتليت</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#">بيع اون لاين</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#">  الماركات</a>
                        </li>
                      </ul>
                </div>
                <div class="col-lg-2 col-md-3 mt-3 mb-3 wow fadeInDown" data-wow-duration="2s" data-wow-delay=".2s">
                    <hr class="bg-lwhite">
                    <h6>روابط سريعة</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#">المدونة</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#">كيف نعمل</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#">سياسة الخصوصية</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#">شروط و أحكام</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#">الأسئلة الشائعة</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#">خدمة العملاء</a>
                        </li>
                      </ul>
                </div>
                <div class="col-lg-4 col-md-12 mt-3 mb-3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s">
                    <hr class="bg-lwhite">
                    <h6>اشترك الان</h6>
                    <p>اشترك معنا ليصلك كل جديد</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control-md pr-5" placeholder="البريد الالكترونى">
                        <div class="input-group-append">
                            <a href="#">
                                <img src="images/send.png" class="fluid-img" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <a href="#">
                            <img src="images/appstore.png" class="img-fluid mr-4" width="120" height="50" alt="">
                        </a>
                        <a href="#">
                            <img src="images/googleplay.png" class="img-fluid mr-5" width="120" height="50" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="text-center bg-light-black">
        <p class="text-white mb-0 pt-1 pb-1">جميع الحقوق محفوظة @ 2020</p>
    </div>

    @endsection
