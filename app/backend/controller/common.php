<?php


namespace app\backend\controller;
use app\BaseController;
use app;
use think\facade\Session;
use think\exception\HttpResponseException;


class common extends BaseController
{
    public function initialize(){
        $u_name = session('name');
        if (!session('?name'))
        {
//           echo "<script> window.alert('请登录')</script>";
            return $this->redirectTo(url('/login'));
            exit;
        }
        else {
//           echo '登录成功';
            //判断用户的权限
        }
    }

    /**
     * 自定义重定向方法 重要的操作二
     * @param $args
     */
    public function redirectTo(...$args)
    {
        // 此处 throw new HttpResponseException 这个异常一定要写
        throw new HttpResponseException(redirect(...$args));
    }

}