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
        <th>الصورة</th>
        {{--        <th>صوره 1</th>--}}
        {{--        <th>صوره 2</th>--}}
        {{--        <th>صوره 3</th>--}}
        {{--        <th>صوره 4</th>--}}
        <th>صفه المكان</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <form method="post" enctype="multipart/form-data" action="{{route('update-product')}}">
        @csrf
            <input type="text" name="id"  value="{{$product->id}}" placeholder="ادخل البيانات" hidden/>
        <tr>
            <td>
                <input type="text" name="name" value="{{$product->name}}" placeholder="ادخل البيانات" required/>
            </td>
            <td>
                <input type="number" name="price" value="{{$product->price}}" placeholder="ادخل السعر" required/>
            </td>
            <td>
                <input type="text" name="place" value="{{$product->place}}" placeholder="ادخل البيانات" required/>
            </td>
            <td>
                <input type="text" name="des" value="{{$product->des}}" placeholder="ادخل البيانات" required/>
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
                <input type="number" name="capacity" value="{{$product->capacity}}" placeholder="ادخل البيانات" required/>
            </td>
            <td>
                <input type="file" name="image1" required/>
            </td>
            {{--            <td>--}}
            {{--                <input type="file" name="image2" required/>--}}
            {{--            </td>--}}
            {{--            <td>--}}
            {{--                <input type="file" name="image3" required/>--}}
            {{--            </td>--}}
            {{--            <td>--}}
            {{--                <input type="file" name="image4" required/>--}}
            {{--            </td>--}}
            <td>
                <select name="category">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </td>
            <td>
                <button>حفظ</button>
            </td>
        </tr>
    </form>
    </tbody>
    <tfoot>
    </tfoot>
</table>
</body>
</html>
