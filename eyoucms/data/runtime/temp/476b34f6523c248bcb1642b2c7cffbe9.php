<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:39:"./template/pc/\lists_single_contact.htm";i:1545616464;s:24:"./template/pc/header.htm";i:1545615936;s:22:"./template/pc/left.htm";i:1557373699;s:24:"./template/pc/footer.htm";i:1545615936;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $eyou['field']['seo_title']; ?></title>
<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" />
<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_cmspath"); echo $_value; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<meta name="viewport" content="width=1080">
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/css/master.css" rel="stylesheet">
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/css/style.css" rel="stylesheet">
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/css/subpage.css" rel="stylesheet">
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/css/common.css" rel="stylesheet">
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/js/jquery.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/js/jquery.superslide.2.1.1.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/js/form.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/js/common.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/js/jquery.validator.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/js/zh_cn.js"></script>
</head>
<body>
<!--页头开始-->

<div class="header theme_color1">
  <div class="main">
    <div class="logo"><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_cmsurl"); echo $_value; ?>/" title="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_name"); echo $_value; ?>"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_logo"); echo $_value; ?>" alt="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_name"); echo $_value; ?>" width="465" height="97"/></a></div>
    <div class="tel"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_2"); echo $_value; ?></div>
    <!--搜索栏开始-->
    <div class="search_btn"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/images/ssbtn.png"/></div>
    <div class="search01">
      <form class="sidebar-search" method="get" action="<?php  $tagSearchurl = new \think\template\taglib\eyou\TagSearchurl; $_result = $tagSearchurl->getSearchurl(); echo $_result?>">
        <input type="hidden" name="channel" value="" />
        <input type="hidden" name="typeid" value="" />
        <div class="search02">
          <input class="search03" type="text" name="keywords" value="请输入关键字" onfocus="if(this.value==defaultValue)this.value=''" onblur="if(this.value=='')this.value=defaultValue">
        </div>
        <div class="search02">
          <input name="submit" type="submit" class="search04" value="搜索" />
        </div>
      </form>
    </div>
    <script>
    	$(function(){
			$('.jslct dl dd').click(function(){
				$(this).closest('form').attr('action',$(this).attr('value'));
			});
			///
			$(".search_btn").click(function(){
				$(".search01").slideToggle("slow");
			});////
		})
</script> 
    <!--搜索栏结束--> 
  </div>
</div>
<!--页头结束--> 

<!--导航开始-->
<div class="g_nav">
  <div class="g_nav01">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="ihome"><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_cmsurl"); echo $_value; ?>/"  title="网站首页">网站首页</a></td>
        <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "top"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
        <td><a href="<?php  $__value__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__value__; ?>"><?php  $__value__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__value__; ?></a>
          <div class="nav_tan"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "son", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?> <a href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a> <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?> </div></td>
        <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?></tr>
    </table>
  </div>
</div>
<!--导航结束-->
<div class="clear"></div>
<!--幻灯片大图开始-->
<div id="slideBox" class="slideBox">
  <div class="bd">
    <ul>
      <?php  $tagAdv = new \think\template\taglib\eyou\TagAdv; $_result = $tagAdv->getAdv(1, "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 10, true) : $_result->slice(0, 10, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field):  if ($i == 0) : $field["currentstyle"] = ""; else:  $field["currentstyle"] = ""; endif;$mod = ($e % 2 );$i= intval($key) + 1;?>
      <li style="background: url(<?php echo $field['litpic']; ?>) center center no-repeat;"><a href="<?php echo $field['links']; ?>"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/images/no.gif"/></a></li>
      <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
    </ul>
  </div>
  <div class="hd">
    <ul>
      <?php  $tagAdv = new \think\template\taglib\eyou\TagAdv; $_result = $tagAdv->getAdv(1, "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 10, true) : $_result->slice(0, 10, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field):  if ($i == 0) : $field["currentstyle"] = ""; else:  $field["currentstyle"] = ""; endif;$mod = ($e % 2 );$i= intval($key) + 1;?>
      <li></li>
      <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
    </ul>
  </div>
  <a href="javascript:void(0)" class="prev"></a> <a href="javascript:void(0)" class="next"></a> </div>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/js/banner.js"></script> 
<!--幻灯片大图结束--> 
<div class="product sub_pro"> <div class="sub_pro01"> 
  <!--产品分类开始--> 
  <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "35"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
  <div class="sub_pro02">
    <div class="product07"><b><?php echo $eyou['field']['typename']; ?></b></div>
    <div class="sidenav">
      <ul>
        <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "son", "cu"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?>
        <li><a href="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>" class="sidenava <?php echo $field['currentstyle']; ?>">
          <p><?php echo $field['typename']; ?></p>
          </a> </li>
        <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
      </ul>
    </div>
  </div>
  <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?> 
  
  <!--产品分类结束--> 
  
  <!--联系我们开始-->
  <div class="sub_lx">
    <div class="sub_lx01">咨询热线<br>
      <?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_2"); echo $_value; ?><br>
      地址：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_55"); echo $_value; ?><br>
      <!-- 邮箱：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_54"); echo $_value; ?> --></div>
  </div>
  <!--联系我们结束--> 
</div>

  <div class="product02">
    <div class="content_com_title">
      <h2><?php echo $eyou['field']['typename']; ?></h2>
      <div class="bread">当前位置： <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagPosition = new \think\template\taglib\eyou\TagPosition; $_value = $tagPosition->getPosition($typeid, "", "crumb"); echo $_value; ?></div>
    </div>
    <!--单页内容开始-->
    <div class="content">
      <div class="view">
        <h1 class="view-title"><?php echo $eyou['field']['typename']; ?></h1>
        <div class="bshare-custom view-share" ></div>
        <?php echo $eyou['field']['content']; ?> 
        <!--地图开始--> 
        <script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/js/map.js"></script>
        <style type="text/css">
#allmap {width: 100%;height: 400px;margin-top:20px;overflow: hidden;font-family:"微软雅黑";}
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
        <!--地图结束--></div>
      <div class="page"><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_cmsurl"); echo $_value; ?>/" title="返回首页" class="back theme_color">返回首页</a> </div>
    </div>
    <!--单页内容结束--> 
  </div>
  <div class="clear"></div>
</div>
<div class="clear"></div>
<!--页尾开始-->

<div class="footer">
  <div class="footer00"> 
    <!--二维码开始-->
    <div class="footer01"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_4"); echo $_value; ?>" alt="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_name"); echo $_value; ?>" width="138" height="138"/></div>
    <!--二维码结束-->
    <div class="footer02"> 
      <!--友情链接开始-->
      <div class="footer03">友情链接： <?php  $tagFlink = new \think\template\taglib\eyou\TagFlink; $_result = $tagFlink->getFlink("1", "0,20"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["title"] = text_msubstr($field["title"], 0, 20, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?><a href="<?php echo $field['url']; ?>"  title="<?php echo $field['title']; ?>" <?php echo $field['target']; ?>><?php echo $field['title']; ?></a><?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?> <br />
        地址：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_55"); echo $_value; ?>　　电话：<span><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_2"); echo $_value; ?></span>　　手机：<span><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_57"); echo $_value; ?></span></div>
      <!--友情链接结束--> 
      
      <!--分享代码开始-->
      <div class="footer04"><span>分享到：</span>
        <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tqf" data-cmd="tqf" title="分享到腾讯朋友"></a><a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a></div>
        <script>
	window._bd_share_config = {
		share : [{
			"bdSize" : 24
		}],
	}
	with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
</script> 
      </div>
      <!--分享代码结束--> 
    </div>
  </div>
</div>
<!--页尾结束--> 

<!--底部开始-->
<div class="f_bq"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_copyright"); echo $_value; ?>　　网站备案号：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_recordnum"); echo $_value; ?></div>
<!--底部结束--> 

<!--浮动工具开始-->
<div class="c-tools">
  <ul>
    <li class="tel-ico"><span>固话：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_2"); echo $_value; ?><br>
      手机：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_57"); echo $_value; ?></span></li>
    <li class="ewm-ico"><span class="ewmPic"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_4"); echo $_value; ?>" alt="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_name"); echo $_value; ?>"/></span></li>
    <li class="qq-ico"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_3"); echo $_value; ?>&amp;site=qq&amp;menu=yes"><span>QQ：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_3"); echo $_value; ?></span></a></li>
    <li class="top-ico"></li>
  </ul>
</div>
<!--浮动工具结束--> 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/js/search.js"></script> 
<!-- 应用插件标签 start --> 
 <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $_value = $tagWeapp->getWeapp("default"); echo $_value; ?> 
<!-- 应用插件标签 end --> 
<!-- 网站第三方代码 start --> 
<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_thirdcode_pc"); echo $_value; ?> 
<!-- 网站第三方代码 end -->
</body>
</html>