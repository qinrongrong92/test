<?php

namespace  app\admin\controller;
use think\Controller;
use think\Validate;
use think\Request;
use think\Db;
use think\Session;
use think\captcha\Captcha;
use think\facade\Config;
class Login extends Controller {
	private $var = array ();
	//登录
	public function index(){
		return  $this->fetch('login');
	}
	public function login() {
		
        $username=input('username');
		$password1=input('password');
		if(!$username || !$password1){
			$this->error('错误：用户名、密码不能为空');
		}
		$cms_password = '1111';
        if(request()->isPost()){
        	
            // $this->check(input('code'));
			 $password=md5($password1.$cms_password);
			 if($username){//验证用户名
					$rsu= Db::name('admin')->where('username',$username)->find();
					$countu = count($rsu);
					 if(!$countu){
						 $s1=1;//=1失败
					 }else{
						 $s1=9;//=9成功
					 }
			 }
        	if($s1==1){
        		$this->error('用户不存在！');
        	}
			 if($username && $password1){//验证密码
				  $rsp= Db::name('admin')->where('username',$username)->where('password',$password)->find();
				  $countp = count($rsp);
					 if(!$countp){
						 $s2=1;
					 }else{
						 $s2=9;   //成功
						 $id=$rsp['id'];
						 //可以做一个登陆时间、登陆ip
					 }
			 }
        	if($s2==1){
        		$this->error('密码错误！');
        	}
        	if($s1==9 && $s2==9){
				session('id', $id);
                session('username', $username);
        		$this->success('登录成功！',url('/admin/index'));
        	}
        	return;
        }
		return $this -> fetch();
    }
 
    // 验证码检测
    public function check($code='')
    {
        if (!captcha_check($code)) {
            $this->error('验证码错误');
        } else {
            return true;
        }
	}
	
//退出登录
	public function logout()
	{ 
	   session(null);
	   $this->success('退出成功！',url('/admin/login/index'));
	}
}