<nav>
    <div class="container">
        <div class="logo">
            <p>Qiaty-قاعاتي</p>
            <img src="Image/icons8-love-24.png" alt="" />
        </div>

        <ul>
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
            @foreach(\App\Models\Category::all() as $category)
                <li><a href="{{route('category' , $category->id)}}">{{$category->name}}</a></li>
            @endforeach
            <li><a href="{{route('services')}}">الخدمات</a></li>
        </ul>
    </div>
</nav>
