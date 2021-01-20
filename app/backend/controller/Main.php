<?php

namespace app\backend\controller;
use think\App;

class Main extends common
{
// 主页
  public function index(){
      return view('maincontent');
  }
  //所有订单
  public function allOrder(){
      return view('/contents/order/allorder');
  }
  //我的订单
  public function myorder(){
      return view('/contents/order/myorder');
  }
  //我的资料
  public function info(){
      return view('/set/user/info');
  }
  //修改密码
  public function newpwd(){
      return view('/set/user/newpwd');
  }
  //首页
  public function conindex(){
      return view('/contents/index');
  }
  //员工信息
  public function staff(){
      return view('/set/system/staff');
  }
}