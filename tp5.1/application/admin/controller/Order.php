<?php
namespace app\admin\controller;
use think\Controller;
use think\Page;
use think\Db;
use think\Request;
//订单控制器
class Order extends Common
{
	protected static $ak = 'IMHDGjlwPDSGwNguyG8X6uPyNKCjkjbZ';
	protected static $sk = '41DrUamxrXm5wGe0wlFY9I5a0OxXwzny';
    public function order()
    {
    	//多表连接查询
         if(request()->isGet('search')){
             $search=input('search');                
        }else{
            $search = "";
        }
        $where=[];
        if (!empty($_GET['orderid'])){
            $where[]=['a.orderid','like',"%".$_GET['orderid']."%"];
            $this->assign ('search',$_GET['orderid']);   
        }
        if (!empty($_GET['area'])){
            $where[]=['c.id','eq',$_GET['area']];
        }
        $result = array();
        $allData=Db::table('order')->alias('a')
                ->leftjoin([
                    ['appinfo b','a.appid = b.id'],
                    ['areainfo c','a.area = c.id'],
                    ['city d','a.city = d.id'],
                    ['order_status e','a.status = e.id'],
                ])
                ->where($where)
                ->count();
    	$list = Db::name('order')->alias('a')
    	     ->leftjoin([
    	     	['appinfo b','a.appid = b.id'],
    	     	['areainfo c','a.area = c.id'],
    	     	['city d','a.city = d.id'],
    	     	['order_status e','a.status = e.id'],
    	     ])
    	     ->field('a.id,a.orderid,a.from,a.to,a.createtime,b.name,c.name_cn as areaname,d.name_cn,e.statusNameCn')
             ->where($where)
    	     ->paginate(1,'',['query' => request()->param()]);
        $page=$list->render();
        foreach($list as $k=>$v){
            $result[$k] = $v;
        }   
    	foreach($result as $k=>$v){
    			$str1 = explode(',',$v['from']);
    			$lat = $str1[0];
    			$lng = $str1[1];
    			$url = 'http://api.map.baidu.com/geocoder/v2/?location='.$lat.','.$lng.'&output=json&pois=1&ak=IMHDGjlwPDSGwNguyG8X6uPyNKCjkjbZ';
    			$res = file_get_contents($url);
	    		$rest = json_decode($res,true);
	    		$result[$k]['from'] = $rest['result']['pois'][0]['addr'].  $rest['result']['pois'][0]['name'];
    			$str2 = explode(',',$v['to']);
    			$lat1 = $str2[0];
    			$lng1 = $str2[1];
    			$url1 = 'http://api.map.baidu.com/geocoder/v2/?location='.$lat1.','.$lng1.'&output=json&pois=1&ak=IMHDGjlwPDSGwNguyG8X6uPyNKCjkjbZ';
    			$res1 = file_get_contents($url1);
	    		$rest1 = json_decode($res1,true);
	    		$result[$k]['to'] = $rest1['result']['pois'][0]['addr'].  $rest1['result']['pois'][0]['name'];;
    	     }
        $this->assign('page',$page);
        $this->assign('list',$list);
        $this->assign('count',$allData);
        $this->assign ( 'result', $result );
     	return view();
    }
   public function order_delete(){
   		 $id = $_GET['id'];
         $order = Db::name('order');
         $res = $order->where('id','=',$id)->delete();
         if($res){
             echo 1;
         }else{
            echo 0;
         }
   }

}