<?php
namespace app\admin\controller;
use app\admin\model\Rider;
use think\Model;
use think\Controller;
use think\Db;
use think\Request;
use page\Page;
//骑手端控制器
class Horseman extends Common
{
    public function horseman()
    {
	   
    	// $rider = Db::name('rider');
    	// $result = $rider->select();
        if(request()->isGet('search')){
             $search=input('search');                
        }else{
            $search = "";
        }
        $where=[];
        if (!empty($_GET['username'])){
            $where[]=['username','like',"%".$_GET['username']."%"];
        }
        if (!empty($_GET['area'])){
            $where[]=['area','eq',$_GET['area']];
        }
        $result = array();
        $allData=Db::table('rider')->where($where)->count();
        $list = Db::name('rider')->where($where)->paginate(1,'',['query' => request()->param()]);
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
    //更新骑手数据
    public function  horseman_edit(){
        $data =file_get_contents("php://input");
        $data = json_decode($data,TRUE); 
        $rider = new Rider();
        $res = $rider->save($data,['id'=>$data['id']]);
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
    //删除骑手数据
    public function horseman_delete(){
         $id = $_GET['id'];
         $rider = new Rider();
         $res = $rider->where('id','=',$id)->delete();
         if($res){
             echo 1;
         }else{
            echo 0;
         }
    }
    //添加骑手数据
    public function horseman_add(){
        $data =file_get_contents("php://input");
        $data = json_decode($data,TRUE);
        $data['createtime'] = time();
        unset($data['id']); 
        $app = Db::name('rider');
        $res = $app->insertGetId($data);
        if($res){
             echo 1;
        }else{
             echo 0;
            }
    }
    //骑手配送历史
    public function deliveryHistory(){
        return view('deliveryHistory');
    }
}

