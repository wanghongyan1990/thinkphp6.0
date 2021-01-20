<?php


namespace app\backend\controller;
use app\BaseController;
use think\facade\Db;


class set extends BaseController
{
   public function setpass(){
       //获取得到的值
       if ($this->request->isAjax()) {
           $id = session('id');
           $oldPwd = $this->request->param('oldPassword');
           $newPwd = $this->request->param('password');
           $reNewPwd = $this->request->param('repassword');

           //判断老的密码是否正确
           $pwd = Db::table('tk_admin')
                ->where('uid',$id)
                -> find();

           if ($oldPwd == $pwd['adminpwd']){
               Db::name('tk_admin')
                   ->where('uid',$id)
                   ->update(['adminpwd' => $newPwd]);

               $res['code'] = 0;
               $res['msg'] = '修改成功';
               $res['count'] = 0;
               $res['data'] = null;
               return json($res);
           } else{
               $res['code'] = 0;
               $res['msg'] = '原密码错误';
               $res['count'] = 0;
               $res['data'] = null;
               return json($res);
           }
       }
   }
}