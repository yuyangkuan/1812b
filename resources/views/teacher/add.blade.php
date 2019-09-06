@extends('layouts.shop')
    @section('content')
<div class="wrapper">
        <!--左侧导航开始-->
         @include('layouts.left')


        <!-- 右侧主体开始 -->
        <div class="page-content">
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->

              <form class="layui-form" enctype="multipart/form-data" action="/teacher/add_do" method="post">
                  <div class="layui-form-item">
                      <label for="L_email" class="layui-form-label">
                          <span class="x-red"></span>讲师姓名
                      </label>
                      <div class="layui-input-inline">
                          <input type="text" id="L_email" name="t_name" required="" lay-verify="email"
                                 autocomplete="on" class="layui-input">
                      </div>
                      <div class="layui-form-mid layui-word-aux">
                          <span class="x-red"></span>将会成为您唯一的登入名
                      </div>
                  </div>
                  <div class="layui-form-item">
                      <label for="L_username" class="layui-form-label">
                          <span class="x-red"></span>讲师职称
                      </label>
                      <div class="layui-input-inline">
                          <select name="t_status" id="">
                              <option value="初级讲师">初级讲师</option>
                              <option value="中级讲师">中级讲师</option>
                              <option value="高级讲师">高级讲师</option>
                              <option value="金牌讲师">金牌讲师</option>
                          </select>
                      </div>
                  </div>
                  <div class="layui-form-item">
                      <label for="L_pass" class="layui-form-label">
                          <span class="x-red"></span>讲师照片
                      </label>
                      <div class="layui-input-inline">
                          <input type="file" name="file" id="">
                      </div>
                  </div>
                  <div class="layui-form-item">
                      <label for="L_repass" class="layui-form-label">
                          <span class="x-red"></span>是否授课
                      </label>
                      <div class="layui-input-inline">
                          <input type="radio" name="t_show" id="" value="0" title="否" checked>
                          <input type="radio" name="t_show" id="" value="1" title="是">
                      </div>
                  </div>
                  <div class="layui-form-item">
                      <label for="L_pass" class="layui-form-label">
                          <span class="x-red"></span>讲师介绍
                      </label>
                      <div class="layui-input-inline">
                          <textarea name="t_introduce" id="" class="layui-textarea"></textarea>
                      </div>
                  </div>
                  <div class="layui-form-item">
                      <label for="L_repass" class="layui-form-label">
                      </label>
                      <input type="submit" value="添加" class="layui-btn">
                  </div>
              </form>
               <!-- 右侧内容框架，更改从这里结束 -->
          </div>
        </div>
        <!-- 右侧主体结束 -->
  </div>
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
    @endsection