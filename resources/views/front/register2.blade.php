<!DOCTYPE html>

<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sold out</title>
    <link rel="stylesheet" href="{{asset('/front/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('/front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/front/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('/front/css/app.css')}}">
</head>

<body>

<header>
    <div class="container-fluid bg-black">
        <div class="container">
            <div class="row top-header">
                <div class="col-sm-6 col-12 text-white">
                    <h6><img src="images/saudi-arabia.png" alt=""> التوصيل لجميع انحاء الممكلة العربية السعودية <span>| </span>
                        <select class="mt-1 bg-black text-white">
                            <option>English</option>
                            <option>Arabic</option>
                        </select>
                    </h6>

                </div>
                <div class="col-sm-6 col-12 text-white right">
                    <a href="#" class="text-white mr-2">
                        +966 (014) 30 55555 <img src="images/phone.png" alt="">
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
            <a class="navbar-brand wow fadeInRight" data-wow-duration="2s" data-wow-delay=".2s" href="Home.html">
                <img src="images/Blacklogo-nobackground.png" alt="" class="img-fluid" width="130">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item active wow fadeInDown" data-wow-duration="2s" data-wow-delay=".2s">
                      <a class="nav-link" href="product.html">نساء <span class="sr-only">(current)</span></a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            نساء<i class="fas fa-sort-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">ملابس</a>
                            <a class="dropdown-item" href="#">احذية</a>
                            <a class="dropdown-item" href="#">نظارات</a>
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
                    <!-- <li class="nav-item wow fadeInDown" data-wow-duration="3s" data-wow-delay=".4s">
                      <a class="nav-link" href="#">رجال</a>
                    </li> -->
                    <!-- <li class="nav-item wow fadeInDown" data-wow-duration="4s" data-wow-delay=".6s">
                      <a class="nav-link" href="#">أطفال</a>
                    </li> -->
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
                    <!-- <li class="nav-item wow fadeInDown" data-wow-duration="5s" data-wow-delay=".8s">
                      <a class="nav-link" href="#">فيتنج</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            فيتنج<i class="fas fa-sort-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">ملابس</a>
                            <a class="dropdown-item" href="#">احذية</a>
                            <a class="dropdown-item" href="#">نظارات</a>
                        </div>
                    </li>
                    <!-- <li class="nav-item wow fadeInDown" data-wow-duration="6s" data-wow-delay=".10s">
                      <a class="nav-link" href="#">أوتليت</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            اوتليت<i class="fas fa-sort-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">ملابس</a>
                            <a class="dropdown-item" href="#">احذية</a>
                            <a class="dropdown-item" href="#">نظارات</a>
                        </div>
                    </li>
                    <li class="nav-item wow fadeInDown" data-wow-duration="7s" data-wow-delay=".12s">
                        <a class="nav-link" href="#">بيع الان</a>
                    </li>
                    <li class="nav-item wow fadeInDown" data-wow-duration="8s" data-wow-delay=".14s">
                        <a class="nav-link" href="#">الماركات</a>
                    </li>
                    <li class="nav-item wow fadeInDown" data-wow-duration="9s" data-wow-delay=".16s">
                        <a class="nav-link" href="#">اضف طلبك +</a>
                    </li>
                    <li class="nav-item wow fadeInDown" data-wow-duration="9s" data-wow-delay=".16s">
                        <a class="nav-link" href="#">المزيد</a>
                    </li>

                </ul>
                <ul class="d-flex justify-content-around wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s">
                    <li class="mr-1"><a href="#"><img src="images/Search.png" alt=""></a></li>
                    <li class="mr-1"><a href="cart.html"><img src="images/cart.png" alt=""></a></li>
                    <li class="mr-1">
                        <a href="#"class="dropdown-toggle"role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="images/user.png" alt="">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="login.html">تسجيل الدخول</a>
                            <a class="dropdown-item" href="signup.html">انشاء حساب</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</header>

<section class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="text-center">
                <img src="{{asset('front/images/Black logo - no background-r.png')}}" class="img-fluid logo" alt="">
                <h5 class="mt-2">إنشاء حساب جديد </h5>
                <div class="d-flex justify-content-center">
                    <a href="register" class="mr-4 text-dark h3">عضو</a>
                    <a href="register2" class="ml-4 text-dark h3">تاجر </a>
                </div>
                <h6 class="mt-4">مرحبا بك فى موقع SOLD OUT</h6>
            </div>

            <form method="post" action="register2" class="w-50 m-auto pt-4 pb-4">
                <div class="form-group">
                    <label for="name">الاسم بالكامل</label>
                    <input type="text" class="form-control" id="name" placeholder="سارة على احمد ">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">البريد الالكترونى</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="sara.ali@gmail.com">
                </div>
                <div class="form-group">
                    <label>السجل التجارى</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label> الهوية</label>
                    <input type="text" class="form-control">
                </div>
                <label for="name">رقم الجوال</label>
                <div class="row">
                    <div class="col-3 telphone">
                        <div class="dropdown">
                            <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="images/saudi-arabia.png" alt=""> +966
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#"><img src="images/saudi-arabia.png" alt=""> +966</a>
                                <a class="dropdown-item" href="#"> <img src="images/saudi-arabia.png" alt=""> +966</a>
                                <a class="dropdown-item" href="#"><img src="images/saudi-arabia.png" alt=""> +966</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" placeholder="555556666">
                    </div>
                </div>
                <div class="form-group">
                    <label>كلمة المرور</label>
                    <div class="buttonInside">
                        <input placeholder="كلمة المرور" class="form-control password" type="password">
                        <button id="showPassword" class="password"><i class="fa fa-eye" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="form-group">
                    <label>تأكيد كلمة المرور</label>
                    <div class="buttonInside">
                        <input placeholder="تأكيد كلمة المرور" class="form-control password" type="password">
                        <button id="showPassword" class="password"><i class="fa fa-eye" aria-hidden="true"></i></button>
                    </div>
                </div>

                <button type="submit" class="btn btn-black text-white btn-block">إنشاء</button>
                <div class="text-center">
                    <span>بالفعل لديك حساب ؟  </span><a href="login.html" class="text-red">تسجيل الدخول </a>
                </div>

            </form>
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


<script src="{{asset('/front/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('/front/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/front/js/wow.min.js')}}"></script>
<script src="{{asset('/front/js/main.js')}}"></script>

</body>
</html>
