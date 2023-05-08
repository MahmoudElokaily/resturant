<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../Css/cheacOut.css">
    <link rel="stylesheet" href="../../Css/main.css">
    <title>تاكيد الحجز</title>
</head>
<body>
<div class="checkOut">
    <p>تاكيد حجز</p>
    <p>{{$product->name}}</p>
    <form action="{{route('store-order')}}" method="post">
        @csrf
        <input type="text" name="place" value="{{$product->name}}" hidden/>
        <label for="name">الاسم</label>
        <input type="text" id="name" name="name" placeholder="اسمك" required />
        <label for="number">رقم التواصل</label>
        <input type="number" name="number" id="number" placeholder="رقمك" required />
        <label for="date">تاريخ الحجز</label>
        <input type="date" name="date" id="date" />
        <label for="check">طريقه الدفع</label>
        <select name="pay" id="check">
            <option value="cash">كاش</option>
            <option value="visa">فيزا</option>
            <option value="vf">فودافون كاش</option>
        </select>
        <label for="">البوفيه في حاله حجز مكان</label>
        <select name="bof">
            <option value="بوفيه مفتوح">بوفيه مفتوح</option>
            <option value="وجبات">وجبات</option>
        </select>
        <p>
            التكلفة شاملة الضافة : {{$product->price + ($product->price  * .14)}}
        </p>
        <p>يتم التواصل في وقت اقصاه 24 ساعه</p>
        <button type="submit">تاكيد</button>
    </form>
</div>
</body>
</html>
