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
        <th>صوره </th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <form method="post" action="{{route('update-service')}}" enctype="multipart/form-data">
        @csrf
        <tr>
            <input type="text" name="id"  value="{{$service->id}}" placeholder="ادخل البيانات" hidden/>

            <td>
                <input type="text" value="{{$service->name}}" name="name" placeholder="ادخل البيانات" required/>
            </td>
            <td>
                <input type="number" value="{{$service->price}}" name="price" placeholder="ادخل السعر" required/>
            </td>
            <td>
                <input type="file" name="image" required/>
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
