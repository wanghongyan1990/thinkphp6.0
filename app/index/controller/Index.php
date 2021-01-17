<?php


namespace app\index\controller;
use app\BaseController;

class Index extends BaseController
{
    public function index(){
//        session('name','wanghongyan');
//        $aa = session('name');

        //跳转到登陆页面
        return redirect('login');

    }
}