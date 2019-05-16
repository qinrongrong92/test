<?php
namespace app\admin\controller;
//骑手端控制器
use think\Controller;
use think\Page;
use think\Db;
use think\Request;
class Apply extends Common
{
    public function apply()
    {   
        if(request()->isGet('search')){
            $search=input('search');            
        }else{
            $search = "";
        }
        $where=[];
        if (!empty($_GET['name'])){
            $where[]=['name','like',"%".$_GET['name']."%"];
            $this->assign ('search',$_GET['name']);       
        }
        $result = array();
        $allData=Db::table('appinfo')->where($where)->count();
        $list = Db::name('appinfo')->where($where)->paginate(1,'',['query' => request()->param()]);
        foreach($list as $k=>$v){
            $result[$k] = $v;
        }
    	$page=$list->render();
        $this->assign('page',$page);
        $this->assign('list',$list);
        $this->assign('count',$allData);
        $this->assign ( 'result', $result );
        return view();
    }
    //应用修改
    public function  apply_edit(){
        $data =file_get_contents("php://input");
        $data = json_decode($data,TRUE); 
        $app = Db::name('appinfo');
        $res = $app->update($data,['id'=>$data['id']]);
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
    //应用修改
    public function apply_delete(){
    	 $id = $_GET['id'];
         $order = Db::name('appinfo');
         $res = $order->where('id','=',$id)->delete();
         if($res){
             echo 1;
         }else{
            echo 0;
         }
    }
    //应用添加
    public function apply_add(){
    	$data =file_get_contents("php://input");
        $data = json_decode($data,TRUE); 
        $app = Db::name('appinfo');
        $res = $app->insertGetId($data);
        if($res){
        	 echo 1;
        }else{
        	 echo 0;
        	}
    }
}