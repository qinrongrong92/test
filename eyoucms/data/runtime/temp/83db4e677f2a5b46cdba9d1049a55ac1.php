<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:28:"./template/mobile/\index.htm";i:1545616464;s:28:"./template/mobile/header.htm";i:1545615936;s:28:"./template/mobile/footer.htm";i:1545615936;}*/ ?>
<!doctype html>
<html style="font-size: 120px;">
<head>
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="telephone=no" name="format-detection">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_title"); echo $_value; ?></title>
<meta name="description" content="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_description"); echo $_value; ?>" />
<meta name="keywords" content="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_keywords"); echo $_value; ?>" />
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
  <div class="black-fixed iconfont">&#xe60f;</div>
  <div class="header clear-fix">
    <div class="head"> <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_cmsurl"); echo $_value; ?>/" title="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_name"); echo $_value; ?>" class="logo"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_logo"); echo $_value; ?>" alt="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_name"); echo $_value; ?>" style="padding-top:5px;padding-left: 115px;"/> </a>
      <div class="nav-btn commonfont">&#xe60b;</div>
    </div>
  </div>
  </case>
  <div class="content content_new">
    <div class="banner">
      <div class="ban">
        <div class="swiper-wrapper"> <?php  $tagAdv = new \think\template\taglib\eyou\TagAdv; $_result = $tagAdv->getAdv(1, "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 10, true) : $_result->slice(0, 10, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field):  if ($i == 0) : $field["currentstyle"] = ""; else:  $field["currentstyle"] = ""; endif;$mod = ($e % 2 );$i= intval($key) + 1;?>
          <div class="swiper-slide"> <img src="<?php echo $field['litpic']; ?>"/> </div>
          <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?> </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <div class="index_show"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_m"); echo $_value; ?>/skin/img/show.jpg"/> </div>
    <div class="clear"></div>
    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "35"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
    <div class="index_pro" style="background-image:url(<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_m"); echo $_value; ?>/skin/img/pro_bg.jpg);background-size:100% auto;background-repeat:no-repeat;">
      <div class="index_pro02"><?php  $__value__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__value__; ?></div>
      <div style="height:35%;"></div>
      
      <!--效果开始-->
      <div class="slider8">
        <div class="slide">
          <div class="index_pro03"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 6; endif; $channeltype = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channeltype, ); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
            <dl>
              <a href="<?php echo $field['arcurl']; ?>">
              <dt><img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>"/></dt>
              <dd>-<?php echo $field['title']; ?>-</dd>
              </a>
            </dl>
            <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?> </div>
        </div>
      </div>
      
      <!--效果开始 end--> 
      
    </div>
    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>
    <div class="clear"></div>
    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "36"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
    <div class="index_case" style="background-image:url(<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_m"); echo $_value; ?>/skin/img/case.jpg);background-size:100% auto;background-repeat:no-repeat;">
      <div class="index_about01"><?php  $__value__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__value__; ?></div>
      
      <!---->
      <div class="index_case01"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 4; endif; $channeltype = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channeltype, ); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 20, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
        <dl>
          <a href="<?php echo $field['arcurl']; ?>" style="width:100%; height:100%; display:block;">
          <dt style="background:url(<?php echo $field['litpic']; ?>) no-repeat center center; background-size:auto 100%; width:100%; height:100%;"></dt>
          <dd><span><?php echo $field['title']; ?></span><?php echo $field['seo_description']; ?>...</dd>
          </a>
        </dl>
        <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?>
        <div class="clear"></div>
      </div>
      <!----> 
      
      <a href="<?php  $__value__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__value__; ?>" class="index_case02">更多 +</a> </div>
    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>
    <div class="clear"></div>
    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "1"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
    <div class="index_about" style="background-image:url(<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_m"); echo $_value; ?>/skin/img/about.jpg); background-size:100% auto ;background-repeat:no-repeat;">
      <div class="index_about01"><?php  $__value__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__value__; ?></div>
      <div class="index_about02"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $__LIST__ = $tagType->getType($typeid, "self", "single_content"); if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
        <?php echo html_msubstr($field['content'],0,78,true); ?>...
        <?php endif; else: echo htmlspecialchars_decode("");endif; ?> </div>
      <div class="index_about03"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_name"); echo $_value; ?></div>
      <div style="text-align:right; color:#461d00; font-size:0.16rem; padding-right:4.5%; padding-top:1%;"><?php  $__value__ = isset($channelartlist["englist_name"]) ? $channelartlist["englist_name"] : "变量名不存在"; echo $__value__; ?></div>
    </div>
    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>
    <div class="clear"></div>
    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "37"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
    <div class="index_honor">
      <div class="index_honor01">
        <div class="index_pro02"><?php  $__value__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__value__; ?></div>
        <div class="index_honor02"> 
          <!---->
          
          <div class="slider800"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $channeltype = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channeltype, ); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
            <div class="slide"><a href="<?php echo $field['arcurl']; ?>" style="bor/der:#351000 solid 0.02rem; display:block; width:90%; margin:0 auto; border:#351000 solid 0.02rem;  background:#f00; height:1.4rem; background:url(<?php echo $field['litpic']; ?>) center center no-repeat; background-size:auto 100%;"></a></div>
            <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?> </div>
          <script type="text/javascript">
        $(document).ready(function(){
          $('.slider800').bxSlider({
            slideWidth: 600,
            minSlides: 2,
            maxSlides: 2,
			infiniteLoop: false,
            slideMargin: 0
          });
        });
    </script>
          <style>
.index_honor01 .bx-wrapper .bx-pager{ display:none;}
.index_honor01 .bx-wrapper { height:1.55rem; overfl/ow:hidden;}
	
.index_honor01 .bx-wrapper .bx-prev {left: -12%; top:32%;width: 0.4rem;height: 0.53rem; background:url(<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_m"); echo $_value; ?>/skin/img/jj03.png) no-repeat; background-size:cover;}
.index_honor01 .bx-wrapper .bx-next {right: -12%; top:32%;width: 0.4rem;height: 0.53rem;background:url(<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_m"); echo $_value; ?>/skin/img/jj04.png) no-repeat; background-size:cover;}
	
	
</style>
          
          <!----> 
          
        </div>
      </div>
      <a href="<?php  $__value__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__value__; ?>" class="index_honor03">更多 +</a></div>
    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>
    <div class="clear"></div>
    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "2"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$mod = ($e % 2 );$i= intval($key) + 1;?>
    <div class="index_news" style="background-image:url(<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_m"); echo $_value; ?>/skin/img/news.jpg);background-size:100% auto;background-repeat:no-repeat;"> 
      
      <!---->
      <div class="index_news01">
        <div class="index_news02"><span><?php  $__value__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__value__; ?></span><?php  $__value__ = isset($channelartlist["englist_name"]) ? $channelartlist["englist_name"] : "变量名不存在"; echo $__value__; ?></div>
        
        <!---->
        
        <div class="slider80"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $channeltype = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channeltype, ); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc");if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 40, true);$mod = ($e % 2 );$i= intval($key) + 1;?>
          <div class="slide">
            <div class="index_news03">
              <dl>
                <a href="<?php echo $field['arcurl']; ?>">
                <dt style=" background-image:url(<?php echo $field['litpic']; ?>);"></dt>
                <dd> <strong><?php echo $field['title']; ?></strong><span><?php echo $field['seo_description']; ?>...</span> </dd>
                </a>
              </dl>
            </div>
          </div>
          <?php ++$e; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; ?> </div>
        <script type="text/javascript">
        $(document).ready(function(){
          $('.slider80').bxSlider({ 
            slideWidth: 640, 
			adaptiveHeight: true,
			startSlides: 0, 
			infiniteLoop: false,
            slideMargin: 10
          });
        });
    </script>
        <style>
	.index_news01 .bx-wrapper .bx-pager{ display:none;}
	.index_news01 .bx-wrapper { height:3.6rem; overfl/ow:hidden;}
	</style>
        
        <!----> 
        
        <a href="<?php  $__value__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__value__; ?>" class="index_news04">更多 +</a> </div>
      <!----> 
      
    </div>
    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>
    <div class="clear"></div>
    <div class="index_cotnact">
      <div style=" padding-bottom:3%;"> 
        <script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $_value = $tagGlobal->getGlobal("web_templets_m"); echo $_value; ?>/skin/js/map.js"></script>
        <style type="text/css">
#allmap {overflow: hidden;font-family:"微软雅黑";}
#allmap b{color: #CC5522;font-size: 14px; }
</style>
        <div id="allmap" style="width:100%; height:200px;"></div>
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
      <div class="bq">技术支持：<a target="_blank" href="http://www.eyoucms.com">易优</a></div>
    </div>
    <div class="clear"></div>
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
<!-- 网站第三方代码 end -->-> </div>
</body>
</html>