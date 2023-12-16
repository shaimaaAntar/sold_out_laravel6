<div>
{{--@extends('layouts.app')--}}
{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"--}}
{{--                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"--}}
{{--                                       required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
</div>
@extends('layouts.index');

@section('mainContent')
<section class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="text-center">
                <img src="{{asset('front/images/Black logo - no background-r.png')}}" class="img-fluid logo" alt="">
                <h5 class="mt-2">إنشاء حساب جديد </h5>
                <div class="d-flex justify-content-center">
                    <a href="register" class="mr-4 text-dark h3">عضو</a>
                    <a href="register" class="ml-4 text-dark h3">تاجر </a>
                </div>
                <h6 class="mt-4">مرحبا بك فى موقع SOLD OUT</h6>
            </div>

            <form method="POST"  class="w-50 m-auto pt-4 pb-4" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label for="name">الاسم بالكامل</label>

                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                           name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">البريد الالكترونى</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

             {{--     phone number--}}
                <div>
{{--                <div class="form-group">--}}

{{--                    <label for="name">رقم الجوال</label>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-3 telphone">--}}
{{--                            <div class="dropdown">--}}
{{--                                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                    <img src="{{asset('front/images/saudi-arabia.png')}}" alt=""> +966--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">--}}
{{--                                    <a class="dropdown-item" href="#"><img src="{{asset('front/images/saudi-arabia.png')}}" alt=""> +966</a>--}}
{{--                                    <a class="dropdown-item" href="#"> <img src="{{asset('front/images/saudi-arabia.png')}}" alt=""> +966</a>--}}
{{--                                    <a class="dropdown-item" href="#"><img src="{{asset('front/images/saudi-arabia.png')}}" alt=""> +966</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-9">--}}
{{--                            <input type="text" class="form-control" placeholder="555556666">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                </div>
                <div class="form-group">
                    <label> كلمة المرور</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group">
                    <label>تأكيد كلمة المرور</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                           required autocomplete="new-password">
                </div>

                <button type="submit" class="btn btn-black text-white btn-block">إنشاء</button>
                <div class="text-center">
                    <span>بالفعل لديك حساب ؟  </span><a href="login" class="text-red">تسجيل الدخول </a>
                </div>

            </form>
        </div>
    </div>
</section>
@endsection

