@extends('layout')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="mycontent">
                <img src="dist/img/back.jpg" alt="" id="first">
                <p id="first">کابل رستورانت</p>
                <p id="first1">{{ session('mssg') }}</p>
                <div class="book">
                    <div class="image">
                    <img src="dist/img/pizzas.jpg" >
                    </div>
                    <a href="/pizzas/create"><input type="button" value="سفارش دادن"></a>
                </div>
                <div class="book">
                    <div class="image">
                    <img src="dist/img/joja.jpg" >
                    </div>
                    <a href="#"><input type="button" value="سفارش دادن"></a>
                </div>
                <div class="book">
                    <div class="image">
                    <img src="dist/img/ric.jpg">
                    </div>
                    <a href="#"><input type="button" value="سفارش دادن"></a>
                </div>
                <div class="book">
                    <div class="image">
                    <img src="dist/img/kab.jpg" >
                    </div>
                    <a href="#"><input type="button" value="سفارش دادن"></a>
                </div>
                <div class="book">
                    <div class="image">
                    <img src="dist/img/kaba.jpg" >
                    </div>
                    <a href="#"><input type="button" value="سفارش دادن"></a>
                </div>
                <div class="book">
                    <div class="image">
                    <img src="dist/img/foods.jpg" >
                    </div>
                    <a href="#"><input type="button" value="سفارش دادن"></a>
                </div>
                <div class="book">
                    <div class="image">
                    <img src="dist/img/pasta.jpg">
                    </div>
                    <a href="#"><input type="button" value="سفارش دادن"></a>
                </div>
                <div class="book">
                    <div class="image">
                    <img src="dist/img/resturant.jpg" >
                    </div>
                    <a href="reserves/create"><input type="button" value="ریزروکردن"></a>
                </div>
                <div class="text">
                    <img src="dist/img/grocery.jpg" alt="" id="myrest">
                    <h1>کابل رستورانت</h1>
                    <p>کابل رستورانت یکی از رستورانت های مشهور در سطح کشور است. و برای سهولت بیشتر مشتریان عزیز سیستم سفارش غذا و ریزرو میز انلاین را در خدمت شما
                        قرار داده است. برای معلومات بیشتر روی لینک های زیر کلیک کنید.
                    </p>
                    <a href="#">بیشتر بخوانید</a>
                </div>
                <div class="text">
                    <img src="dist/img/resturant.jpg" alt="">
                    <h1>کابل رستورانت</h1>
                    <p>کابل رستورانت یکی از رستورانت های مشهور در سطح کشور است. و برای سهولت بیشتر مشتریان عزیز سیستم سفارش غذا و ریزرو میز انلاین را در خدمت شما
                        قرار داده است. برای معلومات بیشتر روی لینک های زیر کلیک کنید.
                    </p>
                </div>
                <div class="text">
                    <img src="dist/img/mymy.jpg" alt="" id="myrest">
                    <h3>در مورد ما</h3>
                    <h1>چرا کابل رستورانت را انتخاب کردید؟</h1>
                    <ul>
                        <li>
                            قیمت مناسب
                        </li>
                        <li>
                            تحویل سریع سفارش
                        </li>
                        <li>
                            غذای عالی
                        </li>
                        <li>
                            مکان مناسب برای سرف غذا
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </section>
    </div
@endsection
