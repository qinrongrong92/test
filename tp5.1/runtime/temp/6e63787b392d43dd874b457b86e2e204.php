<?php /*a:1:{s:58:"D:\wamp64\www\tp5.1\application/home/view\index\index.html";i:1557558506;}*/ ?>
<div>
<ul>
<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
    <li> <?php echo htmlentities($user['nickname']); ?></li>
<?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>
<?php echo $page; ?>