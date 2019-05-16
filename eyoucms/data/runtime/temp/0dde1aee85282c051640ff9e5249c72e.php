<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:43:"./template/mobile/\lists_single_contact.htm";i:1545616464;s:28:"./template/mobile/header.htm";i:1545615936;s:28:"./template/mobile/footer.htm";i:1545615936;}*/ ?>
<!doctype html>
<html style="font-size: 120px;">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<title><?php echo $eyou['field']['seo_title']; ?></title>
<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" />
<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_cmspath"); echo $_value; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_m"); echo $_value; ?>/skin/css/swiper.min.css" />
<link rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_m"); echo $_value; ?>/skin/css/master.css" />
<link rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_m"); echo $_value; ?>/skin/css/subpage.css" />
<link rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_m"); echo $_value; ?>/skin/css/jquery.bxslider.css" />
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_m"); echo $_value; ?>/skin/js/jquery.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_m"); echo $_value; ?>/skin/js/swiper.min.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_m"); echo $_value; ?>/skin/js/common.js"></script>
<script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_m"); echo $_value; ?>/skin/js/jquery.bxslider.js"></script>
</head>
<style>
.head {
	background: #ffffff
}
.foot {
	background: #3f3f3f
}
.nav {
	background: #481f01
}
.nav_color {
	background: #481f01
}
</style>

<body>
<ul class="nav">
  <li><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_cmsurl"); echo $_value; ?>/" title="网站首页">网站首页</a></li>
  <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 60; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
  <li> <a href="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>"><?php echo $field['typename']; ?></a></li>
  <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
</ul>

<div class="allpage">
  <div class="black-fixed commonfont">&#xe607;</div>
  <div class="header">
    <div class="head"> <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_cmsurl"); echo $_value; ?>/" title="首页" class="home-btn commonfont">&#xe608;</a>
      <p class="top-title"><?php echo $eyou['field']['typename']; ?></p>
      <?php if(!(empty($eyou['field']['has_children']) || (($eyou['field']['has_children'] instanceof \think\Collection || $eyou['field']['has_children'] instanceof \think\Paginator ) && $eyou['field']['has_children']->isEmpty()))): ?>
      <div class="class-btn"><span class="commonfont">&#xe60a;</span>分类</div>
      <?php endif; ?>
      <div class="nav-btn commonfont">&#xe60b;</div>
    </div>
    <div class="type">
      <h1>分类：</h1>
      <ul>
        <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "sonself", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
        <li> <a href="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>"> <?php echo $field['typename']; ?> </a> <span class="commonfont class-down">&#xe60c;</span> </li>
        <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
      </ul>
    </div>
  </div>
  </case>
  <div class="content">
    <div class="about"> 　　
      <?php echo $eyou['field']['content']; ?> </div>
    <!--地图开始--> 
    <script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/js/map.js"></script>
    <style type="text/css">
#allmap {width: 100%;height: 300px;margin-top:20px;overflow: hidden;font-family:"微软雅黑";}
#allmap b{color: #CC5522;font-size: 14px; }
</style>
    <div id="allmap"></div>
    <script type="text/javascript">
	  var map = new BMap.Map("allmap");
	  map.centerAndZoom(new BMap.Point(<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_56"); echo $_value; ?>), 18);
	  var marker1 = new BMap.Marker(new BMap.Point(<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_56"); echo $_value; ?>));  // 创建标注
	  map.addOverlay(marker1);              // 将标注添加到地图中
	  //marker1.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画				
	  //创建信息窗口 
	  var infoWindow1 = new BMap.InfoWindow("<b><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_name"); echo $_value; ?></b><br>地址：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_55"); echo $_value; ?><br>电话：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_2"); echo $_value; ?>");
	  marker1.openInfoWindow(infoWindow1);
	  //marker1.addEventListener("click", function(){this.openInfoWindow(infoWindow1);});	
	  //向地图中添加缩放控件
 var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
 map.addControl(ctrl_nav);
      //向地图中添加缩略图控件
 var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
 map.addControl(ctrl_ove);
      //向地图中添加比例尺控件
 var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
 map.addControl(ctrl_sca);
 
 map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地				
</script> 
    <!--地图结束--> 
  </div>
  <div class="footer">
  <div class="foot foot-relative" id="foot">
    <div class="foot-relative"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "38"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $__LIST__ = $tagType->getType($typeid, "self", ""); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?> <a href="<?php echo $field['typeurl']; ?>" title="地图"> <span class="commonfont">&#xe605;</span>
      <h3>地图</h3>
      </a> <?php endif; else: echo htmlspecialchars_decode("");endif; ?> <a href="tel:<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_2"); echo $_value; ?>" title="电话"> <span class="commonfont">&#xe604;</span>
      <h3>电话</h3>
      </a> <a href="sms:<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_57"); echo $_value; ?>" title="短信"> <span class="commonfont">&#xe601;</span>
      <h3>短信</h3>
      </a> <a href="javascript:;" class="cbtn-share common-search-btn" title="分享"> <span class="commonfont">&#xe600;</span>
      <h3>分享</h3>
      </a> </div>
  </div>
</div>
<div class="share"> 
  <!--百度分享-->
  <div class="bdsharebuttonbox" data-tag="share_2" style="width: 190px;margin: 0.5rem auto;"> <a href="#" class="bds_qzone" data-cmd="qzone"></a> <a href="#" class="bds_tsina" data-cmd="tsina"></a> <a href="#" class="bds_baidu" data-cmd="baidu"></a> <a href="#" class="bds_tqq" data-cmd="tqq"></a> <a  href="#" class="bds_renren" data-cmd="renren"></a> <a href="" class="bds_weixin" data-cmd="weixin"></a> </div>
  <script>
	$(".cbtn-share").click(function(){$(".share").slideToggle(300)});   // 分享
	window._bd_share_config = {
		share : [{
			"bdSize" : 32
		}],
	}
	with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js'];
</script> 
  <!--百度分享--> 
</div>
<!-- 应用插件标签 start --> 
 <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $_value = $tagWeapp->getWeapp("default"); echo $_value; ?> 
<!-- 应用插件标签 end --> 
<!-- 网站第三方代码 start --> 
<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_thirdcode_pc"); echo $_value; ?> 
<!-- 网站第三方代码 end -->->  </div>
</body>
</html>