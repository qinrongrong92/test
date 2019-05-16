<?php /*a:1:{s:58:"D:\wamp64\www\tp5.1\application\admin\view\index\test.html";i:1557907505;}*/ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
      <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
  <link href="http://www.jq22.com/jquery/font-awesome.4.6.0.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="/static/admin/css/sidebar-menu.css">
  <link rel="stylesheet" href="/static/admin/css/style.css">
  <script src="/static/admin/js/jquery.min.js"></script>
  <script src="/static/admin/js/sidebar-menu.js"></script>
  <script src="/static/admin/js/vue.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  <script src="/static/admin/js/pagination.js"></script>
        <style type="text/css">
            .main-sidebar{
            position: absolute;
            top: 0;
            left: 0;
            height: 100vh;
            min-height: 100%;
            width: 230px;
            z-index: 810;
            background-color: #222d32;
        }
            .iframe_main {
                display: block; /* iframes are inline by default */
                border: none; /* Reset default border */
                height: 100vh; /* Viewport-relative units */
                width: 100%;
                float: right;
            }
        </style>
    </head>

    <body>
         <!--主体内容部分-->
    <div class="main">
       <!-- 左侧导航 -->
       <div class="main-sidebar">
            <section  class="sidebar">
                <ul class="sidebar-menu">
                    <li class="treeview" >
                        <a data-src="../admin/horseman/horseman">
                          <span>骑手管理</span> 
                          <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                          <li><a data-src="../admin/horseman/horseman">全部 </a></li>

                            <?php if(is_array($area) || $area instanceof \think\Collection || $area instanceof \think\Paginator): $i = 0; $__LIST__ = $area;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                 <li><a data-src="../admin/horseman/horseman?area=<?php echo htmlentities($vo['name']); ?>" id='area'> <?php echo htmlentities($vo['name_cn']); ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a data-src="../admin/order/order">
                          <span>订单管理</span> 
                          <i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                          <li><a data-src="../admin/order/order">全部 </a></li>
                            <?php if(is_array($area) || $area instanceof \think\Collection || $area instanceof \think\Paginator): $i = 0; $__LIST__ = $area;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                 <li><a data-src="../admin/order/order?area=<?php echo htmlentities($vo['id']); ?>" id='area'> <?php echo htmlentities($vo['name_cn']); ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a data-src="../admin/apply/apply">
                          <span>应用管理</span> 
                        </a>
                    </li>
                    <li class="treeview">
                        <a data-src="../admin/administrator/administrator">
                          <span>管理员管理</span> 
                        </a>
                    </li>
                </ul>
            </section>
            <div class="withdraw" >
               <a class="btn btn-default" id='search' name='search' href = "<?php echo url('login/logout'); ?>">退出登录</a>
               
            </div>
        </div>

        <!-- 右侧内容 -->
        <div class="content">
            <iframe class="iframe_main" frameborder="0" scrolling="no" src="" id="main"></iframe>
        </div>
    </div>

<script type="text/javascript">
    $(function(){
       $(".sidebar-menu a").on("click",function(){
             var address =$(this).attr("data-src");
          $("iframe").attr("src",address);
       });
    });
    $.sidebarMenu($('.sidebar-menu'));
</script>
</html>