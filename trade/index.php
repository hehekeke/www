
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <title>诺辉科技-微网站,微信网站专业开发商,微信营销领先品牌</title>
    <meta name="keywords" content="诺辉科技,微网站,微信营销,微网站开发,微网站代理,微网站制作,微信网站,微信3G网站,微信APP,企业微信,企业微网站,微信公众号,微信互动">
    <meta name="description" content="诺辉科技是由杭州微巴信息技术有限公司研发的一款基于微信营销的产品，可以帮助企业快速通过微信获得生意，推广企业品牌。">
    <link rel="stylesheet" type="text/css" href="http://www.weiba66.com/app/modules/pc/assets/css/base.css">
    <link rel="stylesheet" type="text/css" href="http://www.weiba66.com/app/modules/pc/assets/css/common.css">
    <script type="text/javascript" src="http://www.weiba66.com/app/modules/pc/assets/js/jquery.min.js"></script>
</head>


<style>
    .trade-banner {
        height: 299px;
        background: url(http://www.weiba66.com/zt/trade/images/trade-banner.jpg) no-repeat center;
    }


    .trade-wrap {
        width: 1150px;
        margin: 0 auto;
        text-align: center;
    }
    .trade-wrap h3 {
        margin-top: 50px;
        font-size: 30px;
    }
    .trade-list {
        margin-top: 30px;
        font-size: 0;
    }
    .trade-list li {
        display: inline-block;
        margin: 0 15px 15px 0;
        position: relative;
        overflow: hidden;
        font-size: 18px;
    }
    .trade-qrcode {
        width: 164px;
        padding: 15px;
        margin-left: -97px;
        position: absolute;
        bottom: -170px;
        left: 50%;
        opacity: 0.3;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
        -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
        background-color: #FFF;
    }
    .scan-code {
        margin-top: 15px;
    }
    .trade-title {
        position: relative;
        z-index: 3;
        line-height: 70px;
        color: #666;
        font-size: 26px;
        background-color: #F7F7F7;
    }
    .trade-tips {
        margin-top: 8px;
        color: #CCC;
        font-size: 14px;
        text-align: center;
    }
    .trade-more {
        margin-top: 10px;
        font-size: 18px;
    }
    .trade-mores {
        font-size: 28px;
    }
    .trade-apply {
        display: inline-block;
        width: 183px;
        height: 61px;
        margin: 20px 0 35px 0;
        background: url(http://www.weiba66.com/zt/trade/images/trade-apply.jpg) no-repeat center;
    }
</style>
<script>
    /**
     ***┏┓　　　┏┓
     *┏┛┻━━━┛┻┓
     *┃　　　　　　　┃ 　
     *┃　　　━　　　┃
     *┃　┳┛　┗┳　┃
     *┃　　　　　　　┃
     *┃　　　┻　　　┃
     *┃　　　　　　　┃
     *┗━┓　　　┏━┛
     *****┃　　　┃Code is far away from bug with the animal protecting.　　　　　　　　　　
     *****┃　　　┃神兽保护，代码无bug。
     *****┃　　　┗━━━┓
     *****┃　　　　　　　┣┓
     *****┃　　　　　　　┏┛
     *****┗┓┓┏━┳┓┏┛
     *******┃┫┫　┃┫┫
     *******┗┻┛　┗┻┛
     */

    $(document).ready(function () {

        $(".trade-list li").on("mouseenter", function () {
            $(this).children(".trade-qrcode").stop().animate({"bottom": "60px", "opacity": 1}, 300);
        });

        $(".trade-list li").on("mouseleave", function () {
            $(this).children(".trade-qrcode").stop().animate({"bottom": "-170px", "opacity": 0.3}, 300);
        });
    });
</script>
</head>

<body>
<?php include_once("../nav.php") ?>
<div class="trade-banner"></div>
<div class="trade-wrap">
    <h3>8大解决方案，直击行业痛点</h3>
    <p class="trade-tips">基于微信高级接口微巴研发众多创新应用，解决不同行业深度需求，</p>
    <p class="trade-tips">落地多行业“互联网+”成熟方案</p>
    <div class="trade-list">
        <ul>
            <li>
                <img src="http://www.weiba66.com/zt/trade/images/trade-1.jpg" width="266" />
                <div class="trade-qrcode">
                    <img src="http://www.weiba66.com/zt/trade/images/t-can.gif" width="170" />
                    <p class="scan-code">扫码了解详情</p>
                </div>
                <p class="trade-title">微餐厅</p>
            </li>
            <li>
                <img src="http://www.weiba66.com/zt/trade/images/trade-2.jpg" width="266" />
                <div class="trade-qrcode">
                    <img src="http://www.weiba66.com/zt/trade/images/t-fang.gif" width="170" />
                    <p class="scan-code">扫码了解详情</p>
                </div>
                <p class="trade-title">微房产</p>
            </li>
            <li>
                <img src="http://www.weiba66.com/zt/trade/images/trade-3.jpg" width="266" />
                <div class="trade-qrcode">
                    <img src="http://www.weiba66.com/zt/trade/images/t-hun.gif" width="170" />
                    <p class="scan-code">扫码了解详情</p>
                </div>
                <p class="trade-title">微婚庆</p>
            </li>
            <li>
                <img src="http://www.weiba66.com/zt/trade/images/trade-4.jpg" width="266" />
                <div class="trade-qrcode">
                    <img src="http://www.weiba66.com/zt/trade/images/t-jiu.gif" width="170" />
                    <p class="scan-code">扫码了解详情</p>
                </div>
                <p class="trade-title">微酒店</p>
            </li>
            <li>
                <img src="http://www.weiba66.com/zt/trade/images/trade-5.jpg" width="266" />
                <div class="trade-qrcode">
                    <img src="http://www.weiba66.com/zt/trade/images/t-xian.gif" width="170" />
                    <p class="scan-code">扫码了解详情</p>
                </div>
                <p class="trade-title">微零售</p>
            </li>
            <li>
                <img src="http://www.weiba66.com/zt/trade/images/trade-6.jpg" width="266" />
                <div class="trade-qrcode">
                    <img src="http://www.weiba66.com/zt/trade/images/t-yi.gif" width="170" />
                    <p class="scan-code">扫码了解详情</p>
                </div>
                <p class="trade-title">微医疗</p>
            </li>
            <li>
                <img src="http://www.weiba66.com/zt/trade/images/trade-7.jpg" width="266" />
                <div class="trade-qrcode">
                    <img src="http://www.weiba66.com/zt/trade/images/t-yidong.gif" width="170" />
                    <p class="scan-code">扫码了解详情</p>
                </div>
                <p class="trade-title">微电商</p>
            </li>
            <li>
                <img src="http://www.weiba66.com/zt/trade/images/trade-8.jpg" width="266" />
                <div class="trade-qrcode">
                    <img src="http://www.weiba66.com/zt/trade/images/t-lv.gif" width="170" />
                    <p class="scan-code">扫码了解详情</p>
                </div>
                <p class="trade-title">微旅游</p>
            </li>
        </ul>
    </div>
    <p class="trade-more">......</p>
    <p class="trade-mores">更多解决方案持续更新中</p>
    <a class="trade-apply" href="http://www.nuohuikeji.com/apply.php"></a>
</div>



<?php include_once("../footer.php") ?>

<!--请将以下码嵌入到您网页源代码的最后面，通常是</body></html>之后,这样在LR服务器升级维护的时候也不会影响您的网页打开呈现速度。-->
<!-- <script language="javascript" src="http://dbt.zoosnet.net/JS/LsJS.aspx?siteid=DBT53393103&float=1&lng=cn"></script> -->
</body>
</html>