<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('Css/main.css')}}">
    <link rel="stylesheet" href="{{asset('Page/login/style.css')}}">
    <title>Document</title>
</head>
<body>
<p>تسجيل دخول الادمن</p>
<form action="{{route('enter-dashboard')}}" method="post">
    @csrf
    <label for="username">اسم المستخدم</label>
    <input type="text" name="name" placeholder="ادخل اسم المستخدم" required>
    <label for="password">كلمه السر</label>
    <input type="password" name="password" placeholder="ادخل كلمه السر" required>
    <button>
        دخول
    </button>
</form>

</body>
</html>
