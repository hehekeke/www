
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit">
<title>酒店预约</title>
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
<?php  include_once "../nav.php" ?>

<script>
    $(function(){
        $('#nav>ul>li').hover(function(){
            $(this).addClass('active')
            $(this).find('.sun_list').show();
        },function(){
            $(this).removeClass('active')
            $(this).find('.sun_list').hide();
        });
    })
</script>
<link href="http://www.weiba66.com/zt/hotel/css/ydf.css" rel="stylesheet">
<link href="http://www.weiba66.com/zt/hotel/css/reset.css" rel="stylesheet">
<div class="box-1"></div>
<div class="box-2"></div>
<div class="box-3"></div>
<div class="box-4"></div>
<div class="box-5"></div>
<div class="box-6">
    <div>
        <a class="a1" href="javascript:;"></a>
        <a class="a2" href="javascript:;"></a>
        <a class="a3" href="javascript:;"></a>
        <a class="a4" href="javascript:;"></a>
        <div class="alert-content-1">
            <a class="close" href="javascript:;"></a>
        </div>
    </div>
</div>
<div class="apply">
    <a href="/apply.html?from_site=hotel"></a>
</div>
<div class="sao">
    <a href="/apply.html?from_site=hotel"></a>
</div>
<div class="mask"></div>
<script>
    $(".box-6 > div > a").each(function (i) {
        $(this).on("mouseover", function () {
            $(".mask").css("display", "block");
            $(".alert-content-1").css("backgroundImage", "url(http://www.weiba66.com/zt/hotel/images/a" + (i + 1) + ".jpg)").css("display", "block");
            $(".mask").css("height", (document.documentElement.scrollHeight ? document.documentElement.scrollHeight : document.body.scrollHeight) + "px");
        });
    });

    $(".close").on("click", function () {
        $(".alert-content-1").css("display", "none");
        $(".mask").css("display", "none");
    });

    $(".mask").on("click", function () {
        $(this).css("display", "none");
        $(".alert-content-1").css("display", "none");
    });
</script>
<?php  include_once "../footer.php" ?>
</body>
</html>