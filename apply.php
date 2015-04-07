
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
    <link rel='stylesheet' href='http://www.weiba66.com/app/modules/pc/assets/css/reg.css'><script type="text/javascript" src="http://www.weiba66.com/app/modules/pc/assets/js/jquery.min.js"></script>
</head>
<body>

<?php include_once("nav.php") ?>
<div class="main">
    <div class="public-content clearfix">
        <div class="public">
            <div class="public-box clearfix">
                <h1 class="public-h1">申请开通</h1>
                <div class="reg-wrapper2">
                    <form id="regform" class="form-horizontal" method="post" action="#">
                        <div class="control-group">
                            <label class="control-label" for="username">姓名</label>
                            <div class="controls">
                                <input name="name" type="text" class="txt_input" value="" id="apply_name">
                                <span class="maroon">*</span><span id="apply_name_err"  class="help-inline"></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="password">职位</label>
                            <div class="controls">
                                <input name="position" type="text" class="txt_input" id="apply_position">
                                <span class="maroon">*</span><span id="apply_position_err"  class="help-inline"></span></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="phone">手机</label>
                            <div class="controls">
                                <input type="text" name="phone" id="apply_telphone" value="">
                                <span class="maroon">*</span><span id="apply_telphone_err" class="help-inline"></span> </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="username">公司名称</label>
                            <div class="controls">
                                <input name="company" type="text" class="txt_input" id="apply_company" value="">
                                <span class="maroon">*</span><span id="apply_company_err" class="help-inline"></span> </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="username">所属行业</label>
                            <div class="controls">
                                <select name="cid" class="form-control" id="apply_profession">
                                    <option>请选择</option>
                                    <option value="42">| 生活服务</option>
                                    <option value="30">|---- 广告会展</option>
                                    <option value="39">|---- 互联网</option>
                                    <option value="40">|---- 娱乐</option>
                                    <option value="48">|---- 酒店</option>
                                    <option value="49">|---- 电影院</option>
                                    <option value="50">|---- 餐饮</option>
                                    <option value="51">|---- 摄影</option>
                                    <option value="54">|---- 汽车4S</option>
                                    <option value="55">|---- 汽车维修</option>
                                    <option value="56">|---- 健身</option>
                                    <option value="57">|---- 电子商务</option>
                                    <option value="58">|---- 旅行服务</option>
                                    <option value="59">|---- 商场</option>
                                    <option value="10">|---- 培训</option>
                                    <option value="60">|---- 教育</option>
                                    <option value="12">|---- 美容美发</option>
                                    <option value="9">|---- 婚庆</option>
                                    <option value="24">|---- 宾馆</option>
                                    <option value="36">|---- KTV</option>
                                    <option value="52">| 医疗卫生</option>
                                    <option value="35">|---- 整形医院</option>
                                    <option value="53">|---- 医院</option>
                                    <option value="7">|---- 保健品</option>
                                    <option value="27">|---- 药店</option>
                                    <option value="61">|---- 计生用品</option>
                                    <option value="44">| 生产/贸易</option>
                                    <option value="37">|---- 食品</option>
                                    <option value="62">|---- 服饰</option>
                                    <option value="63">|---- 贸易</option>
                                    <option value="64">|---- 家具</option>
                                    <option value="65">|---- 电器</option>
                                    <option value="66">|---- 日用品</option>
                                    <option value="29">|---- 生物技术</option>
                                    <option value="79">|---- 技术开发</option>
                                    <option value="8">| 房产建筑</option>
                                    <option value="38">|---- 房地产</option>
                                    <option value="67">|---- 建筑</option>
                                    <option value="68">|---- 装修</option>
                                    <option value="69">|---- 建材</option>
                                    <option value="15">| 金融</option>
                                    <option value="71">|---- 保险</option>
                                    <option value="75">|---- 其他</option>
                                    <option value="72">|---- 基金</option>
                                    <option value="70">|---- 银行</option>
                                    <option value="73">|---- 证券</option>
                                    <option value="74">|---- 贵金属</option>
                                    <option value="28">| 政府/媒体</option>
                                    <option value="76">|---- 政府部门</option>
                                    <option value="77">|---- 机构组织</option>
                                    <option value="78">|---- 新闻媒体</option>
                                    <option value="41">| 其他</option>
                                    <option value="31">|---- 家政/物业</option>
                                    <option value="32">|---- 律师/咨询/翻译</option>
                                </select>
                                <span class="maroon">*</span><span id="apply_profession_err" class="help-inline"></span> </div>
                        </div>


<!--                        <div class="control-group">-->
<!--                            <label class="control-label" for="location_p">所在城市</label>-->
<!--                            <div class="controls" id="area">-->
<!--                                <select defaultVal="" name="country" class="country form-control" id="apply_country">-->
<!--                                </select>-->
<!--                                <select defaultVal="" name="province" class="prov form-control" id="apply_prov">-->
<!--                                </select>-->
<!--                                <select defaultVal="" name="city" class="city form-control" id="apply_city">-->
<!--                                </select>-->
<!--                                <span class="maroon">*</span><span id="apply_country_err" class="help-inline"></span>-->
<!--                                <span class="maroon"></span><span id="apply_prov_err" class="help-inline"></span>-->
<!--                                <span class="maroon"></span><span id="apply_city_err" class="help-inline"></span>-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="control-group">
                            <label class="control-label" for="apply_reason">申请目的</label>
                            <div class="controls">
                                <select name="apply_reason" class="form-control" id="apply_reason">
                                    <option value="1" selected>开通微网站</option>
                                    <option value="2">咨询代理</option>
                                </select>
                            </div>
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="username">微网站名</label>
                            <div class="controls">
                                <input name="webname" type="text" class="txt_input" id="apply_webname" value="">
                                <span class="maroon">*</span><span id="apply_webname_err" class="help-inline"></span> </div>
                        </div>
                        <!-- <div class="control-group">
                            <label class="control-label" for="username">二级域名</label>
                            <div class="controls">
                                <input name="subdomain" type="text" class="txt_input" id="apply_subdomain" value="">
                                <span class="maroon">*</span><span id="apply_subdomain_err" class="help-inline"></span> </div>
                        </div> -->
                        <div class="control-group">
                            <label class="control-label" for="username">邮箱</label>
                            <div class="controls">
                                <input name="email" type="text" class="txt_input" id="apply_email" value="">
                                <span class="maroon">*</span><span id="apply_email_err" class="help-inline"></span> </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="username">用户名</label>
                            <div class="controls">
                                <input name="username" type="text" class="txt_input" id="apply_username" value="">
                                <span class="maroon">*</span><span id="apply_username_err" class="help-inline"></span> </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="username">密码</label>
                            <div class="controls">
                                <input name="password" type="password" class="txt_input" id="apply_password" value="">
                                <span class="maroon">*</span><span id="apply_password_err" class="help-inline"></span> </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="username">确认密码</label>
                            <div class="controls">
                                <input name="cpassword" type="password" class="txt_input" id="apply_cpassword" value="">
                                <span class="maroon">*</span><span id="apply_cpassword_err" class="help-inline"></span> </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="address">备注</label>
                            <div class="controls">
                                <textarea name="remark" id="remark" cols="4" class="txt_input"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label"></label>
                            <div class="controls">
                                <input type="hidden" name="from_site" id="from_site" value=""/>
                                <input type="hidden" name="domain" id="apply_subdomain" value="cs3465620150407"/>
                                <button type="button" id="reg-btn" class="btn-register" onClick="ga('send', 'event', 'regbutton', 'click', 'apply submit')">提 交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer">
    <div class="footerCon">
        <ul class="clearfix">
            <li>
                <dl>
                    <dt>产品</dt>
                    <dd>
                        <p><a href="/products.html" target="_blank">微信公众平台</a></p>
                        <p><a href="/topics/fxb.html" target="_blank">人人店微分销</a></p>
                        <p><a href="/trade/index.html" target="_blank">八大行业方案</a></p>
                        <p><a href="http://www.mayun520.com" target="_blank">支付宝平台</a></p>
                        <p><a href="/topics/zhidahao.html" target="_blank">百度直达号</a></p>
                        <p><a href="/topics/qiyeweixin.html" target="_blank">微信企业号</a></p>
                    </dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt>服务</dt>
                    <dd>
                        <p><a href="/service.html" target="_blank">微巴商学院</a></p>
                        <p><a href="/service/agent.html" target="_blank">代理商支持</a></p>
                        <p><a href="/service/tour.html" target="_blank">全国巡讲支持</a></p>
                        <p><a href="/service/union.html" target="_blank">微信互粉通</a></p>
                    </dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt>案例</dt>
                    <dd>
                        <p><a href="/cases.html" target="_blank">微网站案例</a></p>
                        <p><a href="/cases/rrd.html" target="_blank"> 人人店案例</a></p>
                        <p><a href="/service.html#case" target="_blank">微营销案例</a></p>
                    </dd>
                </dl>
            </li>
            <li class="spc">
                <img src="http://www.weiba66.com/app/modules/pc/assets/images/flogo.png" alt="让微信营销如虎添翼">
            </li>
            <li>
                <dl>
                    <dt>加盟</dt>
                    <dd>
                        <p><a href="/join.html" target="_blank">成就财富人生</a></p>
                    </dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt>资讯</dt>
                    <dd>
                        <p><a href="/news/wbgd.html" target="_blank">微巴观点</a></p>
                        <p><a href="/news.html" target="_blank">产品公告</a></p>
                        <p><a href="/news/2.html" target="_blank">媒体报道</a></p>
                        <p><a href="/news/6.html" target="_blank">政府考察</a></p>
                    </dd>
                </dl>
            </li>
            <li>
                <dl>
                    <dt>关于</dt>
                    <dd>
                        <p><a href="/about.html" target="_blank">关于我们</a></p>
                        <p><a href="/about/history.html" target="_blank">发展历程</a></p>
                        <p><a href="/about/culture.html" target="_blank">企业文化</a></p>
                        <p><a href="/about/jobs.html" target="_blank">加入我们</a></p>
                        <p><a href="/about/contact.html" target="_blank">联系我们</a></p>
                    </dd>
                </dl>
            </li>
        </ul>
        <div class="contact" id="contact_foot">
            <p>城市加盟：
                <span>朱经理<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2355742809&amp;site=qq&amp;menu=yes" target="_blank" onClick="ga('send', 'event', 'FooterMerchants', 'ProxyQQ','招商');"><img border="0" src="http://wpa.qq.com/pa?p=2:2355742809:41" alt="给我留言"></a>(15867110115)</span>
                <span>余经理<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2355906300&amp;site=qq&amp;menu=yes" target="_blank" onClick="ga('send', 'event', 'FooterMerchants', 'ProxyQQ','招商');"><img border="0" src="http://wpa.qq.com/pa?p=2:2355906300:41" alt="给我留言"></a>(18667006819)</span>
                <span>刘经理<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2355824323&amp;site=qq&amp;menu=yes" target="_blank" onClick="ga('send', 'event', 'FooterMerchants', 'ProxyQQ','招商');"><img border="0" src="http://wpa.qq.com/pa?p=2:2355824323:41" alt="给我留言"></a>(18657113002)</span>
                <span>沈经理<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2355906302&amp;site=qq&amp;menu=yes" target="_blank" onClick="ga('send', 'event', 'FooterMerchants', 'ProxyQQ','招商');"><img border="0" src="http://wpa.qq.com/pa?p=2:2355906302:41" alt="给我留言"></a>(15988128591)</span>
            </p>
            <p id="kefu_contact"> 售前咨询：
                <span>小单 <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2355742806&amp;site=qq&amp;menu=yes" target="_blank" onClick="ga('send', 'event', 'FooterSales', 'AdvisoryQQ','售前');"><img border="0" src="http://wpa.qq.com/pa?p=2:2355742806:41" alt="给我留言"></a></span>
                <span>小信 <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2355487993&amp;site=qq&amp;menu=yes" target="_blank" onClick="ga('send', 'event', 'FooterSales', 'AdvisoryQQ','售前');"><img border="0" src="http://wpa.qq.com/pa?p=2:2355487993:41" alt="给我留言"></a></span>
                <span>岚岚 <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2355824320&amp;site=qq&amp;menu=yes" target="_blank" onClick="ga('send', 'event', 'FooterSales', 'AdvisoryQQ','售前');"><img border="0" src="http://wpa.qq.com/pa?p=2:2355824320:41" alt="给我留言"></a></span>
                <span>小芳 <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2355487987&amp;site=qq&amp;menu=yes" target="_blank" onClick="ga('send', 'event', 'FooterSales', 'AdvisoryQQ','售前');"><img border="0" src="http://wpa.qq.com/pa?p=2:2355487987:41" alt="给我留言"></a></span>
                <span>小星 <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2355487985&amp;site=qq&amp;menu=yes" target="_blank" onClick="ga('send', 'event', 'FooterSales', 'AdvisoryQQ','售前');"><img border="0" src="http://wpa.qq.com/pa?p=2:2355487985:41" alt="给我留言"></a></span>
            </p>
        </div>
    </div>
    <div class="foot_nav">
        <ul class="links area clearfix">
            <li class="links_item no_extra"><a href="https://mp.weixin.qq.com/" rel="nofollow" target="_blank">微信公众平台</a></li>
            <li class="links_item"><a href="https://wx.qq.com/" rel="nofollow" target="_blank">微信电脑登陆</a></li>
            <li class="links_item"><a href="http://weixin.qq.com/" rel="nofollow" target="_blank">微信软件下载</a></li>
            <li class="links_item"><a href="http://t.qq.com/weibaxinxi" rel="nofollow" target="_blank">腾讯微博</a></li>
            <li class="links_item no_extra fr">
                <p class="copyright">
                    <span>Copyright © 2012 - 2015 微信生意宝 All Rights Reserved.</span>
                    <span><a href="http://www.miitbeian.gov.cn/" target="_blank">浙ICP备 12017132号-5</a></span>
                </p>

            </li>
        </ul>
    </div>
</div>
<div class="help_box" style="">
    <a href="javascript:;" class="float_qq" data-show="1"></a>
    <a class="free_go" href="/apply.html" target="_blank">免费试用</a>
    <a class="zixun" href="javascript:;" id="help_qq1">售前咨询</a>
    <a class="join"href="javascript:;" id="help_qq2">城市加盟</a>
    <b class="tels">咨询热线<br/>400-008-6556</b>
    <div><img src="/data/images/1/201410/60d21ae3ca07db76672a9a39752bd4a0.jpg"></div>
    <p class="tc">扫一扫立即体验</p>
    <div class="qq_list" id="qq_list1" style="display: none;" data-show="1"> <a href="javascript:;" class="close_qq" id="close_qq1"></a>
        <h4>售前咨询</h4>
        <div class="area_qq">
            <p><span>小单</span><a href="http://wpa.qq.com/msgrd?v=3&uin=2355742806&site=qq&menu=yes" target="_blank" onClick="ga('send', 'event', 'FloatSales', 'AdvisoryQQ','售前');"><img border="0" src="http://wpa.qq.com/pa?p=2:2355742806:41" alt="给我留言"></a></p>
            <p><span>小信</span><a href="http://wpa.qq.com/msgrd?v=3&uin=2355487993&site=qq&menu=yes" target="_blank" onClick="ga('send', 'event', 'FloatSales', 'AdvisoryQQ','售前');"><img border="0" src="http://wpa.qq.com/pa?p=2:2355487993:41" alt="给我留言"></a></p>
            <p><span>岚岚</span><a href="http://wpa.qq.com/msgrd?v=3&uin=2355824320&site=qq&menu=yes" target="_blank" onClick="ga('send', 'event', 'FloatSales', 'AdvisoryQQ','售前');"><img border="0" src="http://wpa.qq.com/pa?p=2:2355824320:41" alt="给我留言"></a></p>
            <p><span>小芳</span><a href="http://wpa.qq.com/msgrd?v=3&uin=2355487987&site=qq&menu=yes" target="_blank" onClick="ga('send', 'event', 'FloatSales', 'AdvisoryQQ','售前');"><img border="0" src="http://wpa.qq.com/pa?p=2:2355487987:41" alt="给我留言"></a></p>
            <p><span>小星</span><a href="http://wpa.qq.com/msgrd?v=3&uin=2355487985&site=qq&menu=yes" target="_blank" onClick="ga('send', 'event', 'FloatSales', 'AdvisoryQQ','售前');"><img border="0" src="http://wpa.qq.com/pa?p=2:2355487985:41" alt="给我留言"></a></p>
        </div>
    </div>
    <div class="qq_list join_bg" id="qq_list2" style="display: none;"> <a href="javascript:;" class="close_qq" id="close_qq2"></a>
        <h4>城市加盟</h4>
        <div class="area_qq">
            <p><span>朱经理</span><b>(15867110115)</b><a href="http://wpa.qq.com/msgrd?v=3&uin=2355742809&site=qq&menu=yes" target="_blank" onClick="ga('send', 'event', 'FloatMerchants', 'ProxyQQ','招商');"><img border="0" src="http://wpa.qq.com/pa?p=2:2355742809:41" alt="给我留言"></a></p>
            <p><span>余经理</span><b>(18667006819)</b><a href="http://wpa.qq.com/msgrd?v=3&uin=2355906300&site=qq&menu=yes" target="_blank" onClick="ga('send', 'event', 'FloatMerchants', 'ProxyQQ','招商');"><img border="0" src="http://wpa.qq.com/pa?p=2:2355906300:41" alt="给我留言"></a></p>
            <p><span>刘经理</span><b>(18657113002)</b><a href="http://wpa.qq.com/msgrd?v=3&uin=2355824323&site=qq&menu=yes" target="_blank" onClick="ga('send', 'event', 'FloatMerchants', 'ProxyQQ','招商');"><img border="0" src="http://wpa.qq.com/pa?p=2:2355824323:41" alt="给我留言"></a></p>
            <p><span>沈经理</span><b>(15988128591)</b><a href="http://wpa.qq.com/msgrd?v=3&uin=2355906302&site=qq&menu=yes" target="_blank" onClick="ga('send', 'event', 'FloatMerchants', 'ProxyQQ','招商');"><img border="0" src="http://wpa.qq.com/pa?p=2:2355906302:41" alt="给我留言"></a></p>
        </div>
    </div>
</div>

<script src='/assets/js/jquery.cityselect1.js'></script>



<script>
    $(function(){
        $('.float_qq').click(function(){
            if($(this).attr("data-show")==1)
            {
                $(this).attr("data-show",0)
                $(this).addClass('active');
                $('.help_box').animate({"right":"-140px"})
            }else
            {
                $(this).attr("data-show",1)
                $(this).removeClass('active');
                $('.help_box').animate({"right":0})
            }
        })
        $("#help_qq1").click(function(){
            $("#qq_list2").hide();
            if($("#qq_list1").is(":hidden")){
                $("#qq_list1").slideDown();
            }else{
                $("#qq_list1").slideUp();
            }
        })
        $("#close_qq1").click(function(){
            $("#qq_list1").slideUp();
        })
        $("#help_qq2").click(function(){
            $("#qq_list1").hide();
            if($("#qq_list2").is(":hidden")){
                $("#qq_list2").slideDown();
            }else{
                $("#qq_list2").slideUp();
            }
        })
        $("#close_qq2").click(function(){
            $("#qq_list2").slideUp();
        })
    })
</script>


<span style="display:none;">
            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-57225975-1', 'auto');
                ga('require', 'displayfeatures');
                ga('send', 'pageview');
            </script>



        <!--百度统计代码-->
                    <script src="http://s4.cnzz.com/z_stat.php?id=1000454441&web_id=1000454441" language="JavaScript"></script>            </span>

<!--请将以下码嵌入到您网页源代码的最后面，通常是</body></html>之后,这样在LR服务器升级维护的时候也不会影响您的网页打开呈现速度。-->
<!-- <script language="javascript" src="http://dbt.zoosnet.net/JS/LsJS.aspx?siteid=DBT53393103&float=1&lng=cn"></script> -->
<script>
    $(function(){
        $('#area').citySelect({country:$(this).find('select.country').attr('defaultVal'), prov:$(this).find('select.prov').attr('defaultVal'), city:$(this).find('select.city').attr('defaultVal')});

        $('.btn-register').on('click',function(){
            var from_site = $('#from_site').val();
            var submitdata = '';
            var name = $('#apply_name').val();
            if(!name){
                $('#apply_name_err').html('<span class="error">姓名不能为空</span>');
                return false;
            }
            $('#apply_name_err').html('<span class="icon_succ"></span>');
            submitdata += 'name='+name;
            var position = $('#apply_position').val();
            if(!position){
                $('#apply_position_err').html('<span class="error">职位不能为空</span>');
                return false;
            }
            $('#apply_position_err').html('<span class="icon_succ"></span>');
            submitdata += '&position='+position;
            var telphone = $('#apply_telphone').val();
            if(!telphone){
                $('#apply_telphone_err').html('<span class="error">手机不能为空</span>');
                return false;
            }
            var partten = /^1[3458][0-9]{9}$/;
            if(!partten.test(telphone)){
                $('#apply_telphone_err').html('<span class="error">手机号格式不正确</span>');
                return false;
            }
            $('#apply_telphone_err').html('<span class="icon_succ"></span>');
            submitdata += '&telphone='+telphone;
            var company = $('#apply_company').val();
            if(!company){
                $('#apply_company_err').html('<span class="error">公司名称不能为空</span>');
                return false;
            }
            $('#apply_company_err').html('<span class="icon_succ"></span>');
            submitdata += '&company='+company;
            var profession = $('#apply_profession').val();
            if(!profession || profession == '请选择'){
                $('#apply_profession_err').html('<span class="error">所属行业不能为空</span>');
                return false;
            }
            $('#apply_profession_err').html('<span class="icon_succ"></span>');
            submitdata += '&profession='+profession;

            var country = $('#apply_country').val();
            var prov = $('#apply_prov').val();
            var city = $('#apply_city').val();
            if(!country || country == '国家')
            {
                $('#apply_city_err').html('<span class="error">请选择国家</span>');
                return false;
            }
            $('#apply_city_err').html('<span class="icon_succ"></span>');
            submitdata += '&country='+country;
            if(country != '国家')
            {
                if(!prov || prov=='省份'){
                    $('#apply_prov_err').html('<span class="error">请选择省份</span>');
                    return false;
                }
                $('#apply_city_err').html('<span class="icon_succ"></span>');
                submitdata += '&prov='+prov;
                if(prov != '省份')
                {
                    if(!city || city == '城市')
                    {
                        $('#apply_city_err').html('<span class="error">请选择城市<span>');
                        return false;
                    }
                }
                $('#apply_city_err').html('<span class="icon_succ"></span>');
                submitdata += '&city='+city;
            }

            if(!from_site) {
                var apply_reason = $('#apply_reason').val();
                submitdata += '&apply_reason='+apply_reason;

                var webname = $('#apply_webname').val();
                if (!webname) {
                    $('#apply_webname_err').html('<span class="error">微网站名不能为空</span>');
                    return false;
                }
                $('#apply_webname_err').html('<span class="icon_succ"></span>');
                submitdata += '&webname=' + webname;
                var subdomain = $('#apply_subdomain').val();
                /*if(!subdomain){
                 $('#apply_subdomain_err').html('二级域名不能为空');
                 return false;
                 }
                 $('#apply_subdomain_err').html('');*/
                submitdata += '&subdomain=' + subdomain;
                //TODO 验证二级域名不能重复 ajax
                var email = $('#apply_email').val();
                if (!email) {
                    $('#apply_email_err').html('<span class="error">邮箱不能为空</span>');
                    return false;
                }
                $('#apply_email_err').html('<span class="icon_succ"></span>');
                submitdata += '&email=' + email;
                var username = $('#apply_username').val();
                if (!username) {
                    $('#apply_username_err').html('<span class="error">用户名不能为空</span>');
                    return false;
                }

                if (!username.match(/^[a-z][0-9a-z]*$/)) {
                    $('#apply_username_err').html('<span class="error">用户名以小写字母开头，只能包含小写字母、数字</span>');
                    return false;
                }

                $('#apply_username_err').html('<span class="icon_succ"></span>');
                submitdata += '&username=' + username;
                //TODO 验证用户名不能重复 ajax
                var password = $('#apply_password').val();
                if (!password) {
                    $('#apply_password_err').html('<span class="error">密码不能为空<span>');
                    return false;
                }
                $('#apply_password_err').html('<span class="icon_succ"></span>');
                submitdata += '&password=' + password;
                var cpassword = $('#apply_cpassword').val();
                if (!cpassword) {
                    $('#apply_cpassword_err').html('<span class="error">确认密码不能为空</span>');
                    return false;
                }
                if (cpassword != password) {
                    $('#apply_cpassword_err').html('<span class="error">确认密码跟密码不一至<span>');
                    return false;
                }
                $('#apply_cpassword_err').html('<span class="icon_succ"></span>');
                submitdata += '&cpassword=' + cpassword;
            }

            if(from_site) {
                submitdata += '&from_site=' + from_site;
            }

            submitdata += '&remark='+$('#remark').val();
            $.post('/apply/ajaxApply',submitdata,function(result){
                if(!result.status)
                {
                    if(result.errors)
                    {
                        var obj = result.errors;
                        var errs = '';
                        $.each(obj, function(i) {
                            errs += obj[i] + '\n';
                        });
                        alert(errs);
                    }else if(result.msg){
                        alert(result.msg);
                    }
                }else{
                    //alert(result.data);
                    if(from_site || apply_reason==2){
                        alert("申请提交成功，三个工作日之内会联系您，请耐心等待！");
                        window.location.reload();
                    }else{
                        window.location.href="/apply/applySuccess/"+username;
                    }
                }
            },'json');
        });
    });
</script>
</body>
</html>