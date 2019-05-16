<?php
namespace app\home\controller;
use think\Controller;
use think\Request;
use page\Page;
use think\Db;
class Index extends Controller
{
    public function index()
    {
    	$list = Db::name('rider')->where('status',1)->paginate(1);
        $page=$list->render();

        $this->assign('page',$page);
        $this->assign('list',$list);
        return $this->fetch();
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
