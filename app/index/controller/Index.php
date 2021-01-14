<?php


namespace app\index\controller;
use app\BaseController;
use think\facade\Db;
//use think\Db;

class Index extends BaseController
{
  public function index(){
      //输出数据库中的信息
//      $select = Db::table('hy_uadmin') -> where('uid',1) -> find();
//      return json_encode($select);
      return view();
  }

  public function adb(){
      $select = Db::table('hy_uadmin') -> where('uid',1) -> find();
      return json_encode($select);
  }

    public function hello(string $name)
    {
        return 'Hello,'.$name;
    }
}