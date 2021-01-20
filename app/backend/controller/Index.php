<?php


namespace app\backend\controller;
use app\BaseController;
use think\facade\Db;
use think\facade\Session;

header('Content-Type:application/json; charset=utf-8');
class ulogin {
    public  $code;
    public  $msg;
    public  $count;
    public  $data;
}

class Index extends BaseController
{
   public function index(){
       return redirect('/login');
   }

   //判断登录情况
   public function checklog(){
       if ($this->request->isAjax()){
           $u_name = $this->request->param('username');
           $u_pwd = $this->request->param('password');
           $sel = Db::table('tk_account')
               -> where ('u_name',$u_name)
               -> find();

           if ($u_pwd === $sel['u_pwd']){  //登录成功
               session('name',$u_name);
               session('id',$sel['id']);
               //$ajax
//               $uLogin = new ulogin();
//               $uLogin->code = 0;
//               $uLogin->msg = "登入成功";
//               $uLogin->count = 1;

//               $arr1 = array("id" =>$sel['uid'], "sex" => $sel['uid']);
//               $uLogin->data = array(0 => $arr1);
//               return json_encode($uLogin);

               //用layui 提供的 admin.req
               $res['code'] = 0;
               $res['msg'] = '登入成功';
               $res['count'] = 1;

               $arr1 = array("id" =>$sel['id'], "name" => $sel['u_name']);
               $res['data'] = array(0 => $arr1);
               return json($res);
           }
           else{  //登录失败
               $res['code'] = 0;
               $res['msg'] = '登入失败';
               $res['count'] = 0;

               $arr1 = array("id" =>'0', "name" => '');
               $res['data'] = array(0 => $arr1);
               return json($res);
               session(null);
           }
       }
   }

   public function welcome(){
       $value = session();
       foreach($value as $key => $value){
           echo "{$key}==>{$value}<br>";
       }
   }

    public function logout(){
        Session::clear();
        return redirect('/login');
    }
}