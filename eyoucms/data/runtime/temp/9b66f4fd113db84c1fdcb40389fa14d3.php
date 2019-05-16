<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:40:"./application/admin/template/seo\seo.htm";i:1547458041;s:66:"D:\wamp64\www\eyoucms\application\admin\template\public\layout.htm";i:1547521060;s:60:"D:\wamp64\www\eyoucms\application\admin\template\seo\bar.htm";i:1545615936;s:66:"D:\wamp64\www\eyoucms\application\admin\template\public\footer.htm";i:1545615936;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="/eyoucms/public/static/admin/css/main.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/eyoucms/public/static/admin/css/page.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/eyoucms/public/static/admin/font/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="/eyoucms/public/static/admin/font/css/font-awesome-ie7.min.css">
<![endif]-->
<script type="text/javascript">
    var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
    var module_name = "<?php echo MODULE_NAME; ?>";
    var GetUploadify_url = "<?php echo url('Uploadify/upload'); ?>";
    var __root_dir__ = "/eyoucms";
</script>  
<link href="/eyoucms/public/static/admin/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="/eyoucms/public/static/admin/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<style type="text/css">html, body { overflow: visible;}</style>
<script type="text/javascript" src="/eyoucms/public/static/admin/js/jquery.js"></script>
<script type="text/javascript" src="/eyoucms/public/static/admin/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/eyoucms/public/plugins/layer-v3.1.0/layer.js"></script>
<script type="text/javascript" src="/eyoucms/public/static/admin/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/eyoucms/public/static/admin/js/admin.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/eyoucms/public/static/admin/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="/eyoucms/public/static/admin/js/common.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/eyoucms/public/static/admin/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/eyoucms/public/static/admin/js/jquery.mousewheel.js"></script>
<script src="/eyoucms/public/static/admin/js/myFormValidate.js"></script>
<script src="/eyoucms/public/static/admin/js/myAjax2.js?v=<?php echo $version; ?>"></script>
<script src="/eyoucms/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>

</head>
<body style="background-color: #FFF; overflow: auto;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page atta">
        <div class="fixed-bar">
        <div class="item-title">
            <div class="subject">
                <h3><i class="fa fa-newspaper-o"></i>SEO设置</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <?php if(is_array($group_list) || $group_list instanceof \think\Collection || $group_list instanceof \think\Paginator): if( count($group_list)==0 ) : echo "" ;else: foreach($group_list as $k=>$v): ?>
                    <li><a href="<?php echo U('Seo/index',['inc_type'=> $k]); ?>" <?php if($k==$inc_type): ?>class="current"<?php endif; ?>><span><?php echo $v; ?></span></a></li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    <form method="post" id="handlepost" action="<?php echo U('Seo/handle'); ?>" enctype="multipart/form-data" name="form1">
        <div class="ncap-form-default">
<!--             <dl class="row">
    <dt class="tit">
        <label for="site_url">隐藏index.php</label>
    </dt>
    <dd class="opt">
        <div class="onoff">
            <label for="seo_inlet1" class="cb-enable <?php if(isset($config['seo_inlet']) && $config['seo_inlet'] == 1): ?>selected<?php endif; ?>">是</label>
            <label for="seo_inlet0" class="cb-disable <?php if(!isset($config['seo_inlet']) || $config['seo_inlet'] == 0): ?>selected<?php endif; ?>">否</label>
            <input id="seo_inlet1" name="seo_inlet" value="1" type="radio" <?php if(isset($config['seo_inlet']) && $config['seo_inlet'] == 1): ?> checked="checked"<?php endif; ?>>
            <input id="seo_inlet0" name="seo_inlet" value="0" type="radio" <?php if(!isset($config['seo_inlet']) || $config['seo_inlet'] == 0): ?> checked="checked"<?php endif; ?>>
        </div>
        <p class="notic">空间支持伪静态才能启用，否则前台访问404错误</p>
    </dd>
</dl> -->
            <dl class="row">
                <dt class="tit">
                    <label for="seo_pseudo">URL模式</label>
                </dt>
                <dd class="opt">
                    <select name="seo_pseudo" id="seo_pseudo">
                        <?php if(is_array($seo_pseudo_list) || $seo_pseudo_list instanceof \think\Collection || $seo_pseudo_list instanceof \think\Paginator): $i = 0; $__LIST__ = $seo_pseudo_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $key; ?>" <?php if(isset($config['seo_pseudo']) && $config['seo_pseudo'] == $key): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <p class="notic">开启后能够简化前台网页URL（网址），有利于搜索引擎的收录排名</p>
                </dd>
            </dl>
            <dl class="row <?php if(!empty($config['seo_pseudo']) && 1 != $config['seo_pseudo']): ?>none<?php endif; ?>" id="dl_seo_dynamic_format">
                <dt class="tit">
                    <label>动态格式</label>
                </dt>
                <dd class="opt">
                    <label><input type="radio" name="seo_dynamic_format" value="1" <?php if(!isset($config['seo_dynamic_format']) OR $config['seo_dynamic_format'] == 1): ?>checked="checked"<?php endif; ?>>完全兼容（如：http://127.0.0.1/eyoucms/index.php?m=home&amp;c=Lists&amp;a=index&amp;tid=1）</label>&nbsp;
                    <br/>
                    <label><input type="radio" name="seo_dynamic_format" value="2" <?php if(isset($config['seo_dynamic_format']) AND $config['seo_dynamic_format'] == 2): ?>checked="checked"<?php endif; ?>>部分兼容&nbsp;<font color="red">[部分空间不支持]</font>（如：http://127.0.0.1/eyoucms/home/Lists/index.html?tid=1）</label>&nbsp;
                    <br/>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row <?php if(isset($config['seo_pseudo']) && $config['seo_pseudo'] != 3): ?>none<?php endif; ?>" id="dl_seo_rewrite_format">
                <dt class="tit">
                    <label>伪静态格式</label>
                </dt>
                <dd class="opt">
                    <label><input type="radio" name="seo_rewrite_format" value="1" <?php if(!isset($config['seo_rewrite_format']) OR $config['seo_rewrite_format'] == 1): ?>checked="checked"<?php endif; ?>>目录名称（如：http://127.0.0.1/eyoucms/about/）</label>&nbsp;
                    <br/>
                    <label><input type="radio" name="seo_rewrite_format" value="2" <?php if(isset($config['seo_rewrite_format']) AND $config['seo_rewrite_format'] == 2): ?>checked="checked"<?php endif; ?>>模型标识/目录名称.html（如：http://127.0.0.1/eyoucms/single/about.html）</label>&nbsp;
                    <br/>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
<!--             <dl class="row <?php if(isset($config['seo_pseudo']) and $config['seo_pseudo'] != 2): ?>none<?php endif; ?>" id="dl_seo_arcdir">
                <dt class="tit">
                    <label for="seo_arcdir">文档HTML默认保存路径</label>
                </dt>
                <dd class="opt">
                    <input id="seo_arcdir" name="seo_arcdir" value="<?php echo (isset($config['seo_arcdir']) && ($config['seo_arcdir'] !== '')?$config['seo_arcdir']:'/html'); ?>" class="input-txt" type="text" />
                    <p class="notic">只针对于静态页面模式，存放生成的静态页面目录</p>
                </dd>
            </dl> -->
            <dl class="row">
                <dt class="tit">
                    <label>栏目页SEO标题</label>
                </dt>
                <dd class="opt">
                    <label><input type="radio" name="seo_liststitle_format" value="1" <?php if(isset($config['seo_liststitle_format']) AND $config['seo_liststitle_format'] == 1): ?>checked="checked"<?php endif; ?>>栏目名称_网站名称</label>&nbsp;
                    <br/>
                    <label><input type="radio" name="seo_liststitle_format" value="2" <?php if(!isset($config['seo_liststitle_format']) OR $config['seo_liststitle_format'] == 2): ?>checked="checked"<?php endif; ?>>栏目名称_第N页_网站名称</label>&nbsp;
                    <br/>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>内容页SEO标题</label>
                </dt>
                <dd class="opt">
                    <label><input type="radio" name="seo_viewtitle_format" value="1" <?php if(isset($config['seo_viewtitle_format']) AND $config['seo_viewtitle_format'] == 1): ?>checked="checked"<?php endif; ?>>内容标题</label>&nbsp;
                    <br/>
                    <label><input type="radio" name="seo_viewtitle_format" value="2" <?php if(!isset($config['seo_viewtitle_format']) OR $config['seo_viewtitle_format'] == 2): ?>checked="checked"<?php endif; ?>>内容标题_网站名称</label>&nbsp;
                    <br/>
                    <label><input type="radio" name="seo_viewtitle_format" value="3" <?php if(isset($config['seo_viewtitle_format']) AND $config['seo_viewtitle_format'] == 3): ?>checked="checked"<?php endif; ?>>内容标题_栏目名称_网站名称</label>&nbsp;
                    <br/>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <div class="bot">
                <input type="hidden" name="inc_type" value="<?php echo $inc_type; ?>">
                <a href="JavaScript:void(0);" class="ncap-btn-big ncap-btn-green" onclick="adsubmit();">确认提交</a>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">

    $(function(){
        $('#seo_pseudo').change(function(){
            var seo_pseudo = $(this).val();
            if (seo_pseudo == 3) {
                $('#dl_seo_dynamic_format').hide();
                $('#dl_seo_rewrite_format').show();
            } else {
                $('#dl_seo_dynamic_format').show();
                $('#dl_seo_rewrite_format').hide();
            }
        });
    });

    function adsubmit(){
        layer_loading("正在处理");
        $('#handlepost').submit();
    }
</script>

<br/>
<div id="goTop">
    <a href="JavaScript:void(0);" id="btntop">
        <i class="fa fa-angle-up"></i>
    </a>
    <a href="JavaScript:void(0);" id="btnbottom">
        <i class="fa fa-angle-down"></i>
    </a>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#think_page_trace_open').css('z-index', 99999);
    });
</script>
</body>
</html>