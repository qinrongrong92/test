<?php

namespace  app\admin\controller;
use think\Controller;
use think\Session;

class Common extends Controller {
	//登录
	 public function initialize()
    {   
        //判断有无admin_username这个session，如果没有，跳转到登陆界面
        if(!session('username')){
            return $this->error('您没有登陆',url('Login/index'));
        }
    }
}