<?php


namespace app\backend\controller;
use app\BaseController;

class Main extends BaseController
{
  public function index(){
      return view('maincontent');
  }
}