<script>
    $(function(){
        $("li").removeClass("on");
        var url = window.location.href;
        ss = url.substr(19, url.length);
      if(ss == "index.php"){
            $("#first").addClass("on");
      }
        if(ss == "products.php"){
            $("#second").addClass("on");
        }
    });
</script>
<script>
    $(function(){
        $('#nav>ul>li').hover(function(){

            $(this).addClass('active');
            $(this).find('.sun_list').show();
        },function(){
            $(this).removeClass('active');
            $(this).find('.sun_list').hide();
        });
    })
</script>
<div class="header">
    <div class="head_bg">
        <div class="area clearfix">
			<!--<div class="logo"><a href="/" title="微信生意宝"><em>微信生意宝</em><img src="/data/images/1/201410/22e7eca40e3f704af1e47c1bec7912e1.jpg" alt="微信生意宝"></a></div>-->
						<div class="fl" style="width:340px; height:80px"><embed src="http://www.weiba66.com/assets/img/logo.swf" width="340" height="80"></embed></div>
			            <div id="nav" class="nav fr" style="width:760px">
                <ul class="clearfix">
                                                                                                                            <li id="first"><a href="index.php">首页</a>
                                                        							</li>
                                                                                    <li id="second" ><a href="products.php">产品</a>
                                                                                         <div class="sun_list">
                                    <ul>
                                                                                    <li><a href="products.php">微信公众平台</a></li>
                                                                                    <li><a href="topics/fxb.php">人人店微分销</a></li>
                                                                                    <li><a href="/trade/index.html">八大行业方案</a></li>
                                                                                    <li><a href="http://www.mayun520.com">支付宝平台</a></li>
                                                                                    <li><a href="/topics/zhidahao.html">百度直达号</a></li>
                                                                                    <li><a href="/topics/qiyeweixin.html">微信企业号</a></li>
                                                                            </ul>
                                </div>
                            							</li>
                                                                                    <li ><a href="/service.html">服务</a>
                                                                                         <div class="sun_list">
                                    <ul>
                                                                                    <li><a href="/service.html">微巴商学院</a></li>
                                                                                    <li><a href="/service/agent.html">代理商支持</a></li>
                                                                                    <li><a href="/service/tour.html">全国巡讲支持</a></li>
                                                                                    <li><a href="/service/union.html">微信互粉通</a></li>
                                                                            </ul>
                                </div>
                            							</li>
                                                                                    <li ><a href="/cases.html">案例</a>
                                                                                         <div class="sun_list">
                                    <ul>
                                                                                    <li><a href="/cases.html">微网站案例</a></li>
                                                                                    <li><a href="/cases/rrd.html"> 人人店案例</a></li>
                                                                                    <li><a href="/service.html#case">微营销案例</a></li>
                                                                            </ul>
                                </div>
                            							</li>
                                                                                    <li ><a href="/join.html">加盟</a>
                                                                                         <div class="sun_list">
                                    <ul>
                                                                                    <li><a href="/join.html">成就财富人生</a></li>
                                                                            </ul>
                                </div>
                            							</li>
                                                                                    <li ><a href="/news.html">资讯</a>
                                                                                         <div class="sun_list">
                                    <ul>
                                                                                    <li><a href="/news/wbgd.html">微巴观点</a></li>
                                                                                    <li><a href="/news.html">产品公告</a></li>
                                                                                    <li><a href="/news/2.html">媒体报道</a></li>
                                                                                    <li><a href="/news/6.html">政府考察</a></li>
                                                                            </ul>
                                </div>
                            							</li>
                                                                                    <li ><a href="/topics.html">专题</a>
                                                         							</li>
                                                                                    <li ><a href="/about.html">关于</a>
                                                                                         <div class="sun_list">
                                    <ul>
                                                                                    <li><a href="/about.html">关于我们</a></li>
                                                                                    <li><a href="/about/history.html">发展历程</a></li>
                                                                                    <li><a href="/about/culture.html">企业文化</a></li>
                                                                                    <li><a href="/about/jobs.html">加入我们</a></li>
                                                                                    <li><a href="/about/contact.html">联系我们</a></li>
                                                                            </ul>
                                </div>
                            							</li>
                                                            </ul>
            </div>
        </div>
    </div>
</div>
