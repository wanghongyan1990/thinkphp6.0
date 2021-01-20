<?php


namespace app\backend\controller;
use app\BaseController;
use think\facade\Db;

class order extends BaseController
{
    public function allOrder(){
        //返回所有的订单信息
        $sel = Db::table('tk_gtxm')->select();

        $res['code'] = 0;
        $res['msg'] = "";
        $res['count'] = 1;
        $res['data'] = $sel;

        return json($res);
    }
}