<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:50:"./application/admin/template/ad_position\index.htm";i:1545616313;s:63:"E:\www\www\eyoucms\application\admin\template\public\layout.htm";i:1547521060;s:59:"E:\www\www\eyoucms\application\admin\template\other\bar.htm";i:1545616313;s:63:"E:\www\www\eyoucms\application\admin\template\public\footer.htm";i:1545615936;}*/ ?>
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
            <div class="subject">
                <h3>广告管理</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <li><a href="<?php if(\think\Request::instance()->controller() == 'Other'): ?>javascript:void(0);<?php else: ?><?php echo U("Other/index"); endif; ?>" class="tab <?php if(\think\Request::instance()->controller() == 'Other'): ?>current<?php endif; ?>"><span>广告列表</span></a></li>
                
                <?php if($main_lang == $admin_lang): ?>
                <li><a href="<?php if(\think\Request::instance()->controller() == 'AdPosition'): ?>javascript:void(0);<?php else: ?><?php echo U("AdPosition/index"); endif; ?>" class="tab <?php if(\think\Request::instance()->controller() == 'AdPosition'): ?>current<?php endif; ?>"><span>广告位置</span></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="flexigrid">
        <div class="mDiv">
            <div class="ftitle">
                <h3>广告位置</h3>
                <h5>(共<?php echo $pager->totalRows; ?>条记录)</h5>
            </div>
            <div title="刷新数据" class="pReload"><i class="fa fa-refresh"></i></div>
            <form class="navbar-form form-inline" action="<?php echo U('AdPosition/index'); ?>" method="get" onsubmit="layer_loading('正在处理');">
                <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                <div class="sDiv">
                    <div class="sDiv2">
                        <input type="text" size="30" name="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" class="qsbox" placeholder="名称搜索...">
                        <input type="submit" class="btn" value="搜索">
                    </div>
                    <div class="sDiv2">
                        <input type="button" class="btn" value="重置" onClick="window.location.href='<?php echo U('AdPosition/index'); ?>';">
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
                            <div class="tc">ID</div>
                        </th>
                        <th abbr="article_title" axis="col3" class="w160">
                            <div class="tl">广告位名称</div>
                        </th>
                        <th abbr="article_title" axis="col3" class="w60">
                            <div class="tc">宽度</div>
                        </th>
                        <th abbr="article_title" axis="col3" class="w60">
                            <div class="tc">高度</div>
                        </th>
                        <th abbr="article_title" axis="col3">
                            <div class="tl" style="padding-left: 10px;">描述</div>
                        </th>
                        <th abbr="article_title" axis="col3" class="w80">
                            <div class="tc">已有广告</div>
                        </th>
                        <th axis="col1" class="w250">
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
                                <div class="w40 tc"><input type="checkbox" name="ids[]" value="<?php echo $vo['id']; ?>"></div>
                            </td>
                            <td class="">
                                <div class="w40 tc">
                                    <?php echo $vo['id']; ?>
                                </div>
                            </td>
                            <td align="left" class="">
                                <div class="w160 tl">
                                    <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?>
                                    <a href="<?php echo U('AdPosition/edit',array('id'=>$vo['id'])); ?>"><?php echo $vo['title']; ?></a>
                                    <?php else: ?>
                                    <?php echo $vo['title']; endif; ?>
                                </div>
                            </td>
                            <td align="left" class="">
                                <div class="w60 tc">
                                    <?php echo $vo['width']; ?>
                                </div>
                            </td>
                            <td align="center" class="">
                                <div class="w60 tc">
                                    <?php echo $vo['height']; ?>
                                </div>
                            </td>
                            <td style="width: 100%">
                                <div class="tl" style="padding-left: 10px;">
                                    <?php echo $vo['intro']; ?>
                                </div>
                            </td>
                            <td>
                                <div class="tc w80">
                                    <?php echo (isset($ad_list[$vo['id']]['has_children']) && ($ad_list[$vo['id']]['has_children'] !== '')?$ad_list[$vo['id']]['has_children']:'0'); ?>
                                </div>
                            </td>
                            <td class="">
                                <div class="w250 tc">
                                    <a class="btn blue" href="<?php echo U('Other/index',array('pid'=>$vo['id'])); ?>"><i class="fa fa-search"></i>查看</a>
                                    <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?>
                                    <a href="<?php echo U('AdPosition/edit',array('id'=>$vo['id'])); ?>" class="btn blue"><i class="fa fa-pencil-square-o"></i>编辑</a>
                                    <?php endif; if(is_check_access(CONTROLLER_NAME.'@del') == '1'): ?>
                                    <a class="btn red"  href="javascript:void(0);" data-url="<?php echo U('AdPosition/del'); ?>" data-id="<?php echo $vo['id']; ?>" onClick="delfun(this);"><i class="fa fa-trash-o"></i>删除</a>
                                    <?php endif; ?>
                                    <a class="btn blue" href="javascript:void(0);" onclick="copyToClipBoard(<?php echo $vo['id']; ?>, 1)">标签调用</a>
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
                    <a onclick="batch_del(this, 'ids');" data-url="<?php echo U('AdPosition/del'); ?>">
                        <div class="add" title="批量删除">
                            <span><i class="fa fa-close"></i>批量删除</span>
                        </div>
                    </a>
                </div>
                <?php endif; if(is_check_access(CONTROLLER_NAME.'@add') == '1'): ?>
                <div class="fbutton">
                    <a href="<?php echo U('AdPosition/add'); ?>">
                        <div class="add" title="新增广告位">
                            <span class="red"><i class="fa fa-plus"></i>新增广告位</span>
                        </div>
                    </a>
                </div>
                <?php endif; ?>
            </div>
            <div style="clear:both"></div>
        </div>
        <!--分页位置-->
        <?php echo $page; ?>
    </div>
</div>
<script>
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

    /**
     * 代码调用js
     * @param id  id
     * @param limit 条数
     */
    function copyToClipBoard(id, limit) {
      var advstr = "{eyou:adv pid='" + id + "' row='" + limit + "'}\r\n   <img src='{$"+"field.litpic}' alt='{$"+"field.title}' />\r\n{/eyou:adv";
      var contentdiv = '<div class="dialog_content" style="margin: 0px; padding: 0px;"><dl style="padding:10px 30px;line-height:30px"><dd>标签 adv 调用：</dd>'
      contentdiv += '<textarea rows="4" cols="60" style="width:400px;height:60px;">' + advstr + '}</textarea>'
      contentdiv += '<dd>JavaScript：</dd>'
      contentdiv += '<dd><input type="text" style=" width:400px;" value="<script type=&quot;text/javascript&quot; src=&quot;http://' + '<?php echo \think\Request::instance()->server('http_host'); ?>' + '/index.php?m=api&amp;c=Other&amp;a=other_show&amp;pid=' + id + '&amp;row='+limit+'&quot;><\/script>"></dd>'
      contentdiv += '<dd style="border-top: dotted 1px #E7E7E7; color: #F60;">请将标签adv或JavaScript代码复制并粘贴到对应模板文件中！</dd></dl></div>'
      layer.open({
        title: '代码调用',
        type: 1,
        skin: 'layui-layer-demo',
        area: ['480px', '280px'], //宽高
        content: contentdiv
      });
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