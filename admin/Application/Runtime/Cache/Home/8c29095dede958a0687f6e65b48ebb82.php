<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>用户登录</title>
<link rel="stylesheet" type="text/css"
	href="/res/lib/css/themes/default/easyui.css">
<link rel="stylesheet" type="text/css"
	href="/res/lib/css/themes/icon.css">
<link rel="stylesheet" type="text/css" href="/res/lib/css/main.css">
<script type="text/javascript" src="/res/lib/jquery/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="/res/lib/js/jquery.easyui.min.js"></script>
<script type="text/javascript">







</script>
</head>
<?php  @$username = $_POST['username']; @$password = $_POST['pwd']; @$admin_url = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/admin_index.php'; if(isset($_POST['submit'])){ if($username=="admin" && $password=="admin") { header('Location:'.$admin_url); } } ?>
<body  bgcolor="#D9ECFF"
	style="height: 100%; width: 100%; overflow: hidden; border: none; visibility: visible;">
	<div class="easyui-window"
		style="width: 500px; height: 300px; background: #fafafa; overflow: hidden"
		title="登录界面" border="false" resizable="false" draggable="false"
		minimizable="false" maximizable="false" closable="false" collapsible="false">
		<div class="header" style="height: 60px;">
			<div class="toptitle" style="margin-top: 20px;">启程管理系统</div>
		</div>
		<div style="font-size: 14px;color: red;padding-top: 10px" align="center"></div>
		<div style="padding: 30px 0;">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<div style="padding-left: 130px">
					<table cellpadding="0" cellspacing="3">
					    <tr></tr>
						<tr>
							<td>登录帐号</td>
							<td><input type="text" id="username" name="username" style="width: 120px" onFocus="nameFocus()" onBlur="nameBlur()" onkeydown= "if(event.keyCode==13)jump1()"></input></td>
							<td></td>
                            <td><div id="pro_name" style="font-size:12px; color:#FF0202;"></div></td>
						</tr>
						<tr>
							<td>登录密码</td>
							<td><input type="password" id="pwd"  name="pwd" style="width: 120px" onFocus="pwdFocus()" onBlur="pwdBlur()" onkeydown= "if(event.keyCode==13)jump2()"></input></td>
						    <td></td>
						    <td><div id="pro_pwd" style="font-size:12px; color:#FF0202;"></div></td>
						</tr>

						<tr>
					       
					        <td align="left"><div id="result2" style="color: red;"></div></td>
				        </tr>
						<tr>
							<td>&nbsp;</td>
							<td></td>
						</tr>

						<tr>
							<td></td>
							<td><input type="submit"  name="submit" value="登录" class="easyui-linkbutton" />
								<input type="reset" name="reset" value="重置" class="easyui-linkbutton" />
							</td>
						</tr>
					</table>
				</div>
			</form>
		</div>
	</div>
</body>
</html>