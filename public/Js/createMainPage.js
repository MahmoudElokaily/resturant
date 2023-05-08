let nav=document.createElement("nav");
nav.innerHTML=`
<div class="container">
<div class="logo">
    <p>Qiaty-قاعاتي</p>
    <img src="../../Image/icons8-love-24.png" alt="" />
</div>

<ul>
    <li><a href="../../index.html">الصفحة الرئيسية</a></li>
    <li><a href="../../Page/Type-1-Qaeat/index.html">قاعات</a></li>
    <li><a href="../../Page/Type-2-clubs/index.html">نوادي</a></li>
    <li><a href="../../Page/Type-3-boats/index.html">مراكب</a></li>
    <li><a href="../../Page/Type-4-Mosques/index.html">مساجد</a></li>
    <li><a href="../../Page/Type-5-churches/index.html">كنائس</a></li>
    <li><a href="../../Page/Type-6/index.html">خدمات</a></li>
</ul>
</div>
`;
document.body.prepend(nav);
