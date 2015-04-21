
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="app案例,app开发案例,商城app案例,企业app案例,微信商城案例" />
    <meta name="description" content="互联在线拥有多年的app和微信商城开发经验,为数万家企业用户提供app解决方案,囊括了各种行业的app、微商城开发案例.横跨HTML5、Android、IOS多个开发领域" />
    <title>APP案例展示,微商城案例,微信商城案例-互联在线O2O商城云平台</title>
    <link href="http://www.ichina.cn/css/style.css?2013" rel="stylesheet" type="text/css" />
    <link href="http://www.ichina.cn/css/style_index.css?2013" rel="stylesheet" type="text/css" />
    <link href="http://www.ichina.cn/css/base.css" rel="stylesheet" type="text/css" />
    <link href="http://www.ichina.cn/css/case_tes.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="http://www.ichina.cn/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="http://www.ichina.cn/js/base.js"></script>
    <script type="text/javascript" src="http://www.ichina.cn/js/index.js?2013"></script>
    <script type="text/javascript" src="http://www.ichina.cn/js/case_tes.js?2015"></script>
    <link rel="stylesheet" type="text/css" href="http://www.weiba66.com/app/modules/pc/assets/css/base.css">
    <link rel="stylesheet" type="text/css" href="http://www.weiba66.com/app/modules/pc/assets/css/common.css">
    <!--[if lte IE 6]>
    <script type="text/javascript" src="js/all.js"></script>
    <script type="text/javascript" src="js/png.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a,span');
    </script>
    <![endif]-->

</head>
<body>
<?php include_once("nav.php")?>


<script type="text/javascript">
    $(document).ready(function() {
        $(".goods-detail-tab div").mousemove(function(e) {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
            var datas = $(this).attr("data");
            $(".tab-" + datas).siblings().removeClass('active');
            $(".tab-" + datas).addClass('active');
        });

        var ie6 = /msie 6/i.test(navigator.userAgent)
            , dv = $('#fixedMenu'), st;
        dv.attr('otop', dv.offset().top); //存储原来的距离顶部的距离
        $(window).scroll(function () {
            st = Math.max(document.body.scrollTop || document.documentElement.scrollTop);
            if (st >= parseInt(dv.attr('otop'))) {
                if (ie6) {//IE6不支持fixed属性，所以只能靠设置position为absolute和top实现此效果
                    dv.css({ position: 'absolute', top: st });
                }
                else if (dv.css('position') != 'fixed') dv.css({ 'position': 'fixed', top: '60px','background': 'white' });
            } else if (dv.css('position') != 'relative') dv.css({ 'position': 'relative',top: '50%','background': 'none' });
        });

    });
</script>

<!--切换star-->
<div class="ren-banner">
</div>
<div class="changer">
    <div class="ccenter" id="fixedMenu">
        <div class="ccenter_content">
            <div class="nav_box">
                <ul class="nav_ul">
                    <!--<li class="neirong_li"><a class="case_special nav_first hot" href="#hot">热门</a></li>-->
                    <li class="neirong_li"><a class="case_special nav_first fashion" href="#fashion">时尚购物</a></li>
                    <li class="neirong_li"><a class="normal store" href="#store">百货商城</a></li>
                    <li class="neirong_li normal"><a class="normal suit-dress" href="#suit-dress">时尚女装</a></li>
                    <li class="neirong_li normal"><a class="normal furniture" href="#furniture">家具装饰</a></li>
                    <li class="neirong_li normal"><a class="normal realty" href="#realty">房地产</a></li>
                    <!--<li class="neirong_li normal"><a class="normal housekeeping" href="#housekeeping">家政保洁</a></li>
                    <li class="neirong_li normal"><a class="normal travel" href="#travel">旅游酒店</a></li>-->
                    <li class="neirong_li normal"><a class="normal health" href="#health">健康保健</a></li>
                    <li class="neirong_li normal"><a class="normal education" href="#education">学校教育</a></li>
                    <li class="neirong_li normal"><a class="normal garden-stuff" href="#garden-stuff">果蔬食品</a></li>
                    <li class="neirong_li normal"><a class="normal car" href="#car">汽车美容</a></li>
                    <li class="neirong_li normal"><a class="normal tea" href="#tea">茗茶礼盒</a></li>
                    <li class="neirong_li normal"><a class="normal community" href="#community">小区服务</a></li>
                    <li class="neirong_li normal"><a class="normal news" href="#news">新闻资讯</a></li>
                    <li class="neirong_li normal"><a class="normal jewelry" href="#jewelry">珠宝彩妆</a></li>
                    <li class="neirong_li normal"><a class="normal science" href="#science">科技</a></li>
                </ul>
            </div>
            <div class="btns">
                <a href="javascript:;" class="next"></a>
                <a href="javascript:;" class="prev"></a>
            </div>
        </div>
    </div>
</div>
<!--切换开始-->

<!--中间HTML 5内容区开始-->
<div class="caseall">
<!--热门-->

<!--<div class="case_content" id="hot">
    <div class="h50"></div>
    <ul>
        <li><img src="http://www.ichina.cn/imagesanli/meiren.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">美人商城</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">为中高端女性客户打造包含美容 、美发、女装、艺术摄影、色彩 诊断、饰品一站式购买服务。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/meiren_html.png" /></div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/meiren_android.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/meiren_ios.png" width="50%"><p>Iphone</p></li>
                <!--     <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>公众号</p></li> -->
<!-- </ol>
</div>
</li>
<li><img src="http://www.ichina.cn/imagesanli/jiangshang.png" class="case_content_img"/>
<div class="goods-detail-tab clearfix" id="tabs"></div>
<div class="casewenzi">
 <p class="content_title">江商联盟</p>
 <p style="margin-top:0;">版本号：V1.0</p>
 <p style="margin-top:20px;font-size:14px;">绵阳网发科技有限公司是一家国家认证的科技型企业，公司主要从事电子产品的研发、销售，软件开发。</p>
</div>
<div class="ka ">
 <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/jiangshang_html.png" /> </div>

</div>
<div id="box" class="case_erweima_box">
 <ol>
     <li><img src="http://www.ichina.cn/imagesanli/jiangshang_html.png" width="50%"><p>HTML5</p></li>
     <li><img src="http://www.ichina.cn/imagesanli/jiangshang_android.png" width="50%"><p>Android</p></li>
 </ol>
</div>
</li>
<li><img src="http://www.ichina.cn/imagesanli/jingweikeji.png" class="case_content_img"/>
<div class="goods-detail-tab clearfix" id="tabs"></div>
<div class="casewenzi">
 <p class="content_title">精维科技</p>
 <p style="margin-top:0;">版本号：V1.0</p>
 <p style="margin-top:20px;font-size:14px;">精维科技是俄罗斯TechnoVector有限公司在华唯一直属分公司。</p>
</div>
<div class="ka">
 <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/jingweikeji_html.png" /> </div>
</div>
<div id="box" class="case_erweima_box">
 <ol>
     <li><img src="http://www.ichina.cn/imagesanli/jingweikeji_html.png" width="50%"><p>HTML5</p></li>
     <li><img src="http://www.ichina.cn/imagesanli/jingweikeji_android.png" width="50%"><p>Android</p></li>
     <li><img src="http://www.ichina.cn/imagesanli/jingweikeji_ios.png" width="50%"><p>Iphone</p></li>
 </ol>
</div>
</li>
<li><img src="http://www.ichina.cn/imagesanli/fenghuangzixun.png" class="case_content_img"/>
<div class="goods-detail-tab clearfix" id="tabs"></div>
<div class="casewenzi">
 <p class="content_title">凤凰资讯</p>
 <p style="margin-top:0;">版本号：V1.0</p>
 <p style="margin-top:20px;font-size:14px;">建立为广大消费者提供更为全面与丰富的生活资讯而打造的城市生活资讯APP。</p>
</div>
<div class="ka">
 <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/fenghuangzixun_html.png" /> </div>
</div>
<div id="box" class="case_erweima_box">
 <ol>
     <li><img src="http://www.ichina.cn/imagesanli/fenghuangzixun_html.png" width="50%"><p>HTML5</p></li>
     <li><img src="http://www.ichina.cn/imagesanli/fenghuangzixun_android.png" width="50%"><p>Android</p></li>
     <li><img src="http://www.ichina.cn/imagesanli/fenghuangzixun_ios.png" width="50%"><p>Iphone</p></li>
 </ol>
</div>
</li>
<li><img src="http://www.ichina.cn/imagesanli/zhengwang.png" class="case_content_img"/>
<div class="goods-detail-tab clearfix" id="tabs"></div>
<div class="casewenzi">
 <p class="content_title">正望O2O商城</p>
 <p style="margin-top:0;">版本号：V1.0</p>
 <p style="margin-top:20px;font-size:14px;">河源正望是代理、经销酒类品牌产品、天方牌茶叶和布达拉宫牌冬虫夏草贸易公司。</p>
</div>
<div class="ka">
 <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/zhengwang_html.png" /> </div>
</div>
<div id="box" class="case_erweima_box">
 <ol>
     <li><img src="http://www.ichina.cn/imagesanli/zhengwang_html.png" width="50%"><p>HTML5</p></li>
     <li><img src="http://www.ichina.cn/imagesanli/zhengwang_android.png" width="50%"><p>Android</p></li>
     <li><img src="http://www.ichina.cn/imagesanli/zhengwang_ios.png" width="50%"><p>Iphone</p></li>
 </ol>
</div>
</li>
<li><img src="http://www.ichina.cn/imagesanli/zhoudahang.png" class="case_content_img"/>
<div class="goods-detail-tab clearfix" id="tabs"></div>
<div class="casewenzi">
 <p class="content_title">周大行</p>
 <p style="margin-top:0;">版本号：V1.0</p>
 <p style="margin-top:20px;font-size:14px;">深圳市周大行珠宝公司主营GIA裸钻批发、成品镶嵌及钻饰定制等业务。</p>
</div>
<div class="ka">
 <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/zhoudahang_html.png" /> </div>
</div>
<div id="box" class="case_erweima_box">
 <ol>
     <li><img src="http://www.ichina.cn/imagesanli/zhoudahang_html.png" width="50%"><p>HTML5</p></li>
     <li><img src="http://www.ichina.cn/imagesanli/zhoudahang_android.png" width="50%"><p>Android</p></li>
 </ol>
</div>
</li>
<li><img src="http://www.ichina.cn/imagesanli/zhihuiguo.png" class="case_content_img"/>
<div class="goods-detail-tab clearfix" id="tabs"></div>
<div class="casewenzi">
 <p class="content_title">三峡智慧果</p>
 <p style="margin-top:0;">版本号：V1.0</p>
 <p style="margin-top:20px;font-size:14px;">打造三峡地区的水果、特产、饮料移动市场，整合三峡地区的资源，让消费者通过应用方便快捷的买到自己想要的商品。</p>
</div>
<div class="ka">
 <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/zhihuiguo_html.png"/> </div>
</div>
<div id="box" class="case_erweima_box">
 <ol>
     <li><img src="http://www.ichina.cn/imagesanli/zhihuiguo_html.png" width="50%"><p>HTML5</p></li>
     <li><img src="http://www.ichina.cn/imagesanli/zhihuiguo_android.png" width="50%"><p>Android</p></li>
     <li><img src="http://www.ichina.cn/imagesanli/zhihuiguo_ios.png" width="50%"><p>Iphone</p></li>
 </ol>
</div>
</li>
<li><img src="http://www.ichina.cn/imagesanli/yuanbenmu.png" class="case_content_img"/>
<div class="goods-detail-tab clearfix" id="tabs"></div>
<div class="casewenzi">
 <p class="content_title">元本木业</p>
 <p style="margin-top:0;">版本号：V1.0</p>
 <p style="margin-top:20px;font-size:14px;">元本木业，圣迪安地中海风格蓝白色调系列家私3D体验馆。O2O自助商城，优惠促销，好礼大放送！</p>
</div>
<div class="ka">
 <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/yuanbenmu_html.png"/> </div>
</div>
<div id="box" class="case_erweima_box">
 <ol>
     <li><img src="http://www.ichina.cn/imagesanli/yuanbenmu_html.png" width="50%"><p>HTML5</p></li>
     <li><img src="http://www.ichina.cn/imagesanli/yuanbenmu_andriod.png" width="50%"><p>Android</p></li>
     <li><img src="http://www.ichina.cn/imagesanli/yuanbenmu_ios.png" width="50%"><p>Iphone</p></li>
 </ol>
</div>
</li>
<li><img src="http://www.ichina.cn/imagesanli/yitengziyuan.png" class="case_content_img"/>
<div class="goods-detail-tab clearfix" id="tabs"></div>
<div class="casewenzi">
 <p class="content_title">伊藤资源</p>
 <p style="margin-top:0;">版本号：V1.0</p>
 <p style="margin-top:20px;font-size:14px;">成都伊藤资源藤器厂坐落于风景优美的成都市双流县，“西部藤编基地”九江镇。</p>
</div>
<div class="ka">
 <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/yitengziyuan_html.png"/> </div>
</div>
<div id="box" class="case_erweima_box">
 <ol>
     <li><img src="http://www.ichina.cn/imagesanli/yitengziyuan_html.png" width="50%"><p>HTML5</p></li>
     <li><img src="http://www.ichina.cn/imagesanli/yitengziyuan_android.png" width="50%"><p>Android</p></li>
     <li><img src="http://www.ichina.cn/imagesanli/yitengziyuan_ios.png" width="50%"><p>Iphone</p></li>
 </ol>
</div>
</li>
<li><img src="http://www.ichina.cn/imagesanli/xiaomaibu.png" class="case_content_img"/>
<div class="goods-detail-tab clearfix" id="tabs"></div>
<div class="casewenzi">
 <p class="content_title">小卖部</p>
 <p style="margin-top:0;">版本号：V1.0</p>
 <p style="margin-top:20px;font-size:14px;">专注电子新兴产品及热销产品，提供市场新出的产品供顾客选购（包括生活周边产品），帮顾客海外代购一些生活用品</p>
</div>
<div class="ka">
 <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/xiaomaibu_html.png"/> </div>
</div>
<div id="box" class="case_erweima_box">
 <ol>
     <li><img src="http://www.ichina.cn/imagesanli/xiaomaibu_html.png" width="50%"><p>HTML5</p></li>
     <li><img src="http://www.ichina.cn/imagesanli/xiaomaibu_android.png" width="50%"><p>Android</p></li>
 </ol>
</div>
</li>
<li><img src="http://www.ichina.cn/imagesanli/wanzi.png" class="case_content_img"/>
<div class="goods-detail-tab clearfix" id="tabs"></div>
<div class="casewenzi">
 <p class="content_title">丸子代购</p>
 <p style="margin-top:0;">版本号：V1.0</p>
 <p style="margin-top:20px;font-size:14px;">主要方向是国内多家品牌服装代购，全部经过店主的精心挑选，品质有保证。诚信经营，真诚服务。</p>
</div>
<div class="ka">
 <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/wanzi_html.png"/> </div>
</div>
<div id="box" class="case_erweima_box">
 <ol>
     <li><img src="http://www.ichina.cn/imagesanli/wanzi_html.png" width="50%"><p>HTML5</p></li>
     <li><img src="http://www.ichina.cn/imagesanli/wanzi_android.png" width="50%"><p>Android</p></li>
     <li><img src="http://www.ichina.cn/imagesanli/wanzi_ios.png" width="50%"><p>Iphone</p></li>
 </ol>
</div>
</li>
<li><img src="http://www.ichina.cn/imagesanli/simatuo.png" class="case_content_img"/>
<div class="goods-detail-tab clearfix" id="tabs"></div>
<div class="casewenzi">
 <p class="content_title">思玛拓商城</p>
 <p style="margin-top:0;">版本号：V1.0</p>
 <p style="margin-top:20px;font-size:14px;">江西思拓贸易有限公司专业从事连锁便利店管理及运营，目前旗下注册有思玛拓便利店(SmartStore)商标。</p>
</div>
<div class="ka">
 <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/simatuo_html.png"/> </div>
</div>
<div id="box" class="case_erweima_box">
 <ol>
     <li><img src="http://www.ichina.cn/imagesanli/simatuo_html.png" width="50%"><p>HTML5</p></li>
     <li><img src="http://www.ichina.cn/imagesanli/simatuo_android.png" width="50%"><p>Android</p></li>
 </ol>
</div>
</li>
</ul>
</div>-->
<!--ending 热门-->

<!--时尚购物-->
<div class="case_content" id="fashion">
    <div class="h50"></div>
    <ul>
        <li><img src="http://www.ichina.cn/imagesanli/meiren.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">美人商城</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">为中高端女性客户打造包含美容 、美发、女装、艺术摄影、色彩 诊断、饰品一站式购买服务。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/meiren_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/meiren_android.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/meiren_ios.png" width="50%"><p>Iphone</p></li>
                </ol>
            </div>
        </li>
        <li><img src="http://www.ichina.cn/imagesanli/shangjia.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">尚佳商城</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">立足本地区域，秉承互惠互利，合作共赢的原则，整合本地各方资源，建造属于本地人自己的互联网上商圈。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/shangjia_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/shangjia_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/shangjia_android.png" width="50%"><p>Android</p></li>
                    <!-- <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>公众号</p></li> -->
                </ol>
            </div>
        </li>
        <li><img src="http://www.ichina.cn/imagesanli/kantuan.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">砍团</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">砍团专门服务于大同本地商家和顾客的APP网上商城，主要提供本地购物、生活、家居、建材、旅游宣传、广告服务。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/kantuan_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/kantuan_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/kantuan_android.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/kantuan_ios.png" width="50%"><p>Iphone</p></li>
                </ol>
            </div>
        </li>
        <li><img src="http://www.ichina.cn/imagesanli/wanzi.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">丸子代购</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">主要方向是国内多家品牌服装代购，全部经过店主的精心挑选，品质有保证。诚信经营，真诚服务。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/wanzi_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/wanzi_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/wanzi_android.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/wanzi_ios.png" width="50%"><p>Iphone</p></li>
                </ol>
            </div>
        </li>
        <li><img src="http://www.ichina.cn/imagesanli/o2oshishang.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">o2o时尚</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">龍渊o2o时尚，以手机APP引领城市电子商务的线上线下服务，为消费者提供最便捷、安全的电子商务生活。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/o2oshishang_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/o2oshishang_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/o2oshishang_android.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/o2oshishang_ios.png" width="50%"><p>Iphone</p></li>
                </ol>
            </div>
        </li>
        <li><img src="http://www.ichina.cn/imagesanli/simatuo.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">思玛拓商城</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">江西思拓贸易有限公司专业从事连锁便利店管理及运营，目前旗下注册有思玛拓便利店(SmartStore)商标。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/simatuo_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/simatuo_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/simatuo_android.png" width="50%"><p>Android</p></li>
                </ol>
            </div>
        </li>
    </ul>
</div>
<!--ending 时尚购物-->
<!-- 百货商城-->
<div class="case_content" id="store">
    <div class="h50"></div>
    <ul>
        <li><img src="http://www.ichina.cn/imagesanli/zhengwang.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">正望O2O商城</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">河源正望是代理、经销酒类品牌产品、天方牌茶叶和布达拉宫牌冬虫夏草贸易公司。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/zhengwang_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/zhengwang_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/zhengwang_android.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/zhengwang_ios.png" width="50%"><p>Iphone</p></li>
                    <!-- <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>公众号</p></li> -->
                </ol>
            </div>
        </li>
        <li><img src="http://www.ichina.cn/imagesanli/linxin.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">临沂</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">临沂商品批发、品牌团购、本地生活服务移动端唯一大数据平台；为临沂城市移动端电子商务生态系统官方平台.</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/linxin_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/linxin_html.png" width="50%"><p>HTML5</p></li>
                </ol>
            </div>
        </li>
        <li><img src="http://www.ichina.cn/imagesanli/jiangshang.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">江商联盟</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">绵阳网发科技有限公司是一家国家认证的科技型企业，公司主要从事电子产品的研发、销售，软件开发。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/jiangshang_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/jiangshang_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/jiangshang_android.png" width="50%"><p>Android</p></li>
                </ol>
            </div>
        </li>
        <!-- <li><img src="http://www.ichina.cn/imagesanli/bohaitong.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">美食小街</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">集聚美食，舌尖上的美食，休闲午后，抢购团购不断尽在美食小街。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/bohaitong_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/bohaitong_html.png" width="50%"><p>HTML5</p></li>
                </ol>
            </div>
        </li> -->
        <li><img src="http://www.ichina.cn/imagesanli/xiaomaibu.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">小卖部</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">专注电子新兴产品及热销产品，提供市场新出的产品供顾客选购包括生活周边产品，也可以帮顾客海外代购一些生活用品。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/xiaomaibu_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/xiaomaibu_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/xiaomaibu_android.png" width="50%"><p>Android</p></li>
                </ol>
            </div>
        </li>
    </ul>
</div>
<!-- ending 百货商城-->
<!-- 时尚女装-->
<div class="case_content" id="suit-dress">
    <div class="h50"></div>
    <ul>
        <li><img src="http://www.ichina.cn/imagesanli/ychy.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">一城画一</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">"一城画一"以温暖丰富的色彩、艺术拼接的设计和层叠的创意搭配与细节修饰。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/ychy_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/ychy_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/ychy_android.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/ychy_ios.png" width="50%"><p>Iphone</p></li>
                    <!-- <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>公众号</p></li> -->
                </ol>
            </div>
        </li>
        <li><img src="http://www.ichina.cn/imagesanli/r&d.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">R&D</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">R&D大庆旗舰店，走在女装潮流前线</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/r&d_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/r&d_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/r&d_android.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/r&d_ios.png" width="50%"><p>Iphone</p></li>
                </ol>
            </div>
        </li>
        <li><img src="http://www.ichina.cn/imagesanli/duoyi.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">朵以</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">朵以服饰为您打造靓丽青春。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/duoyi_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/duoyi_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/duoyi_android.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/duoyi_ios.png" width="50%"><p>Iphone</p></li>
                </ol>
            </div>
        </li>
        <li><img src="http://www.ichina.cn/imagesanli/milan.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">米兰时装店</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">为广大消费者提供时尚前沿的时装精品。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/milan_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/milan_html.png" width="50%"><p>HTML5</p></li>
                </ol>
            </div>
        </li>
    </ul>
</div>
<!--ending 时尚女装-->
<!-- 家具装饰-->
<div class="case_content" id="furniture">
    <div class="h50"></div>
    <ul>
        <li><img src="http://www.ichina.cn/imagesanli/yuanbenmu.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">元本木业</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">元本木业，圣迪安地中海风格蓝白色调系列家私3D体验馆。O2O自助商城，优惠促销，好礼大放送！</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/yuanbenmu_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/yuanbenmu_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/yuanbenmu_andriod.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/yuanbenmu_ios.png" width="50%"><p>Iphone</p></li>
                    <!--  <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>公众号</p></li> -->
                </ol>
            </div>
        </li>
        <li><img src="http://www.ichina.cn/imagesanli/yitengziyuan.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">伊藤资源</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;"> 成都伊藤资源藤器厂坐落于风景优美的成都市双流县，“西部藤编基地”九江镇。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/yitengziyuan_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/yitengziyuan_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/yitengziyuan_android.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/yitengziyuan_ios.png" width="50%"><p>Iphone</p></li>
                </ol>
            </div>
        </li>
        <li><img src="http://www.ichina.cn/imagesanli/kukereshuiqi.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">酷科热水器</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;"> 打造全球低碳、环保、节能卫浴电器行业翘楚。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/kukereshuiqi_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/kukereshuiqi_html.png" width="50%"><p>HTML5</p></li>
                </ol>
            </div>
        </li>
        <li><img src="http://www.ichina.cn/imagesanli/xinduyun.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">信独韵</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;"> 作为红木家具的缔造 者继承了明清的红木情结，充分发觉了红木的天然纹理和色泽的美学特征。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/xinduyun_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/xinduyun_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/xinduyun_android.png" width="50%"><p>Android</p></li>
                </ol>
            </div>
        </li>
    </ul>
</div>
<!--ending 家具装饰-->
<!-- 房地产-->
<div class="case_content" id="realty">
    <div class="h50"></div>
    <ul>
        <li><img src="http://www.ichina.cn/imagesanli/weinuojiaju.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">维诺家居</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">维诺家居！</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/weinuojiaju_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/weinuojiaju_html.png" width="50%"><p>HTML5</p></li>
                    <!-- <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>Iphone</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>公众号</p></li> -->
                </ol>
            </div>
        </li>
        <li><img src="http://www.ichina.cn/imagesanli/zhiqingjiaju.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">志晴家居</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">志晴家居！</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/zhiqingjiaju_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/zhiqingjiaju_html.png" width="50%"><p>HTML5</p></li>
                </ol>
            </div>
        </li>
    </ul>
</div>
<!--ending 房地产-->

<!-- 家政保洁-->
<div class="case_content" id="housekeeping" style="display:none;">
    <div class="h50"></div>
    <ul>
        <li><img src="http://www.ichina.cn/imagesanli/cangzhou12349.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">沧州12349</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">沧州市社区服务信息中心服务项目将不断优化、扩展和延伸。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/cangzhou12349_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/cangzhou12349_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/cangzhou12349_android.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/cangzhou12349_ios.png" width="50%"><p>Iphone</p></li>
                    <!-- <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>公众号</p></li> -->
                </ol>
            </div>
        </li>
    </ul>
</div>
<!--ending 家政保洁-->
<!-- 旅游-->
<div class="case_content" id="travel" style="display:none;">
    <div class="h50"></div>
    <ul>
        <li><img src="http://www.ichina.cn/imagesanli/aiyoushanghai.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">爱游上海</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">爱游上海。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/aiyoushanghai_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/aiyoushanghai_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/aiyoushanghai_android.png" width="50%"><p>Android</p></li>
                    <!-- <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>Iphone</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>公众号</p></li> -->
                </ol>
            </div>
        </li>
    </ul>
</div>
<!--ending 旅游-->
<!-- 健康保健-->
<div class="case_content" id="health">
    <div class="h50"></div>
    <ul>
        <li><img src="http://www.ichina.cn/imagesanli/nongyoukuaixian.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">农优快线</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">农优快线。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/nongyoukuaixian_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/nongyoukuaixian_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/nongyoukuaixian_android.png" width="50%"><p>Android</p></li>
                    <!--   <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>公众号</p></li> -->
                </ol>
            </div>
        </li>
        <li><img src="http://www.ichina.cn/imagesanli/bingshenmianmo.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">冰神面膜</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">深圳凯利宝贸易有限公司护肤品牌，分享最新的化妆品资讯、护肤新理念、健康的生活方式。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/bingshenmianmo_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/bingshenmianmo_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/bingshenmianmo_android.png" width="50%"><p>Android</p></li>
                    <!--   <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>公众号</p></li> -->
                </ol>
            </div>
        </li>
    </ul>
</div>
<!--ending 健康保健-->
<!-- 学校教育-->
<div class="case_content" id="education">
    <div class="h50"></div>
    <ul>
        <li><img src="http://www.ichina.cn/imagesanli/renhuaihongye.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">仁怀宏业教育</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">我校是经劳动部门批准认定的民办学校，主要开设电脑、成人高等教育、白酒勾兑师培训、金蝶财务软件、微商城软件销售等。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/renhuaihongye_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/renhuaihongye_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/renhuaihongye_android.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/renhuaihongye_ios.png" width="50%"><p>Iphone</p></li>
                    <!-- <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>公众号</p></li> -->
                </ol>
            </div>
        </li>
        <li><img src="http://www.ichina.cn/imagesanli/renmingluxiaoxue.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">人民路小学</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">学校通过app可及时发布传达最新通知公告并通过app将家庭作业等教务实际信息进行应用发布。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/renmingluxiaoxue_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/renmingluxiaoxue_html.png" width="50%"><p>HTML5</p></li>
                </ol>
            </div>
        </li>
    </ul>
</div>
<!--ending 学校教育-->
<!-- 果蔬食品-->
<div class="case_content" id="garden-stuff">
    <div class="h50"></div>
    <ul>
        <li><img src="http://www.ichina.cn/imagesanli/lingxianguoshu.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">领鲜果蔬</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">领鲜果蔬</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/lingxianguoshu_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/lingxianguoshu_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/lingxianguoshu_android.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/lingxianguoshu_ios.png" width="50%"><p>Iphone</p></li>
                    <!--   <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>公众号</p></li> -->
                </ol>
            </div>
        </li>
        <li><img src="http://www.ichina.cn/imagesanli/zhihuiguo.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">三峡智慧果</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">致力于打造一个三峡地区的水果、特产、饮料移动市场，整合三峡地区的水果资源，让消费者能通过本应用方便快捷的买到自己想要的商品。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/zhihuiguo_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/zhihuiguo_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/zhihuiguo_android.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/zhihuiguo_ios.png" width="50%"><p>Iphone</p></li>
                </ol>
            </div>
        </li>
        <!-- <li><img src="http://www.ichina.cn/imagesanli/tiaoweipin.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">三峡调味品</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">三峡调味品。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/tiaoweipin_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/tiaoweipin_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/tiaoweipin_android.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/tiaoweipin_ios.png" width="50%"><p>Iphone</p></li>
                </ol>
            </div>
        </li> -->
    </ul>
</div>
<!--ending 果蔬食品-->
<!-- 汽车美容-->
<div class="case_content" id="car">
    <div class="h50"></div>
    <ul>
        <li><img src="http://www.ichina.cn/imagesanli/dingdingxiche.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">叮叮洗车</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">上海昶良电子商务有限公司以诚信为基础，品牌为导向，本着严格自律。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/dingdingxiche_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/dingdingxiche_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/dingdingxiche_android.png" width="50%"><p>Android</p></li>
                    <!--  <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>公众号</p></li> -->
                </ol>
            </div>
        </li>
        <li><img src="http://www.ichina.cn/imagesanli/zhongbofute.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">中博福特</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">福克斯震撼上市！</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/zhongbofute_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/zhongbofute_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/zhongbofute_android.png" width="50%"><p>Android</p></li>
                    <!--  <li><img src="http://www.ichina.cn/imagesanli/zhongbofute_html.png" width="50%"><p>公众号</p></li> -->
                </ol>
            </div>
        </li>
    </ul>
</div>
<!--ending 汽车美容-->
<!-- 茗茶礼盒-->
<div class="case_content" id="tea">
    <div class="h50"></div>
    <ul>
        <li><img src="http://www.ichina.cn/imagesanli/liushunqing.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">六顺清茶</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">深圳市六顺清文化传播有限公司，致力于云南普洱茶、滇红茶设计、定制、传播茶文化。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/liushunqing_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/liushunqing_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/liushunqing_android.png" width="50%"><p>Android</p></li>
                    <!-- <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>公众号</p></li> -->
                </ol>
            </div>
        </li>
        <!-- <li><img src="http://www.ichina.cn/imagesanli/juhexiang.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">聚和祥</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">聚和祥以茶飘香万里而闻名于诸多地方。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/juhexiang_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/juhexiang_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/juhexiang_android.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/juhexiang_html.png" width="50%"><p>Iphone</p></li>
                </ol>
            </div>
        </li> -->
        <li><img src="http://www.ichina.cn/imagesanli/sanxiachaye.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">三峡茶业</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">主要从事高中档茶叶的批发与零售，兼营茶具，承接送货上门等增值服务，进行后期的招商与推广，占据整个五峰茶业市场的影响力。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/sanxiachaye_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/sanxiachaye_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/sanxiachaye_android.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/sanxiachaye_ios.png" width="50%"><p>Iphone</p></li>
                </ol>
            </div>
        </li>
    </ul>
</div>
<!--ending 茗茶礼盒-->
<!-- 小区服务-->
<div class="case_content" id="community">
    <div class="h50"></div>
    <ul>
        <li><img src="http://www.ichina.cn/imagesanli/xiaoershangmen.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">小二上门</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">建立一个提供各种信息的服务平台服务商家，服务用户。在三线以上城市积极寻求合作商家，形成“小二异业联盟”。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/xiaoershangmen_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/xiaoershangmen_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/xiaoershangmen_android.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/xiaoershangmen_ios.png" width="50%"><p>Iphone</p></li>
                    <!-- <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>公众号</p></li> -->
                </ol>
            </div>
        </li>
        <li><img src="http://www.ichina.cn/imagesanli/dingdangxiaoqu.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">叮当小区</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">合肥豆科在线：立足合肥本土，从事移动互联网应用实施与运用，涉及iphone、Android、ipad、WindowsMobile等系统平台。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/dingdangxiaoqu_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/dingdangxiaoqu_html.png" width="50%"><p>HTML5</p></li>
                </ol>
            </div>
        </li>
    </ul>
</div>
<!--ending 小区服务-->
<!-- 新闻资讯-->
<div class="case_content" id="news">
    <div class="h50"></div>
    <ul>
        <li><img src="http://www.ichina.cn/imagesanli/fenghuangzixun.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">凤凰资讯</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">建立为广大消费者提供更为全面与丰富的生活资讯而打造的城市生活资讯APP。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/fenghuangzixun_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/fenghuangzixun_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/fenghuangzixun_android.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/fenghuangzixun_ios.png" width="50%"><p>Iphone</p></li>
                    <!--  <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>公众号</p></li> -->
                </ol>
            </div>
        </li>
        <li><img src="http://www.ichina.cn/imagesanli/nengyuan.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">世界能源交易</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">世界能源交易。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/nengyuan_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/nengyuan_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/nengyuan_android.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/nengyuan_ios.png" width="50%"><p>Iphone</p></li>
                </ol>
            </div>
        </li>
    </ul>
</div>
<!--ending 新闻资讯-->
<!-- 珠宝彩妆-->
<div class="case_content" id="jewelry">
    <div class="h50"></div>
    <ul>
        <li><img src="http://www.ichina.cn/imagesanli/zhoudahang.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">周大行</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">深圳市周大行珠宝公司是有深圳市工商局批注成立的正规珠宝首饰经营企业。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/zhoudahang_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/zhoudahang_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/zhoudahang_android.png" width="50%"><p>Android</p></li>
                    <!-- <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>Iphone</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>公众号</p></li> -->
                </ol>
            </div>
        </li>
        <li><img src="http://www.ichina.cn/imagesanli/henglizi.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">恒莉姿彩妆</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">恒莉姿提出将潜藏于女人们内心的N个面完美还原，挖掘不同风情，创造不同的形象。</p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/henglizi_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/henglizi_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/henglizi_android.png" width="50%"><p>Android</p></li>
                    <!--   <li><img src="http://www.ichina.cn/imagesanli/henglizi_ios.png" width="50%"><p>Iphone</p></li>
                      <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>公众号</p></li> -->
                </ol>
            </div>
        </li>
    </ul>
</div>
<!--ending 珠宝彩妆-->
<!-- 科技-->
<div class="case_content" id="science">
    <div class="h50"></div>
    <ul>
        <li><img src="http://www.ichina.cn/imagesanli/jingweikeji.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">精维科技</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">精维科技是俄罗斯TechnoVector有限公司在华唯一直属分公司。 </p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/jingweikeji_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/jingweikeji_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/jingweikeji_android.png" width="50%"><p>Android</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/jingweikeji_ios.png" width="50%"><p>Iphone</p></li>
                    <!--  <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>公众号</p></li> -->
                </ol>
            </div>
        </li>
        <li><img src="http://www.ichina.cn/imagesanli/jumakeji.png" class="case_content_img"/>
            <div class="goods-detail-tab clearfix" id="tabs"></div>
            <div class="casewenzi">
                <p class="content_title">巨码科技</p>
                <p style="margin-top:0;">版本号：V1.0</p>
                <p style="margin-top:20px;font-size:14px;">巨码科技。 </p>
            </div>
            <div class="ka">
                <div class="tab-10-1 active"><img class="erweima_show" height="105" src="http://www.ichina.cn/imagesanli/jumakeji_html.png"/> </div>
            </div>
            <div id="box" class="case_erweima_box">
                <ol>
                    <li><img src="http://www.ichina.cn/imagesanli/jumakeji_html.png" width="50%"><p>HTML5</p></li>
                    <li><img src="http://www.ichina.cn/imagesanli/jumakeji_android.png" width="50%"><p>Android</p></li>
                    <!--     <li><img src="http://www.ichina.cn/imagesanli/jumakeji_ios.png" width="50%"><p>Iphone</p></li>
                        <li><img src="http://www.ichina.cn/imagesanli/meiren_html.png" width="50%"><p>公众号</p></li> -->
                </ol>
            </div>
        </li>
    </ul>
</div>
<!--ending 科技-->

</div>
<script>
    $(".hot, .fashion, .store, .suit-dress, .furniture, .realty, .realty, .housekeeping, .travel, .health, .education, .garden-stuff, .car, .tea, .community, .news, .jewelry, .science").zxxAnchor({
        anchortag: "href"
    });
</script>
<!--appichinacn_case-->

<!--中间HTML 5内容区结束-->
<!--底部 start-->




<?php include_once("footer.php")?>
</body>


