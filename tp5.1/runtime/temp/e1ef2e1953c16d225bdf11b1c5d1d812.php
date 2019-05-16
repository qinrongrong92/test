<?php /*a:1:{s:59:"D:\wamp64\www\tp5.1\application/admin/view\login\login.html";i:1557889950;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>登录</title>
	<link rel="stylesheet" href="/static/admin/css/bootstrap.min.css"/>
	<link href="/static/admin/css/style.css" rel="stylesheet">
	<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="/static/admin/js/bootstrap.min.js"></script>
</head>
<body class="register-style">
	<div class="container register-main">
		<div class="register-box">
			<div class="login-title">后台管理系统 | 用户登录</div>
			<form action="<?php echo url('login'); ?>" method="post" class="layui-form" id="larry_form">
			<div class="login-info">
				<div class="user-info">
					<input class="user-iocn" type="text" id="usname"  name="username"placeholder="请输入登录账号">
				</div>
				<div class="user-info">
					<input class="password-iocn" type="password" id="upass" name='password' placeholder="请输入密码">
				</div>
				<!--验证码开始-->
				<!-- <div class="verification-box">
					<div class="verification">
						<input class="verification-icon" type="text" id="upass" name='code'placeholder="请输入验证码">
					</div>
					<div id="checkCode" class="code"  onclick="createCode(4)" ></div>
				</div> -->

				 <div class="layui-form-item larry-verfiy-code" id="larry_code">
			 	   <input type="text" name="code" required lay-verify="required" aautocomplete="off" class="layui-input larry-input" placeholder="输入验证码">
			 	   <div><?php echo captcha_img(); ?></div>
			 	   <div class="code">
			 	   	   <div style="width: 270px; height: 55px;"><img src="<?php echo captcha_img(); ?>" onClick="this.src='<?php echo captcha_src(); ?>?'+Math.random();"  alt="captcha" style="width: 178px; height: 36px; padding: 1px 0px 0px 2px;"/></div>
			 	   </div>
			 </div>

				<!--验证码结束-->
				<div id="error_box" class="error_box"></div>
				<div class="forget-password"><a>忘记密码？</a></div>
				<div class="login-btn">
					<button onclick="fnLogin()">登录</button>
				</div>
			</div>
		</form>
			
		</div>
	</div>

<script type="text/javascript">
	function fnLogin(){
	var oUname = document.getElementById("uname");
	var oUpass = document.getElementById("upass");
	var oError = document.getElementById("error_box");
	var isNotError = true;

	if (oUname.value.length==' ' && oUpass.value.length==' ') 
	{
		oError.innerHTML = "*请输入账户名或密码";
		isNotError = false;
		return;
	}

	if(oUname.value.length > 20 || oUname.value.length < 5){
		oError.innerHTML = "*用户名长度必须在5~20位之间";
		isNotError = false;
		return;
		
	}else if(oUname.value.charCodeAt(0) >= 48 && oUname.value.charCodeAt(0) <= 57){
		oError.innerHTML = "*用户名开头不能为数字";
		isNotError = false;
		return;
	}else{
		for(var i=0; i<oUname.value.length; i++){
			if((oUname.value.charCodeAt(i) > 122 || oUname.value.charCodeAt(i) < 97) && (oUname.value.charCodeAt(i) > 57 || oUname.value.charCodeAt(i) < 48)){
				oError.innerHTML = "*用户名只能包含小写字母和数字";
				isNotError = false;
				return;
			}
		}
	}
	if(oUpass.value.length > 20 || oUpass.value.length < 6){
		oError.innerHTML = "*密码长度必须在6~20位之间";
		isNotError = false;
		return;
	}
	window.alert("登录成功");
	window.location.href='index.html';
}
</script>
</body>
</html>