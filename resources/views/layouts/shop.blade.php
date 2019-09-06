<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台登录</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/school/css/font.css">
    <link rel="stylesheet" href="/school/css/xadmin.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
    <script src="/school/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/school/js/xadmin.js"></script>

</head>
<body>
<!-- 顶部开始 -->
<div class="container">
    <div class="logo"><a href="./index.html">X-ADMIN V1.1</a></div>
    <div class="open-nav"><i class="iconfont">&#xe699;</i></div>
    <ul class="layui-nav right" lay-filter="">
        <li class="layui-nav-item">
            <a href="javascript:;">admin</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
                <dd><a href="">个人信息</a></dd>
                <dd><a href="">切换帐号</a></dd>
                <dd><a href="/login/login">退出</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item"><a href="/">前台首页</a></li>
    </ul>
</div>
<!-- 顶部结束 -->

@yield('content')


        <!-- 底部开始 -->
<div class="footer">
    <div class="copyright" align="center">阿洋音乐工作室</div>
</div>
<!-- 底部结束 -->
<!-- 背景切换开始 -->
<div class="bg-changer">
    <div class="swiper-container changer-list">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img class="item" src="/school/images/aa.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/school/images/dd.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/school/images/c.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/school/images/d.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/school/images/e.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/school/images/f.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/school/images/g.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/school/images/h.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/school/images/i.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/school/images/j.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/school/images/timg.gif" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/school/images/a7.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/school/images/a1.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/school/images/a2.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/school/images/a3.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/school/images/a4.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/school/images/a5.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/school/images/a6.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="/school/images/u=4252368312,869593124&fm=11&gp=0.jpg" alt=""></div>
            <div class="swiper-slide"><span class="reset">初始化</span></div>
        </div>
    </div>
    <div class="bg-out"></div>
    <div id="changer-set"><i class="iconfont">&#xe696;</i></div>
</div>
<!-- 背景切换结束 -->
<script>
    //百度统计可去掉
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
</body>
</html>