<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:48:"./application/admin/template/guestbook\index.htm";i:1545616313;s:63:"E:\www\www\eyoucms\application\admin\template\public\layout.htm";i:1547521060;s:63:"E:\www\www\eyoucms\application\admin\template\guestbook\bar.htm";i:1545615936;s:63:"E:\www\www\eyoucms\application\admin\template\public\footer.htm";i:1545615936;}*/ ?>
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

<body style="background-color: rgb(255, 255, 255); overflow: auto; cursor: default; -moz-user-select: inherit;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    
    <div class="fixed-bar">
        <div class="item-title">
            <a class="back" href="javascript:history.back();" title="返回列表"><i class="fa fa-arrow-circle-o-left"></i></a>
            <div class="subject">
                <h3>内容管理</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <li><a href="<?php if(\think\Request::instance()->action() == 'index'): ?>javascript:void(0);<?php else: ?><?php echo U('Guestbook/index', array('typeid'=>\think\Request::instance()->param('typeid'))); endif; ?>" data-index='1' class="tab <?php if(\think\Request::instance()->action() == 'index'): ?>current<?php endif; ?>"><span>留言列表</span></a></li>
                <li><a href="<?php if(\think\Request::instance()->action() == 'attribute_index'): ?>javascript:void(0);<?php else: ?><?php echo U('Guestbook/attribute_index', array('typeid'=>\think\Request::instance()->param('typeid'))); endif; ?>" data-index='2' class="tab <?php if(\think\Request::instance()->action() == 'attribute_index'): ?>current<?php endif; ?>"><span>表单列表</span></a></li>
            </ul>
        </div>
    </div>
    <div class="flexigrid">
        <div class="mDiv">
            <div class="ftitle">
                <h3><?php echo (isset($arctype_info['typename']) && ($arctype_info['typename'] !== '')?$arctype_info['typename']:''); ?></h3>
                <h5>(共<?php echo $pager->totalRows; ?>条记录)</h5>
            </div>
            <div title="刷新数据" class="pReload"><i class="fa fa-refresh"></i></div>
            <form class="navbar-form form-inline" action="<?php echo U('Guestbook/index'); ?>" method="get" onsubmit="layer_loading('正在处理');">
                <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                <div class="sDiv">
                    <div class="sDiv2">
                        <input type="hidden" name="typeid" id="typeid" value="<?php echo (\think\Request::instance()->param('typeid') ?: ''); ?>">
                        <input type="text" size="30" name="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" class="qsbox" placeholder="模糊搜索...">
                        <input type="submit" class="btn" value="搜索">
                    </div>
                    <div class="sDiv2">
                        <input type="button" class="btn" value="重置" onClick="window.location.href='<?php echo U('Guestbook/index', array("typeid"=>\think\Request::instance()->param('typeid'))); ?>';">
                    </div>
                </div>
            </form>
        </div>
        <div class="hDiv">
            <div class="hDivBox">
                <table cellspacing="0" cellpadding="0" style="width: 100%">
                    <thead>
                    <tr>
                        <th class="sign w40" axis="col0">
                            <div class="tc">选择</div>
                        </th>
                        <th abbr="article_title" axis="col3" class="w40">
                            <div  class="tc">ID</div>
                        </th>
                        
                        <th abbr="article_time" axis="col6" class="">
                            <div style="text-align: left; padding-left: 10px;">表单内容</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w100">
                            <div class="tc">所属栏目</div>
                        </th>
                        <th align="center" abbr="article_time" axis="col6" class="w160">
                            <div class="tc">更新时间</div>
                        </th>
                        <th axis="col1" class="w60">
                            <div class="tc">操作</div>
                        </th>
                       
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="bDiv" style="height: auto;">
            <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                <table style="width: 100%">
                    <tbody>
                    <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                        <tr>
                            <td class="no-data" align="center" axis="col0" colspan="50">
                                <i class="fa fa-exclamation-circle"></i>没有符合条件的记录
                            </td>
                        </tr>
                    <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                        <tr>
                            <td class="sign">
                                <div class="tc w40"><input type="checkbox" name="ids[]" value="<?php echo $vo['aid']; ?>"></div>
                            </td>
                            <td class="sort">
                                <div class="tc w40">
                                    <?php echo $vo['aid']; ?>
                                </div>
                            </td>
                            
                            <td style="width: 100%;">
                                <div class="tl" style="padding-left: 10px;">
                                    <?php if(is_array($vo['attr_list']) || $vo['attr_list'] instanceof \think\Collection || $vo['attr_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['attr_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
                                        <strong><?php echo $vo2['attr_name']; ?>：</strong><?php echo $vo2['attr_value']; ?><br/>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </td>
                            <td>
                                <div class="w100 tc"><?php echo (isset($vo['typename']) && ($vo['typename'] !== '')?$vo['typename']:'<i class="red">数据出错！</i>'); ?></div>
                            </td>
                            <td>
                                <div class="w160 tc">
                                    <?php echo date('Y-m-d H:i:s',$vo['update_time']); ?>
                                </div>
                            </td>
                            <td>
                                <div class="w60 tc">
                                    <?php if(is_check_access(CONTROLLER_NAME.'@del') == '1'): ?>
                                    <a class="btn red"  href="javascript:void(0);" data-url="<?php echo U('Guestbook/del'); ?>" data-id="<?php echo $vo['aid']; ?>" onClick="delfun(this);"><i class="fa fa-trash-o"></i>删除</a>
                                    <?php endif; ?>
                                </div>
                            </td>
                            
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="iDiv" style="display: none;"></div>
        </div>
        <div class="tDiv">
            <div class="tDiv2">
                <div class="fbutton checkboxall">
                    <input type="checkbox" onclick="javascript:$('input[name*=ids]').prop('checked',this.checked);">
                </div>
                <?php if(is_check_access(CONTROLLER_NAME.'@del') == '1'): ?>
                <div class="fbutton">
                    <a onclick="batch_del(this, 'ids');" data-url="<?php echo U('Guestbook/del'); ?>">
                        <div class="add" title="批量删除">
                            <span><i class="fa fa-close"></i>批量删除</span>
                        </div>
                    </a>
                </div>
                <?php endif; ?>
                <!--<?php if(is_check_access(CONTROLLER_NAME.'@attribute_index') == '1'): ?>
                <div class="fbutton">
                    <a href="<?php echo U('Guestbook/attribute_index'); ?>">
                        <div class="add" title="表单列表">
                            <span><i class="fa fa-list"></i>表单列表</span>
                        </div>
                    </a>
                </div>
                <?php endif; if(is_check_access(CONTROLLER_NAME.'@attribute_add') == '1'): ?>
                <div class="fbutton">
                    <a href="<?php echo U('Guestbook/attribute_add'); ?>">
                        <div class="add" title="新增表单">
                            <span><i class="fa fa-plus"></i>新增表单</span>
                        </div>
                    </a>
                </div>
                <?php endif; ?>
            -->
            </div>
            <div style="clear:both"></div>
        </div>
        <!--分页位置-->
        <?php echo $page; ?>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){

        // 表格行点击选中切换
        $('#flexigrid > table>tbody >tr').click(function(){
            $(this).toggleClass('trSelected');
        });

        // 点击刷新数据
        $('.fa-refresh').click(function(){
            location.href = location.href;
        });
    });
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