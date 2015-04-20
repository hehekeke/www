
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <title>微助力</title>
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
<link href="http://www.weiba66.com/zt/weizhuli/css/index.css" type="text/css" rel="stylesheet" rev="stylesheet">
<div class="banner_1"></div>
<div class="banner_2"></div>
<div class="top_box_box">
    <img src="http://www.weiba66.com/zt/weizhuli/images/top2.jpg">
</div>
<div class="top_box_box">
    <img src="http://www.weiba66.com/zt/weizhuli/images/content_cen.jpg">
</div>
<div class="content_box_box">
    <img src="http://www.weiba66.com/zt/weizhuli/images/content_2.gif">
</div>
<div class="anli1">
    <div class="anli1_start">
        <h2 class="titel_h2">已有<span id="getnumber">10375</span>家商户参与此活动，更有<em>英菲尼迪、苏宁、青年时报</em>等大牌纷至沓来</h2>
        <img src="http://www.weiba66.com/zt/weizhuli/images/anli1.jpg">
    </div>
</div>
<div class="anli2">
    <div class="anli1_start">
        <h2 class="titel_h2">已有<span class="getnumber">10,000,758</span>的用户参与助力活动，一发不可收拾</h2>
        <img src="http://www.weiba66.com/zt/weizhuli/images/anli2.jpg">
    </div>
</div>
<div class="dibu_foot">
    <div class="ztkefu clearfix">
        <div class="ztkefu-t"></div>
        <div class="ztkefu-c clearfix">
            <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2355824320&amp;site=qq&amp;menu=yes" target="_blank"
               onClick="ga('send', 'event', 'TopicAdvisory', 'TopicQQ','专题售前');" class="clearfix">
                <span class="name">岚岚</span>
                <span class="icon"></span>
            </a>
            <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2355487985&amp;site=qq&amp;menu=yes" target="_blank"
               onClick="ga('send', 'event', 'TopicAdvisory', 'TopicQQ','专题售前');" class="clearfix">
                <span class="name">小星</span>
                <span class="icon"></span>
            </a>
            <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2355742806&amp;site=qq&amp;menu=yes" target="_blank"
               onClick="ga('send', 'event', 'TopicAdvisory', 'TopicQQ','专题售前');" class="clearfix">
                <span class="name">小单</span>
                <span class="icon"></span>
            </a>
            <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2355487987&amp;site=qq&amp;menu=yes" target="_blank"
               onClick="ga('send', 'event', 'TopicAdvisory', 'TopicQQ','专题售前');" class="clearfix">
                <span class="name">小芳</span>
                <span class="icon"></span>
            </a>
        </div>
    </div>
</div>
<script type="text/javascript">
    function fnumber(s, n)
    {
        n = n > 0 && n <= 20 ? n : 2;
        s = parseFloat((s + "").replace(/[^\d\.-]/g, "")).toFixed(n) + "";
        var l = s.split(".")[0].split("").reverse(),
            r = s.split(".")[1];
        t = "";
        for(i = 0; i < l.length; i ++ )
        {
            t += l[i] + ((i + 1) % 3 == 0 && (i + 1) != l.length ? "," : "");
        }
        return t.split("").reverse().join("") + "." + r;
    }
    var date1=new Date(2014,11,11,00);  //开始时间
    var date2=new Date();    //结束时间
    var date4=new Date(date2.getFullYear(),parseInt(parseInt(date2.getMonth())+1),date2.getDate(),00);    //结束时间
    var date3=date4.getTime()-date1.getTime() //时间差的毫秒数
    //计算出相差天数
    var days=Math.floor(date3/(24*3600*1000));
    number = fnumber(parseInt(10000758+days*10),3).toString();
    number2 = fnumber(parseInt(10375+days*10),3).toString();
    $('.getnumber').html(number.replace(".000",''));
    $('#getnumber').html(number2.replace(".000",''));
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