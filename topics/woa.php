
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <title>微信生意宝-微网站,微信网站专业开发商,微信营销领先品牌</title>
    <meta name="keywords" content="微信生意宝,微网站,微信营销,微网站开发,微网站代理,微网站制作,微信网站,微信3G网站,微信APP,企业微信,企业微网站,微信公众号,微信互动">
    <meta name="description" content="微信生意宝是由杭州微巴信息技术有限公司研发的一款基于微信营销的产品，可以帮助企业快速通过微信获得生意，推广企业品牌。">
    <link rel="stylesheet" type="text/css" href="http://www.weiba66.com/app/modules/pc/assets/css/base.css">
    <link rel="stylesheet" type="text/css" href="http://www.weiba66.com/app/modules/pc/assets/css/common.css">
    <script type="text/javascript" src="http://www.weiba66.com/app/modules/pc/assets/js/jquery.min.js"></script>
    <style type="text/css">
        <!--
        .lr_servkind_tr1 {}
        .lr_servkind_tr2 {background-color: #e6e6e6;}
        .lr_servkind_online {COLOR: red;}
        .lr_servkind_away {COLOR: blue;}
        .lr_servkind_busy {COLOR: purple;}
        .lr_servkind_offline {COLOR: gray;}
        .lr_servkind {margin-left:15px;font-size: 9pt;}
        -->
    </style>
</head>
<body>
<!-- <div class='test'>1</div> -->
<?php include_once("../nav.php")?>
<link rel='stylesheet' href='http://www.weiba66.com/zt/woa//css/index.css'>
<div class="main">
    <div class="woa woa_01"> <img src="http://www.weiba66.com/zt/woa//images/top_01.jpg"><img src="http://www.weiba66.com/zt/woa//images/top_02.jpg">
        <div class="top_fu"> <img src="http://www.weiba66.com/zt/woa//images/top_fu.png"> <a href="/apply.php" target="_blank">&nbsp;</a> </div>
    </div>
    <div class="woa woa_02"> <img src="http://www.weiba66.com/zt/woa//images/top_03_01.jpg"><img src="http://www.weiba66.com/zt/woa//images/top_03_02.jpg"> <a href="/topics/qiyeweixin.php" target="_blank">&nbsp;</a> </div>
    <div class="woa woa_03"> <img src="http://www.weiba66.com/zt/woa//images/top_04.jpg">
        <div class="woa_03_c">
            <div class="top_7dgn"><img src="http://www.weiba66.com/zt/woa//images/top_7dgn.png"></div>
            <ul class="gn_ul">
                <li class="dq">1<img src="http://www.weiba66.com/zt/woa//images/jt.jpg"></li>
                <li>2<img src="http://www.weiba66.com/zt/woa//images/jt.jpg"></li>
                <li>3<img src="http://www.weiba66.com/zt/woa//images/jt.jpg"></li>
                <li>4<img src="http://www.weiba66.com/zt/woa//images/jt.jpg"></li>
                <li>5<img src="http://www.weiba66.com/zt/woa//images/jt.jpg"></li>
                <li>6<img src="http://www.weiba66.com/zt/woa//images/jt.jpg"></li>
                <li>7<img src="http://www.weiba66.com/zt/woa//images/jt.jpg"></li>
            </ul>
            <div class="zstx">
                <p class="dq">员工身份识别，微信设置员工权限</p>
                <p>员工通讯录，强大到没朋友</p>
                <p>微信即时通知，信息直达、更高效</p>
                <p>员工一键签到签退，打卡记录在线汇总</p>
                <p>企业OA入口，工单事项随时发起</p>
                <p>自定义模块管理，更多工单模块自由添加</p>
                <p>消息推送不限次数，突破48小时活跃限制</p>
            </div>
            <div class="gn_img"> <img class="dq" src="http://www.weiba66.com/zt/woa//images/gn_img_01.jpg"> <img src="http://www.weiba66.com/zt/woa//images/gn_img_02.jpg"> <img src="http://www.weiba66.com/zt/woa//images/gn_img_03.jpg"> <img src="http://www.weiba66.com/zt/woa//images/gn_img_04.jpg"> <img src="http://www.weiba66.com/zt/woa//images/gn_img_05.jpg"> <img src="http://www.weiba66.com/zt/woa//images/gn_img_06.jpg"> <img src="http://www.weiba66.com/zt/woa//images/gn_img_07.jpg"> </div>
        </div>
        <img src="http://www.weiba66.com/zt/woa//images/bottom1.jpg"></div>
</div>
<script>
    $(document).ready(function(){
        var myLi = $(".gn_ul > li");
        var myDiv = $(".gn_img > img");
        var myzstx = $(".zstx > p");

        myLi.each(function(i){
            $(this).mouseover(function(){
                myLi.removeClass("dq");
                $(this).addClass("dq");
                myDiv.removeClass("dq");
                myDiv.eq(i).addClass("dq");
                myzstx.removeClass("dq");
                myzstx.eq(i).addClass("dq");
            });
        });
    });
</script>
<?php include_once("../footer.php")?>









<!--
<script language="javascript" src="http://dbt.zoosnet.net/LR/servkind.aspx?id=DBT53393103"></script>
<script language=javascript>
//请修改以下参数
var LiveReceptionCode_ToRight=0;
//说明：浮动图标的水平方向对齐方式，1为右对齐，0为左对齐；
var LiveReceptionCode_helpimgleft=0;
//说明：浮动图标的水平方向的边距；
var LiveReceptionCode_ToBottom=0;
//说明：浮动图标的垂直方向对齐方式，1为底部对齐，0为顶部对齐；
var LiveReceptionCode_helpimgtop=150;
//说明：浮动图标的垂直方向的边距；
var LR_List_w=140;  //列表框的宽度，需要和三张图片的宽度一致[像素]
var LR_List_left=10;  //列表框中部里面文字距离左边的距离[像素]
var LR_List_lineheight=19;  //列表框中部里面文字的行高[像素]
var LR_List_upimg='http://dbt.zoosnet.net/LR/olistimg/up.gif';//列表框顶部的图片网址
var LR_List_downimg='http://dbt.zoosnet.net/LR/olistimg/down.gif';//列表框底部的图片网址
var LR_List_bgimg='http://dbt.zoosnet.net/LR/olistimg/middle.gif';//列表框中部的平铺背景图片

//请修改下面的代码里的文本内容，如 "在线" "繁忙"  等
function outputServKindlist(name,id,state)
{
	if(state>=3)
	{
		return '<tr><td height="'+LR_List_lineheight+'"></td><td>'+unescape(name.replace(/\+/g,'%20'))+' [<a href="javascript:openZoosWindow_olist(\'chatwin\',\'&skid='+id+'&sk='+name+'&e='+name+'\')" target="_self"><font style="FONT-SIZE: 12px;COLOR: red;">在线</font></a>]</td></tr>';
	}
	else if(state==2)
	{
		return '<tr><td height="'+LR_List_lineheight+'"></td><td>'+unescape(name.replace(/\+/g,'%20'))+' [<a href="javascript:void(0)"  onclick="return false;" target="_self"><font style="FONT-SIZE: 12px;COLOR: purple;" onclick=openZoosWindow_olist(\'sendnote\',\'&skid=' + id + '&sk=' + name + '&e=' + name + '\')>繁忙</font></a>]</td></tr>';
	}
	else if(state==1)
	{
		return '<tr><td height="'+LR_List_lineheight+'"></td><td>'+unescape(name.replace(/\+/g,'%20'))+' [<a href="javascript:void(0)"  onclick="return false;" target="_self"><font style="FONT-SIZE: 12px;COLOR: blue;" onclick=openZoosWindow_olist(\'sendnote\',\'&skid=' + id + '&sk=' + name + '&e=' + name + '\')>离开</font></a>]</td></tr>';
	}
	else if(state==0)
	{
		return '<tr><td height="'+LR_List_lineheight+'"></td><td>'+unescape(name.replace(/\+/g,'%20'))+' [<a href="javascript:void(0)"  onclick="return false;" target="_self"><font style="FONT-SIZE: 12px;COLOR: gray;" onclick=openZoosWindow_olist(\'sendnote\',\'&skid=' + id + '&sk=' + name + '&e=' + name + '\')>离线</font></a>]</td></tr>';
	}
}

//以下不要修改
var LiveReceptionCode_need_help_html='<table width="'+LR_List_w+'" border="0" cellpadding="0" cellspacing="0"><tr><td><img src="'+LR_List_upimg+'" width="'+LR_List_w+'" id="LiveReceptionCode_need_help" name="LiveReceptionCode_need_help"/></td></tr><tr><td style="background:url('+LR_List_bgimg+')"><table width="140" border="0" cellspacing="0" cellpadding="0"><tr><td width="'+LR_List_left+'" height="0"></td><td></td></tr>';
if(typeof(ServerKindArray) != 'undefined')
{
	
	for(i=0;i<ServerKindArray.length;i++)
	{
		LiveReceptionCode_need_help_html+=outputServKindlist(ServerKindArray[i].name,ServerKindArray[i].id,ServerKindArray[i].state);
	}
}
LiveReceptionCode_need_help_html+='</table></td></tr><tr><td><img src="'+LR_List_downimg+'"  width="'+LR_List_w+'" /></td></tr></table>';

</script>
<script language="javascript" src="http://dbt.zoosnet.net/JS/LsJS.aspx?siteid=DBT53393103"></script>
-->
</body>
</html>