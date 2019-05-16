<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:24:"./template/pc/\index.htm";i:1557539839;s:24:"./template/pc/header.htm";i:1545615936;s:24:"./template/pc/footer.htm";i:1557975544;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_title"); echo $_value; ?></title>
<meta name="description" content="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_description"); echo $_value; ?>" />
<meta name="keywords" content="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_keywords"); echo $_value; ?>" />
<meta name="viewport" content="width=1080">
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_cmspath"); echo $_value; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/css/master.css" />
<link rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/css/subpage.css" />
<link rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/css/common.css" />
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
<!--网站公告开始-->
<div class="index_gonggao">
  <div class="index_gonggao01"><span>网站公告：</span>
    <marquee scrollamount="2" scrolldelay="5" onMouseOut="this.start()" onMouseOver="this.stop()">
    <?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_1"); echo $_value; ?>
    </marquee>
  </div>
</div>
<!--网站公告结束-->

<div class="clear"></div>
<!--产品中心开始--> 
<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "35"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
<div class="index_pro00">
  <div class="index_pro01">
    <div class="index_hovor02"><?php  $__value__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__value__; ?></div>
    <div class="index_pro02">
      <div class="picScroll-left01">
        <div class="hd"> <a class="next"></a><a class="prev"></a> </div>
        <div class="bd">
          <ul class="picList">
            <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $channeltype = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channeltype, ); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
            <li><a class="chanpin00" href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>">
              <div class="index_pro03">
                <div class="index_pro04" ><?php echo $field['title']; ?></div>
              </div>
              <img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>" width="310" height="232"/></a></li>
            <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
          </ul>
        </div>
      </div>
      <script type="text/javascript">
		jQuery(".picScroll-left01").slide({titCell:".hd ul",mainCell:".bd ul",interTime: 3000,autoPage:true,effect:"left",autoPlay:true,vis:2,trigger:"click"});
</script> 
    </div>
  </div>
</div>
<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?> 
<!--产品中心结束--> 
<script language="javascript">
			$(function(){
				$(".chanpin00").hover(
					function(){
						$(this).children(".index_pro03").fadeIn(200);
					}, 
					function(){
						$(this).children(".index_pro03").fadeOut(200);
					});	
			});
</script>
<div class="clear"></div>

<!--成功案例开始--> 
<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "36"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
<div class="index_case01">
  <div class="index_case02">
    <div class="index_about01"><?php  $__value__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__value__; ?></div>
    <div class="index_case03"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/images/case05.png"/></div>
    <div class="index_case04"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 4; endif; $channeltype = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channeltype, ); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
      <dl>
        <dt><a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>"  height="180"/></a></dt>
      </dl>
      <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?> </div>
    <!--推荐内容开始-->
    <div class="index_case05">
      <div class="slideBox02">
        <div class="hd">
          <ul>
          </ul>
        </div>
        <div class="bd">
          <ul>
            <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 7; endif; $channeltype = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channeltype, ); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,4, $row, true) : $_result->slice(4, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 60, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
            <li>
              <div class="index_case06"><a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>">
                <div class="index_case07"><span ><?php echo $field['title']; ?></span>
                  <p><?php echo $field['seo_description']; ?></p>
                </div>
                <img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>" height="376"/></a></div>
            </li>
            <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
          </ul>
        </div>
      </div>
      <script type="text/javascript">
		jQuery(".slideBox02").slide({titCell:".hd ul",mainCell:".bd ul",interTime: 3000,autoPage:true,autoPlay:true});
</script> 
    </div>
    <!--推荐内容结束-->
    <div class="clear"></div>
    <div class="index_hovor04" style=" padding-top:12px;"><a href="<?php  $__value__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__value__; ?>"  title="更多 +">更多 +</a></div>
  </div>
</div>
<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?> 

<!--成功案例结束-->

<div class="clear"></div>
<!--关于我们开始--> 
<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "1"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
<div class="index_about">
  <div class="index_about01"><?php  $__value__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__value__; ?></div>
  <div class="index_about02">
    <div class="index_about03">
      <p style="text-indent: 2em;"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $__LIST__ = $tagType->getType($typeid, "self", "single_content"); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
        <?php echo html_msubstr($field['content'],0,160,true); ?>...
        <?php endif; else: echo htmlspecialchars_decode("");endif; ?> </p>
    </div>
    <div class="clear"></div>
    <div class="index_about04"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_name"); echo $_value; ?></div>
  </div>
</div>
<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?> 
<!--关于我们结束-->

<div class="clear"></div>

<!--资质荣誉开始--> 
<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "37"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
<div class="index_hovor">
  <div class="index_hovor01">
    <div class="index_hovor02"><?php  $__value__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__value__; ?></div>
    <div class="index_hovor03">
      <div class="picScroll-left">
        <div class="hd"> <a class="next"></a><a class="prev"></a></div>
        <div class="bd">
          <ul class="picList">
            <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $channeltype = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channeltype, ); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 60, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
            <li><a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>"/></a></li>
            <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
          </ul>
        </div>
      </div>
      <script type="text/javascript">
		jQuery(".picScroll-left").slide({titCell:".hd ul",mainCell:".bd ul",interTime: 3000,autoPage:true,effect:"left",autoPlay:true,vis:3,trigger:"click"});
</script>
      <div class="index_hovor04"><a href="<?php  $__value__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__value__; ?>"  title="更多 +">更多 +</a></div>
    </div>
  </div>
</div>
<?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?> 

<!--资质荣誉结束-->

<div class="clear"></div>
<div class="index_news"> 
  <!--新闻资讯开始--> 
  <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "2"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
  <div class="index_news01">
    <div class="index_news02"><?php  $__value__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__value__; ?><span><?php  $__value__ = isset($channelartlist["englist_name"]) ? $channelartlist["englist_name"] : "变量名不存在"; echo $__value__; ?></span></div>
    <div class="slideBox01">
      <div class="bd">
        <ul>
          <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $channeltype = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channeltype, ); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 60, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
          <li>
            <div class="index_news03">
              <dl>
                <dt><a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>" width="430" height="176"/></a></dt>
                <dd><a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><strong>·</strong><?php echo $field['title']; ?></a><span><?php echo $field['seo_description']; ?></span></dd>
              </dl>
            </div>
          </li>
          <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
        </ul>
      </div>
      <a class="prev" href="javascript:void(0)"></a> <a class="next" href="javascript:void(0)"></a> </div>
    <script type="text/javascript">
		jQuery(".slideBox01").slide({mainCell:".bd ul",interTime: 3000,autoPlay:true});
</script>
    <div class="index_news04"><a href="<?php  $__value__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__value__; ?>"  title="MORE+">更多新闻内容>></a></div>
  </div>
  <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?> 
  <!--新闻资讯结束--> 
  
  <!--联系我们开始--> 
  <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "38"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
  <div class="index_contact">
    <div class="index_news02"><?php  $__value__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__value__; ?><span><?php  $__value__ = isset($channelartlist["englist_name"]) ? $channelartlist["englist_name"] : "变量名不存在"; echo $__value__; ?></span></div>
    <div class="index_contact01"> 
      <script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/js/map.js"></script>
      <style type="text/css">
#allmap {overflow: hidden;font-family:"微软雅黑";}
#allmap b{color: #CC5522;font-size: 14px; }
</style>
      <div id="allmap" style="width:100%; height:300px;"></div>
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
    </div>
    <div class="index_contact02">
      <ul>
        <li>电话：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_2"); echo $_value; ?></li>
        <li style=" background:url(<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/images/co02.png) no-repeat 6px 7px;">邮箱：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_54"); echo $_value; ?></li>
        <li style=" background:url(<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_pc"); echo $_value; ?>/skin/images/co03.png) no-repeat 6px 7px;">地址：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_attr_55"); echo $_value; ?></li>
      </ul>
    </div>
  </div>
  <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?> 
  
  <!--联系我们结束--> 
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
      <div class="footer03">公司业务： <?php  $tagFlink = new \think\template\taglib\eyou\TagFlink; $_result = $tagFlink->getFlink("1", "0,20"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["title"] = text_msubstr($field["title"], 0, 20, false); $__LIST__[$key] = $_result[$key] = $field;$mod = ($e % 2 );$i= intval($key) + 1;?><a href="<?php echo $field['url']; ?>"  title="<?php echo $field['title']; ?>" <?php echo $field['target']; ?>><?php echo $field['title']; ?></a><?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?> <br />
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
<div class="f_bq">Copyright © 2019 广西悠赢网络科技有限公司 　网站备案号：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_recordnum"); echo $_value; ?></div>
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