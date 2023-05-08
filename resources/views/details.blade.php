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
    <title></title>
</head>
<body>
<!-- ---------------------------------------------- -->
<div class="quick-view-product">
    <div class="images-product">
        <div class="display-image">
            <img src="{{asset('Image/img-2-4.jpg')}}" alt="main_image" />
        </div>
        <div class="some-image">
            <img
                src=""
                alt=""
                class="img_Exchange"
            />
            <img
                src="{{asset('Image/img-2-3.jpg')}}"
                alt=""
                class="img_Exchange"
            />
            <img
                src="{{asset('Image/img-2-2.jpg')}}"
                alt=""
                class="img_Exchange"
            />
        </div>
    </div>
    <div class="details-product">
        <p>${place.name}</p>
        <p>
            ${place.description} <br> <br>
            <span>تفاصيل الخدمه</span> <br>
            التكلفه : ${place.price} <br>
            الموقع : ${place.place} <br>
            خدمه ضيافه : ${place.hospitality} <br>
            مخصصه للرجال والسيدات : ${place.men_And_Women} <br>
            السعه الكليه : ${place.capacity} <br>
        </p>
        <button id="checkBtn">حجز</button>
    </div>
</div>
<!-- ---------------------------------------------- -->

<div class="checkOut"></div>
<script src="{{asset('Js/createMainPage.js')}}"></script>
<script src="{{asset('Js/viewAvailablePlaces.js')}}"></script>
    <script>
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        toastr.error("{{$error}}");
        @endforeach
        @endif

        @if(session()->get("success"))

        toastr.success("{{session('success')}}");
        @endif
        @if(session('error'))
        toastr.error("{{session('error')}}");
    @endif
</script>
</body>
</html>
