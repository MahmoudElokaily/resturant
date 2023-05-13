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
        <th></th>
    </tr>
    </thead>
    <tbody>
    <form method="post" action="{{route('update-category')}}">
        @csrf
            <input type="text" name="id"  value="{{$category->id}}" placeholder="ادخل البيانات" hidden/>
        <tr>
            <td>
                <input type="text" name="name" value="{{$category->name}}" placeholder="ادخل البيانات" required/>
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
