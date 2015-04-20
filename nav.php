<script>
    $(function(){
        $("li").removeClass("on");
        var url = window.location.href;
        ss = url.substr(26, url.length);
      if(ss == "index.php"){
            $("#first").addClass("on");
      }else if(ss == "products.php"){
          $("#second").addClass("on");
      }else if(ss == "about.php" || ss == "about/history.php" || ss == "about/culture.php" || ss == "about/jobs.php" || ss == "about/contact.php"){
          $("#guanyu").addClass("on");
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

                                                                                                                            <li id="first"><a href="/index.php">首页</a>
                                                        							</li>
                                                                                    <li id="second" ><a href="/products.php">产品</a>
                                                                                         <div class="sun_list">
                                    <ul>
                                                                                    <li><a href="/products.php">微信公众平台</a></li>
                                                                                    <li><a href="/topics/fxb.php">人人店微分销</a></li>
                                                                                    <li><a href="/trade/index.php">八大行业方案</a></li>
                                                                                    <li><a target="_blank" href="http://www.mayun520.com">支付宝平台</a></li>
                                                                                    <li><a href="/topics/zhidahao.php">百度直达号</a></li>
                                                                                    <li><a href="/topics/qiyeweixin.php">微信企业号</a></li>

                                                                            </ul>
                                </div>
                            							</li>
                                                                                    <li ><a href="/service.php">服务</a>
                                                                                         <div class="sun_list">
                                    <ul>
                                                                                    <li><a href="/service.php">诺辉学院</a></li>
                                                                                    <li><a href="/service/agent.php">代理商支持</a></li>
                                                                                    <li><a href="/service/tour.php">全国巡讲支持</a></li>
                                                                                    <li><a href="/service/union.php">微信互粉通</a></li>
                                                                            </ul>
                                </div>
                            							</li>
                                                                                    <li ><a href="/case.php">案例</a>
                                                                                         <div class="sun_list">
                                    <ul>
                                                                                    <li><a href="/case.php">微网站案例</a></li>
                                                                                    <li><a href="/case/rrd.php"> 人人店案例</a></li>
                                                                                    <li><a href="/service.php#case">微营销案例</a></li>
                                                                            </ul>
                                </div>
                            							</li>
                                                                                    <li ><a href="/join.php">加盟</a>
                                                                                         <div class="sun_list">
                                    <ul>
                                                                                    <li><a href="/join.php">成就财富人生</a></li>
                                                                            </ul>
                                </div>
                            							</li>
                                                                                    <li ><a href="/news.php">资讯</a>
                                                                                         <div class="sun_list">
                                    <ul>
                                                                                    <li><a href="/news/wbgd.php">微巴观点</a></li>
                                                                                    <li><a href="/news.php">产品公告</a></li>
                                                                                    <li><a href="/news/2.php">媒体报道</a></li>
                                                                                    <li><a href="/news/6.php">政府考察</a></li>
                                                                            </ul>
                                </div>
                            							</li>
                                                                                    <li ><a href="/topics.php">专题</a>
                                                         							</li>
                                                                                    <li id="guanyu"><a  href="/about.php">关于</a>
                                                                                         <div class="sun_list">
                                    <ul>
                                                                                    <li><a href="/about.php">关于我们</a></li>
                                                                                    <li><a href="/about/history.php">发展历程</a></li>
                                                                                    <li><a href="/about/culture.php">企业文化</a></li>
                                                                                    <li><a href="/about/jobs.php">加入我们</a></li>
                                                                                    <li><a href="/about/contact.php">联系我们</a></li>
                                                                            </ul>
                                </div>
                            							</li>
                                                            </ul>
            </div>
        </div>
    </div>
</div>
