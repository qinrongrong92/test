<?php
namespace app\admin\controller;
//管理员管理
use think\Controller;
use think\Page;
use think\Db;
use think\Request;
class Administrator extends Common
{
    public function administrator()
    {   
        if(request()->isGet('search')){
            $search=input('search');            
        }else{
            $search = "";
        }
        $where=[];
        if (!empty($_GET['username'])){
            $where[]=['username','like',"%".$_GET['username']."%"];
            $this->assign ('search',$_GET['username']);       
        }
        $result = array();
        $allData=Db::table('admin')->where($where)->count();
        $list = Db::name('admin')->where($where)->order('id asc')->paginate(1,'',['query' => request()->param()]);
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
    public function administrator_edit(){
    	$data =file_get_contents("php://input");
        $data = json_decode($data,TRUE); 
        $res = Db::name('admin');
        $result = $res->update($data,['id'=>$data['id']]);
        if($result){
            echo 1;
        }else{
            echo 0;
        }
    }
    public function administrator_add(){
    	$data =file_get_contents("php://input");
        $data = json_decode($data,TRUE);
        unset($data['id']); 
        //密码处理
        $data['salt'] = '1111';
        $data['password'] = md5($data['password'].$data['salt']);
        $app = Db::name('admin');
        $res = $app->insertGetId($data);
        if($res){
             echo 1;
        }else{
             echo 0;
            }
    }
    public function administrator_delete(){
    	 $id = $_GET['id'];
         $app = Db::name('admin');
         $res = $app->where('id','=',$id)->delete();
         if($res){
             echo 1;
         }else{
            echo 0;
         }
    }
}