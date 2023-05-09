<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('Css/main.css')}}">
    <link rel="stylesheet" href="{{asset('Css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('Css/quickView.css')}}">
    <link rel="stylesheet" href="style.css">
    <title>التفاصيل</title>
</head>
<body>
@include('inc.nav')
<div class="quick-view-product">
    <div class="images-product">
        <div class="display-image">
            <img src="{{asset('photos/products/' . $product->image1)}}" alt="main_image" />
        </div>
        <div class="some-image">
            <img
                src="{{asset('photos/products/' . $product->image2)}}"
                alt=""
                class="img_Exchange"
            />
            <img
                src="{{asset('photos/products/' . $product->image3)}}"
                alt=""
                class="img_Exchange"
            />
            <img
                src="{{asset('photos/products/' . $product->image4)}}"
                alt=""
                class="img_Exchange"
            />
        </div>
    </div>
    <div class="details-product">
        <p>{{$product->name}}</p>
        <p>
            {{$product->des}} <br> <br>
            <span>تفاصيل الخدمه</span> <br>
            التكلفه : {{$product->price}} <br>
            الموقع : {{$product->place}} <br>
            خدمه ضيافه : {{$product->deyafa}} <br>
            مخصصه للرجال والسيدات : {{$product->menWwoman}} <br>
            السعه الكليه : {{$product->capacity}} <br>
        </p>
        <a href="{{route('booking-product' , $product->id)}}">حجز</a>
    </div>
</div>

<script src="{{assert('/Js/createMainPage.js')}}"></script>
<script src="{{asset('Page/details/js.js')}}"></script>

</body>
</html>
