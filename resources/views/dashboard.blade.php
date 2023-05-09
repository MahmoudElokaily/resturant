<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('Css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('Page/dashboard/style.css')}}" />
    <title>Document</title>
</head>
<body>
<p>Dashboard</p>
<table cellspacing="0">
    <caption>
        الحجوزات
    </caption>
    <thead>
    <tr>
        <th>الاسم</th>
        <th>الرقم</th>
        <th>حجز ل </th>
        <th>البوفيه</th>
        <th>الدفع</th>
        <th>التاريخ</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($orders as $order)
        <tr>
            <td>{{$order->name}}</td>
            <td>0{{$order->number}}</td>
            <td>{{$order->place}}</td>
            <td>{{$order->bof}}</td>
            <td>{{$order->pay}}</td>
            <td>{{$order->date}}</td>
            <td>
                <a href="{{route('delete-order' , $order->id)}}" style="background-color: #187bcd;">حذف</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<hr />
<table cellspacing="0">
    <caption>
        الاماكن
    </caption>
    <thead>
    <tr>
        <th>الاسم</th>
        <th>السعر</th>
        <th>المكان</th>
        <th>الوصف</th>
        <th>ضيافه</th>
        <th>رجال وسيدات</th>
        <th>السعه</th>
{{--        <th>صوره 1</th>--}}
{{--        <th>صوره 2</th>--}}
{{--        <th>صوره 3</th>--}}
{{--        <th>صوره 4</th>--}}
        <th>صفه المكان</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->place}}</td>
            <td>
                <p>
                    {{$product->des}}
                </p>

            </td>
            <td>
                {{$product->deyafa}}
            </td>
            <td>{{$product->menWwoman}}</td>
            <td>{{$product->capacity}}</td>
    {{--        <td>--}}
    {{--            <input type="file" name="" id="">--}}
    {{--        </td>--}}
    {{--        <td>--}}
    {{--            <input type="file" name="" id="">--}}
    {{--        </td><td>--}}
    {{--            <input type="file" name="" id="">--}}
    {{--        </td><td>--}}
    {{--            <input type="file" name="" id="">--}}
    {{--        </td>--}}
            <td>{{$product->category->name}}</td>
            <td class="btn">
                <a href="{{route('delete-product' , $product->id)}}">حذف</a>
                <a class="editBtn" href="{{route('edit-product' , $product->id)}}">تعديل</a>
            </td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
    <form method="post" enctype="multipart/form-data" action="{{route('store-product')}}">
        @csrf
        <tr>
            <td>
                <input type="text" name="name" placeholder="ادخل البيانات" required/>
            </td>
            <td>
                <input type="number" name="price" placeholder="ادخل السعر" required/>
            </td>
            <td>
                <input type="text" name="place" placeholder="ادخل البيانات" required/>
            </td>
            <td>
                <input type="text" name="des" placeholder="ادخل البيانات" required/>
            </td>
            <td>
                <select name="deyafa" id="">
                    <option value="yes">نعم</option>
                    <option value="no">لا</option>
                </select>
            </td>
            <td>
                <select name="men" id="">
                    <option value="yes">نعم</option>
                    <option value="no">لا</option>
                </select>
            </td>
            <td>
                <input type="number" name="capacity" placeholder="ادخل البيانات" required/>
            </td>
            <td>
                <input type="file" name="image1" required/>
            </td>
            <td>
                <input type="file" name="image2" required/>
            </td>
            <td>
                <input type="file" name="image3" required/>
            </td>
            <td>
                <input type="file" name="image4" required/>
            </td>
            <td>
                <select name="category">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </td>
            <td>
                <button>اضافه</button>
            </td>
        </tr>
    </form>
    </tfoot>
</table>

<hr />
<table cellspacing="0">
    <caption>
        الخدمات
    </caption>
    <thead>
    <tr>
        <th>الاسم</th>
        <th>السعر</th>
{{--        <th>صوره 1</th>--}}
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($services as $service)
        <tr>
            <td>{{$service->name}}</td>
            <td>{{$service->price}}</td>
            <td class="btn">
                <a href="{{route('delete-service' , $service->id)}}">حذف</a>
                <a href="{{route('edit-service' , $service->id)}}" class="editBtn">تعديل</a>
            </td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
    <form method="post" action="{{route('store-service')}}" enctype="multipart/form-data">
        @csrf
        <tr>
            <td>
                <input type="text" name="name" placeholder="ادخل البيانات" required/>
            </td>
            <td>
                <input type="number" name="price" placeholder="ادخل السعر" required/>
            </td>
            <td>
                <input type="file" name="image" required/>
            </td>
            <td>
                <button>اضافه</button>
            </td>
        </tr>
    </form>
    </tfoot>
</table>
<table cellspacing="0">
    <caption>
        الفئات
    </caption>
    <thead>
    <tr>
        <th>الاسم</th>
    </tr>
    </thead>
    <tfoot>
    <form method="post" action="{{route('store-category')}}" enctype="multipart/form-data">
        @csrf
        <tr>
            <td>
                <input type="text" name="name" placeholder="ادخل البيانات" required/>
            </td>
            <td>
                <button>اضافه</button>
            </td>
        </tr>
    </form>
    </tfoot>
</table>

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
