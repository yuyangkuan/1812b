@extends('layouts.shop')
@section('content')
    <div class="wrapper">
        <!--左侧导航开始-->
    @include('layouts.left')


    <!-- 右侧主体开始 -->
        <div class="page-content">
            <div class="content">
                <!-- 右侧内容框架，更改从这里开始 -->
                <form class="layui-form xbs" action="" >
                    <div class="layui-form-pane" style="text-align: center;">
                        <div class="layui-form-item" style="display: inline-block;">

                            <div class="layui-input-inline">
                                <input type="text" name="username"  placeholder="请输入讲师名" autocomplete="off" class="layui-input">
                            </div>
                            <div class="layui-input-inline" style="width:80px">
                                <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
                            </div>
                        </div>
                    </div>
                </form>
                <xblock><button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon">&#xe640;</i>批量删除</button><a 	class="layui-btn layui-btn-warm" href="/teacher/add">添加</a><span class="x-right" style="line-height:40px">共有数据：88 条</span></xblock>
                <table class="layui-table">
                    <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="" value="">
                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            讲师名
                        </th>
                        <th>
                            讲师职称
                        </th>
                        <th>
                            照片
                        </th>
                        <th>
                            介绍
                        </th>
                        <th>
                            是否授课
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $k=>$v)
                        <tr>
                            <td>
                                <input type="checkbox" value="1" name="">
                            </td>
                            <td>
                                {{$v['t_id']}}
                            </td>
                            <td>
                                {{$v['t_name']}}
                            </td>
                            <td>{{$v['t_status']}}</td>
                            <td ><img src="/{{$v['t_img']}}" alt="" width="100px"></td>
                            <td >{{$v['t_introduce']}}</td>
                            <td class="td-status">
                            @if($v['t_show']==1)
                                    <span class="layui-btn layui-btn-normal layui-btn-mini">
                                        已授课
                                    </span>
                                @else
                                    <span class="layui-btn layui-btn-normal layui-btn-mini">
                                        未授课
                                    </span>
                                @endif
                            </td>
                            <td class="td-manage">
                                <a title="编辑" href="javascript:;" onclick="member_edit('编辑','member-edit.html','4','','510')"
                                   class="ml-5" style="text-decoration:none">
                                    <i class="layui-icon">&#xe642;</i>
                                </a>
                                <a title="删除" href="javascript:;" onclick="member_del(this,'1')"
                                   style="text-decoration:none">
                                    <i class="layui-icon">&#xe640;</i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
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