<?php


namespace app\backend\controller;
use app\BaseController;

class Login extends BaseController
{
  public function index(){
      return view('login');
  }
}