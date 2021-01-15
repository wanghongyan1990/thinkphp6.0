<?php


namespace app\index\controller;
use app\BaseController;
use think\facade\Db;
use think\facade\Session;

class login extends BaseController
{
    public function index(){
        return view();
    }

    public  function check(){
        //获取提交的数据
        if (request()->isAjax()){
            $u_name = $this->request->param('login');
            $u_pwd = $this->request->param('pwd');

            $sel = Db::table('tk_admin')
                   -> where ('adminname',$u_name)
                   -> find();
//            return json_encode($sel);
//            if (password_verify($u_pwd,$sel['adminpwd'])){
//                session('name',$u_name);
//                session('id',$sel['uid']);
//            }
//            else{
//                session('name','失败');
//            }
            if ($u_pwd === $sel['adminpwd']){
                session('name',$u_name);
                session('id',$sel['uid']);
            }
            else{
                session(null);
            }
        }

//        $pwd = "123456";
//        $hash = password_hash($pwd, PASSWORD_DEFAULT);
//        return json_encode($hash);
//        return json_encode($sel['adminpwd']);
//        if (password_verify("123456","$2y$10$fTjnHiur1\/DW0HV29.3.qelxx\/dBPw34YA9f1rb.R\/DCOE6Y7ahkO")){
//            return json_encode($sel);
//        }
    }
}