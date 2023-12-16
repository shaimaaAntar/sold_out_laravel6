@extends('layouts.index')
@section('content')

    <section class="bg-black text-center">
        <h4 class="text-white pt-5 pb-5">إضافة طلب </h4>
    </section>

    <section class="container mb-4 mt-4">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h5 class="mt-2">أكمل النموذج التالى ببيانات القطعة المطلوبة</h5>
                </div>
                <form class="w-50 m-auto pt-4 pb-4">
                    <div class="form-group">
                        <label class="h6">القسم</label>
                        <select class="form-control">
                            <option>نساء</option>
                            <option>رجال</option>
                            <option>أطفال</option>
                            <option>فيتنج</option>
                            <option>أوتليت</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="h6">نوع القطعة  المطلوبة </label>
                        <select class="form-control">
                            <option>حقائب</option>
                            <option>فساتين</option>
                            <option>نظارات</option>
                            <option>حقائب</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="h6">الصور </label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                <label class="custom-file-label" for="inputGroupFile04">أضف صورة بجودة عالية</label>
                            </div>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04"><i class="fas fa-image"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="h6">اسم القطعة</label>
                        <input type="email" class="form-control"placeholder="حقيبة يد">
                    </div>
                    <div class="form-group">
                        <label class="h6">الماركة</label>
                        <select class="form-control">
                            <option>ديور</option>
                            <option>ديور</option>
                            <option>ديور</option>
                            <option>ديور</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="h6">الحالة</label>
                        <select class="form-control">
                            <option>مستخدم كالجديد</option>
                            <option>جديد</option>
                            <option>مستخدم كالجديد</option>
                            <option>جديد</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="h6"> السعر</label>
                        <input type="email" class="form-control"placeholder="500">
                    </div>
                    <button type="submit" class="btn btn-black text-white btn-block">بيع الان</button>
                </form>
            </div>
        </div>
    </section>



@endsection
