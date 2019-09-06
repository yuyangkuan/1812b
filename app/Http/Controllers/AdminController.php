<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class AdminController extends Controller
{
    //后台首页
    public function index()
    {
//        echo 1;die;
        return view('/admin/index');
    }
}