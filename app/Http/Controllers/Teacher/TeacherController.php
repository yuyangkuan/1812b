<?php

namespace App\Http\Controllers\Teacher;

use App\Model\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function add()
    {
    	return view('teacher/add');
    }
    public function add_do()
    {

        $file=$_FILES['file'];
        $t_img=Teacher::file_add($file);
       // dd($t_img);
        $data=request()->input();
//dd($data);

        $info=[
            't_name'=>$data['t_name'],
            't_status'=>$data['t_status'],
            't_introduce'=>$data['t_introduce'],
            't_show'=>$data['t_show'],
            't_img'=>$t_img,
        ];
       $res=Teacher::insert($info);
       if ($res){
           echo "<script>alert('添加讲师成功');location.href='/teacher/index'</script>";
       }
    }

    //展示页面
    public function index()
    {
        $data=Teacher::get()->toArray();
//        dd($data);
        return view('/teacher/index',compact('data'));
    }
}
