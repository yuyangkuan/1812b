@extends('layouts.shop')
    @section('content')
    <!-- 中部开始 -->
    <div class="wrapper">
        <!-- 左侧菜单开始 -->
        @include('layouts.left')
        <!-- 左侧菜单结束 -->
        <!-- 右侧主体开始 -->
        @include('layouts.right')
        <!-- 右侧主体结束 -->
    </div>
    <!-- 中部结束 -->
    @endsection