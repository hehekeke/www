<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="/res/lib/css/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="/res/lib/css/themes/icon.css">
<link rel="stylesheet" type="text/css" href="/res/lib/css/main.css">
<script type="text/javascript" src="/res/lib/jquery/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="/res/lib/js/jquery.easyui.min.js"></script>
<script type="text/javascript" src="/res/lib/js/easyui-lang-zh_CN.js"></script>
  <link href="/res/lib/ligerUI/skins/Aqua/css/ligerui-all.css" rel="stylesheet" type="text/css" /> 
    <script src="/res/lib/ligerUI/js/ligerui.min.js" type="text/javascript"></script> 
<style type="text/css">
.ll {
	display: block
	line-height: 22px;
	height: 22px;
	border: 1px solid white;	
	margin-top:5px;
	margin-bottom:5px;
	cursor: pointer;
	font-size: 17px;
	color: blue;
	padding-left: 20px;
}

.ll:hover {
	background: #FFEEAC;
	border: 1px solid #DB9F00;
	margin-left: 10px;
	margin-right: 10px;
	padding-left: 10px;
}

body {
	font-weight: normal;
	color: #fff;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	font-family: Microsoft YaHei, Lucida Grande, "微软雅黑";
	font-size: 12px;
}

a,a:hover {
	color: #A60004;
	text-decoration: none;
}

a,a:hover,.tingico {
	-webkit-transition: all 0.25s linear 0.01s;
	-moz-transition: all 0.25s linear 0.01s;
	-ms-transition: all 0.25s linear 0.01s;
	-o-transition: all 0.25s linear 0.01s;
	transition: all 0.25s linear 0.01s;
}

.top {
	height: 80px;
	background-color: #F0F0F0;
	width: 100%;
	min-width: 1150px;
	box-shadow: 0px 5px 5px #CCC;
	border-bottom: 1px solid #dfdfdf;
	background-image: url(<%=basePath %>lib/images/head.gif);
	background-repeat: repeat-x;
}
</style>
<script type="text/javascript">
	/*
	* view(url) 在layout中打开页面
	*/
	function view(url){
		$('#iframe').attr('src',url);
	}	
	/*
	*添加选项卡方法
	*/
	function addTab(title,url){
		//先判断是否存在标题为title的选项卡
		var tab=$('#tt').tabs('exists',title);
		if(tab){
			//若存在，则直接打开
			$('#tt').tabs('select',title);
		}else{
			//否则创建
			$('#tt').tabs('add',{
				title:title,
				content:"<iframe width='100%' height='100%'  id='iframe' frameborder='0' scrolling='auto'  src='"+url+"'></iframe>",
				closable:true
			});
		}	
	}
	function closeTab(subtitle){       
	 $('#tt').tabs('close', subtitle);//subtitle为选项卡的标题
	 }
	/*
	*根据title,选中Accordion对应的面板
	*/
	function selectAccordion(title){
		$('#accordionPanel').accordion('select',title);
	}	
	/*
	*刷新时间
	*/
	function showTime(){
		var date=new Date();
		$('#timeInfo').html();
		$('#timeInfo').html(date.toLocaleDateString());     
	}
	
	/*
	*检测浏览器窗口大小改变,来改变页面layout大小
	*/
	$(function(){
		$(window).resize(function(){
			$('#cc').layout('resize');
		});
	});	
	function pwdupdate(){
	  addTab('修改密码', '${pageContext.request.contextPath}/admin/user_updatepwd.action');
	}
</script>
</head>
<body style="border:none;visibility:visible;width: 100%;height: 100%;" onLoad="showTime();">
	<div id="cc" class="easyui-layout" style="width:100%;height:100%;">     <!-- fit="true"> -->
	
		<!-- 页面顶部top及菜单栏 -->  
	    <div region="north" style="height:85%;width: 100%;">
<div class="top">
	<div class="top_wrap">
    		<div class="top_logo"><img src="/res/lib/images/manage1.png" width="60" height="60"  /></div>
    		<div class="top_caption"><p style="color:black;font-size:15px;">启程管理系统</p><br /><p style="font-size:9px; margin-top:2px;color:black;">Student Management Center</p>
    		</div>
	    	<div style="padding-top:50px;float: right;padding-right: 20px">
					<span style="color:black ;font-size: 17px" id="timeInfo"></span>	&nbsp;&nbsp;
					<span style="color:black;font-size: 17px" >欢迎你</span>
					<a href="" style="font-size: 15px;text-decoration:none;padding-left: 15px;color:black;padding-right: 5px">
					注销</a><!-- |<a href="javascript:void(0)" onclick="pwdupdate();" style="font-size: 15px;text-decoration:none;color:#fff ">
					修改密码</a> -->
				</div>
	    </div>  
	    </div>
</div>
	    <!-- 页面底部信息 -->
	    <div region="south" style="height: 40px;" >
	    	<center>
	    	    <br/>
	    		<span><font color="black"> 版权所有©   </font><br> 
	    	</center>
	    </div>  
		<!-- 左侧导航菜单 -->	    
    <div region="west"  title="导航菜单栏" style="width:185px;"> <!-- 	split="true" -->
			<div class="easyui-accordion" fit="true" style="text-align: left;" id="accordionPanel">          
   	             <div title="用户管理">
                    <ul >                   
						<li class="ll" onClick="javascript:addTab('用户列表','/admin/index.php/Home/User/userinfo');"><img src="/res/lib/images/icon.png" style="height: 16px" />&nbsp;用户列表</li>					
					</ul>
					
   	            </div>
            	
			</div>	   
	    </div>  
	    <!-- 主显示区域选项卡界面 title="主显示区域"-->
	    <div region="center">
	    	<div class="easyui-tabs" fit="true" id="tt"> 
	    		<div title="主页">
	    			<iframe width='100%' height='100%'  id='iframe' frameborder='0' scrolling='auto'  src=''></iframe>
	    		</div>
	    	</div>
	    </div>  
	</div>
</body>
</html>