<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('Css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('Css/nav.css')}}" />
    <link rel="stylesheet" href="{{asset('Css/places.css')}}" />
    <link rel="stylesheet" href="{{asset('Css/quickView.css')}}" />
    <title>{{$category->name}}</title>
</head>
<body>
@include('inc.nav')
<div class="container">
    <p>{{$category->name}}</p>
    <!-- هنا هيبقا عدد القاعات المعروضه في الصفحه لو المتخزنه في الباك اند -->
    <p id="numOfResult"></p>
    <!-- -------------------------------------- -->
    <select name="" id="select-place">
        <option value="all" selected>الكل</option>
        <option value="الدقي">الدقي</option>
        <option value="الهرم">الهرم</option>
        <option value="المهندسين">المهندسين</option>
        <option value="السادس من اكتوبر">السادس من اكتوبر</option>
        <option value="فيصل">فيصل</option>
        <option value="عمرانيه">عمرانيه</option>
    </select>
    <div class="all-results">
        @foreach($category->products as $product)
        <div>
            <div class="img">
                <img src="{{asset('photos/products/' . $product->image1)}}" alt="" />
            </div>
            <p id="name">{{$product->name}}</p>
            <p id="price">{{$product->price}} جنيه</p>
            <div class="btn">
                <a href="{{route('booking-product' , $product->id)}}" id="details" >تفاصيل</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- ---------------------------------------------- -->
{{--<div class="quick-view-product">--}}
{{--    <div class="close">--}}
{{--        <img src="../../Image/icons8-close-50.png" alt="close" />--}}
{{--    </div>--}}
{{--    <div class="images-product">--}}
{{--        <div class="display-image">--}}
{{--            <img src="../../Image/img-2-1.jpg" alt="main_image" />--}}
{{--        </div>--}}
{{--        <div class="some-image">--}}
{{--            <img--}}
{{--                src="../../Image/img-2-4.jpg"--}}
{{--                alt=""--}}
{{--                class="img_Exchange"--}}
{{--            />--}}
{{--            <img--}}
{{--                src="../../Image/img-2-3.jpg"--}}
{{--                alt=""--}}
{{--                class="img_Exchange"--}}
{{--            />--}}
{{--            <img--}}
{{--                src="../../Image/img-2-2.jpg"--}}
{{--                alt=""--}}
{{--                class="img_Exchange"--}}
{{--            />--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="details-product">--}}
{{--        <p>${place.name}</p>--}}
{{--        <p>--}}
{{--            ${place.description} <br> <br>--}}
{{--            <span>تفاصيل الخدمه</span> <br>--}}
{{--            التكلفه : ${place.price} <br>--}}
{{--            الموقع : ${place.place} <br>--}}
{{--            خدمه ضيافه : ${place.hospitality} <br>--}}
{{--            مخصصه للرجال والسيدات : ${place.men_And_Women} <br>--}}
{{--            السعه الكليه : ${place.capacity} <br>--}}
{{--        </p>--}}
{{--        <button id="checkBtn">حجز</button>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- ---------------------------------------------- -->
<script src="{{asset('Js/viewAvailablePlaces.js')}}"></script>
</body>
</html>
