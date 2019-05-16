<?php /*a:1:{s:59:"D:\wamp64\www\tp5.1\application/admin/view\index\index.html";i:1557557315;}*/ ?>
<!DOCTYPE html>
<v_html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台管理</title>
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
	</style>
</head>
<body>
<aside class="main-sidebar">
	<section  class="sidebar">
		<ul class="sidebar-menu">
			<li class="treeview">
				<a data-id="rider_manage"  >
				  <!-- <img src="images/rider.png"> -->
				  <span>骑手管理</span> 
				  <i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
				  <li><a data-id="rider_all">全部 </a></li>
				  <li><a data-id="rider_all">城中区</a></li>
				  <li><a data-id="rider_all">柳北区</a></li>
				  <li><a data-id="rider_all">鱼峰区</a></li>
				  <li><a data-id="rider_all">柳南区</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a data-id="order_manage">
				  <span>订单管理</span> 
				  <i class="fa fa-angle-right pull-right"></i>
				</a>
				<ul class="treeview-menu">
				  <li><a data-id="order_all">全部 </a></li>
				  <li><a data-id="order_all">城中区</a></li>
				  <li><a data-id="order_all">柳北区</a></li>
				  <li><a data-id="order_all">鱼峰区</a></li>
				  <li><a data-id="order_all">柳南区</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a data-id="app_manage">
				  <span>应用管理</span> 
				</a>
			</li>
			<li class="treeview">
				<a data-id="admin_manage">
				  <span>管理员管理</span> 
				</a>
			</li>
		</ul>
	</section>
</aside>
<aside class="content">
</aside>



<script>
    $(function() {
        $(".sidebar-menu").on("click", "a", function() {
            var sId = $(this).data("id"); //获取data-id的值
            window.location.hash = sId; //设置锚点
            loadInner();
        });
    window.onload = loadInner;
        function loadInner() {
            var sId = window.location.hash;
            var pathn, i;
            switch(sId) {
                case "#rider_manage":
                    pathn = "../horseman/horseman.html";
                    i = 0;
                    break;
                case "#order_manage":
                    pathn = "../order/order.html";
                    i = 1;
                    break;
                case "#app_manage":
                    pathn = "../apply/apply.html";
                    i = 2;
                    break;
                case "#admin_manage":
                    pathn = "../administrator/administrator.html";
                    i = 3;
                    break;
               	case "#rider_all":
	                pathn = "../horseman/riderManagement.html";
	                i = 4;
	                break;
	            case "#order_all":
	                pathn = "../order/orderManagement.html";
	                i = 5;
	                break;
                default:
                    pathn = "../horseman/riderManagement.html";
                    i = 0;
                    break;
            }

            $(".content").load(pathn); //加载相对应的内容
            $(".sidebar-menu li").eq(i).addClass("current").siblings().removeClass("current"); //当前列表高亮
        }
        var sId = window.location.hash;
        // loadInner();
    });
</script>
<script>
$.sidebarMenu($('.sidebar-menu'));
</script>
</body>
</html>