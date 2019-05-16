<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Session;
class Index extends Common
{
    public function index()
    { 
    	exit('!!!');
        $area = Db::name('areainfo')->select();
      	$this->assign ('area', $area);  
        return $this->fetch('test');
    }
}
