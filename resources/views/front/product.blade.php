@extends('layouts.index')
@section('content')

    <section class="banner wow fadeInRight" data-wow-duration="3s" data-wow-delay=".3s">
        <img src="images/banner-product.png" class="img-fluid" alt="">
        <div class="text-center">
            <h3>نساء</h3>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-lg-6 product wow fadeInRight" data-wow-duration="3s" data-wow-delay=".3s">
                <div class="container">
                    <div class="row pt-4">
                        <div class="col-12 text-center">
                            <div id="lotus" class="picture" style="display:none">
                                <img class="img-fluid img-thumbnail" src="images/bag.png" alt="Lotus">
                            </div>
                            <div id="boat" class="picture" style="display:none">
                                <img class="img-fluid img-thumbnail" src="images/bag.png" alt="Boat">
                            </div>
                            <div id="leaves" class="picture" style="display:none">
                                <img class="img-fluid img-thumbnail" src="images/bag.png" alt="Leaves">
                            </div>
                            <div id="rocks" class="picture" style="display:none">
                                <img class="img-fluid img-thumbnail" src="images/bag.png" alt="Rocks">
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3 pb-4 no-gutters justify-content-around">
                        <div class="col-2">
                            <a href="javascript:void(0)" class="myhover" onclick="openImg('lotus');">
                                <img class="img-fluid img-thumbnail" src="images/bag.png" alt="Lotus">
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="javascript:void(0)" class="myhover" onclick="openImg('boat');">
                                <img class="img-fluid img-thumbnail" src="images/bag.png" alt="Boat">
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="javascript:void(0)" class="myhover" onclick="openImg('leaves');">
                                <img class="img-fluid img-thumbnail" src="images/bag.png" alt="Leaves">
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="javascript:void(0)" class="myhover" onclick="openImg('rocks');">
                                <img class="img-fluid img-thumbnail" src="images/bag.png" alt="Rocks">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".3s">
                <div class="row pt-4">
                    <div class="col-6">
                        <h5>اسم المنتج</h5>
                        <span class="text-red">500 ريال </span> &nbsp;&nbsp; <span class="text-muted through">700 ريال</span><br>
                        <a href="#">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star text-muted"></span>
                        </a>
                    </div>
                    <div class="col-6">
                        <p>مشاركة عبر :
                            <a href="#" class="text-decoration-none text-muted mr-2">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="text-decoration-none text-muted mr-2">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-decoration-none text-muted mr-2">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#" class="text-decoration-none text-muted mr-2">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </p>
                    </div>
                </div><hr>
                <h6 class="text-muted">اللون : ابيض وبيج</h6>
                <h6 class="text-muted"> الحالة : مستخدم كالجديد</h6>
                <h6 class="text-muted"> خامة القطعة : قماش </h6>
                <h6 class="text-muted">طول السير : طويل</h6>
                <h6 class="text-muted">سلة الشراء : 1 / 2020</h6>
                <h6 class="text-muted">الملحقات : كيس </h6>
                <h6 class="text-muted"> الفئة : نساء </h6>
                <h6 class="text-muted">الماركة : ديور </h6>
                <div class="row mt-2">
                    <div class="col-sm-6 mt-2">
                        <button class="btn btn-black text-white btn-block p-3"> <i class="fas fa-shopping-basket"></i> اضف الى السلة </button>
                    </div>
                    <div class="col-sm-6 mt-2">
                        <a href="Home.html" class="btn btn-outline-dark btn-block p-3">
                            الرجوع الى الرئيسية
                        </a>

                    </div>
                </div>
            </div>
    </section>

    <section class="container wow fadeInUp" data-wow-duration="3s" data-wow-delay=".3s">
        <ul class="nav nav-tabs nav-justified mt-5" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">التفاصيل</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">الوصف</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">مراجعات</a>
            </li>
        </ul>
        <hr>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p class="p-3">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                    إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</p>
                <p class="p-3">
                    ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.
                    هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h6 class="text-muted">اللون : ابيض وبيج</h6>
                <h6 class="text-muted"> الحالة : مستخدم كالجديد</h6>
                <h6 class="text-muted"> خامة القطعة : قماش </h6>
                <h6 class="text-muted">طول السير : طويل</h6>
                <h6 class="text-muted">سلة الشراء : 1 / 2020</h6>
                <h6 class="text-muted">الملحقات : كيس </h6>
                <h6 class="text-muted"> الفئة : نساء </h6>
                <h6 class="text-muted">الماركة : ديور </h6>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <!-- <div class="media pt-4">
                    <img src="images/photo.png" class="mr-3" width="50" height="50" alt="...">
                    <div class="media-body">
                      <h6 class="mt-0">سارة على  <span class="text-muted">24 / 5 / 2020</span></h6>
                      <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                    </div>
                </div>
                <div class="media pt-4">
                    <img src="images/photo.png" class="mr-3" width="50" height="50" alt="...">
                    <div class="media-body">
                      <h6 class="mt-0">سارة على  <span class="text-muted">24 / 5 / 2020</span></h6>
                      <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                    </div>
                </div>
                <div class="media pt-4">
                    <img src="images/photo.png" class="mr-3" width="50" height="50" alt="...">
                    <div class="media-body">
                      <h6 class="mt-0">سارة على  <span class="text-muted">24 / 5 / 2020</span></h6>
                      <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                      <div class="buttonInside ">
                        <input class="form-control" placeholder="هنا يكتب نص السؤال">
                         <button id="send" class="btn btn-dark">إراسال</button>
                       </div>
                    </div>
                </div> -->
                <div class="d-flex justify-content-around p-5 rate">
                    <form>
                        <h2>تقييم هذا المنتج</h2>
                        <fieldset>
                      <span class="star-cb-group">
                        <input type="radio" id="rating-5" name="rating" value="5" /><label for="rating-5">5</label>
                        <input type="radio" id="rating-4" name="rating" value="4" checked="checked" /><label for="rating-4">4</label>
                        <input type="radio" id="rating-3" name="rating" value="3" /><label for="rating-3">3</label>
                        <input type="radio" id="rating-2" name="rating" value="2" /><label for="rating-2">2</label>
                        <input type="radio" id="rating-1" name="rating" value="1" /><label for="rating-1">1</label>
                        <input type="radio" id="rating-0" name="rating" value="0" class="star-cb-clear" /><label for="rating-0">0</label>
                      </span>
                        </fieldset>
                    </form>
                    <div>
                        <h4>تقييم اشخاص اخرى</h4>
                        <a href="#">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            (15)
                        </a><br>
                        <a href="#">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star text-muted"></span>
                            (12)
                        </a><br>
                        <a href="#">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star text-muted"></span>
                            <span class="fa fa-star text-muted"></span>
                            (7)
                        </a><br>
                        <a href="#">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star text-muted"></span>
                            <span class="fa fa-star text-muted"></span>
                            <span class="fa fa-star text-muted"></span>
                            (3)
                        </a><br>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-12 m-4 text-center wow fadeInDown" data-wow-duration="3s" data-wow-delay=".3s">
                <p class="h2">قطع مميزة</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-3 wow fadeInRight" data-wow-duration="3s" data-wow-delay=".3s">
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
            <div class="col-lg-3 col-md-6 mb-3 wow fadeInRight" data-wow-duration="5s" data-wow-delay=".5s">
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
            <div class="col-lg-3 col-md-6 mb-3 wow fadeInRight" data-wow-duration="7s" data-wow-delay=".7s">
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
            <div class="col-lg-3 col-md-6 mb-3 wow fadeInRight" data-wow-duration="9s" data-wow-delay=".9s">
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
