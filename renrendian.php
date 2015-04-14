
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
<?php include_once("nav.php")?>
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
                                    <option value="生活服务">| 生活服务</option>
                                    <option value="广告会展">|---- 广告会展</option>
                                    <option value="互联网">|---- 互联网</option>
                                    <option value="娱乐">|---- 娱乐</option>
                                    <option value="酒店">|---- 酒店</option>
                                    <option value="电影院">|---- 电影院</option>
                                    <option value="餐饮">|---- 餐饮</option>
                                    <option value="摄影">|---- 摄影</option>
                                    <option value="汽车4S">|---- 汽车4S</option>
                                    <option value="汽车维修">|---- 汽车维修</option>
                                    <option value="健身">|---- 健身</option>
                                    <option value="电子商务">|---- 电子商务</option>
                                    <option value="旅行服务">|---- 旅行服务</option>
                                    <option value="商场">|---- 商场</option>
                                    <option value="培训">|---- 培训</option>
                                    <option value="教育">|---- 教育</option>
                                    <option value="美容美发">|---- 美容美发</option>
                                    <option value="婚庆">|---- 婚庆</option>
                                    <option value="宾馆">|---- 宾馆</option>
                                    <option value="KTV">|---- KTV</option>
                                    <option value="医疗卫生">| 医疗卫生</option>
                                    <option value="整形医院">|---- 整形医院</option>
                                    <option value="医院">|---- 医院</option>
                                    <option value="保健品">|---- 保健品</option>
                                    <option value="药店">|---- 药店</option>
                                    <option value="计生用品">|---- 计生用品</option>
                                    <option value="生产/贸易">| 生产/贸易</option>
                                    <option value="食品">|---- 食品</option>
                                    <option value="服饰">|---- 服饰</option>
                                    <option value="贸易">|---- 贸易</option>
                                    <option value="家具">|---- 家具</option>
                                    <option value="电器">|---- 电器</option>
                                    <option value="日用品">|---- 日用品</option>
                                    <option value="生物技术">|---- 生物技术</option>
                                    <option value="技术开发">|---- 技术开发</option>
                                    <option value="房产建筑">| 房产建筑</option>
                                    <option value="房地产">|---- 房地产</option>
                                    <option value="建筑">|---- 建筑</option>
                                    <option value="装修">|---- 装修</option>
                                    <option value="建材">|---- 建材</option>
                                    <option value="金融">| 金融</option>
                                    <option value="保险">|---- 保险</option>
                                    <option value="其他">|---- 其他</option>
                                    <option value="基金">|---- 基金</option>
                                    <option value="银行">|---- 银行</option>
                                    <option value="证券">|---- 证券</option>
                                    <option value="贵金属">|---- 贵金属</option>
                                    <option value="政府/媒体">| 政府/媒体</option>
                                    <option value="政府部门">|---- 政府部门</option>
                                    <option value="机构组织">|---- 机构组织</option>
                                    <option value="新闻媒体">|---- 新闻媒体</option>
                                    <option value="其他">| 其他</option>
                                    <option value="家政/物业">|---- 家政/物业</option>
                                    <option value="律师/咨询/翻译">|---- 律师/咨询/翻译</option>
                                </select>
                                <span class="maroon">*</span><span id="apply_profession_err" class="help-inline"></span> </div>
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
                                <input type="hidden" name="from_site" id="from_site" value="renrendian"/>
                                <button type="button" id="reg-btn" class="btn-register" onClick="ga('send', 'event', 'regbutton', 'click', 'apply submit')">提 交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once("footer.php")?>
<script src='http://weiba666.com/assets/js/jquery.cityselect1.js'></script>





<!--请将以下码嵌入到您网页源代码的最后面，通常是</body></html>之后,这样在LR服务器升级维护的时候也不会影响您的网页打开呈现速度。-->
<!-- <script language="javascript" src="http://dbt.zoosnet.net/JS/LsJS.aspx?siteid=DBT53393103&float=1&lng=cn"></script> -->
<script>
    $(function(){

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

            submitdata += '&remark='+$('#remark').val();

            $.post('/ajaxApply.php',submitdata,function(result){
                if(result == "0"){
                    alert("不好意思，申请失败");
                }else if(result == "1"){
                    alert("申请提交成功，三个工作日之内会联系您，请耐心等待！");
                    window.location.reload();
                }
            },'json');
        });
    });
</script>
</body>
</html>