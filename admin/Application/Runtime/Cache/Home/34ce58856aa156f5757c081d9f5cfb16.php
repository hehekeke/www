<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/lunwen/Public/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="/lunwen/Public/easyui/themes/icon.css">
    <script type="text/javascript" src="/lunwen/Public/easyui/jquery.min.js"></script>
    <script type="text/javascript" src="/lunwen/Public/easyui/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="/lunwen/Public/My97DatePicker/WdatePicker.js"></script>
</head>
<body>

</body>
</html>
    <script>
        $(function(){
            $(".del").click(function(){
                var id = $(this).attr("id");
                $.post(
                        "http://localhost/lunwen/index.php/Home/System/user_del",{
                            "uid":id
                        },function(data){
                            var data=eval("("+data+")");
                            if(data.status == 0){
                                alert(data.msg);
                            }else if(data.status == 1){
                                window.location.href = "http://localhost/lunwen/index.php/Home/System/user_list";
                            }
                        }
                )
            });
        });
    </script>
</head>
<body>
<h1>系统用户信息维护</h1>
<a href="http://localhost/lunwen/index.php/Home/System/touser_add">添加用户信息</a>
<table cellpadding=3 cellspacing=5 border="1px solod red">
    <tr>
       <td>用户名</td><td>用户密码</td><td>所属部门</td><td>用户角色</td><td>真实姓名</td><td>用户邮箱</td><td>用户手机</td><td colspan="2" style="text-align: center;">部门操作</td>
    </tr>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>

            <td > <?php echo ($vo["username"]); ?> </td>
            <td > <?php echo ($vo["password"]); ?> </td>
            <td > <?php echo ($vo["dept"]); ?> </td>
            <td > <?php echo ($vo["role"]); ?> </td>
            <td > <?php echo ($vo["realname"]); ?> </td>
            <td > <?php echo ($vo["email"]); ?> </td>
            <td > <?php echo ($vo["iphone"]); ?> </td>
            <td > <a href="http://localhost/lunwen/index.php/Home/System/touser_update/uid/<?php echo ($vo["id"]); ?>">更新</a> </td>
            <td > <input type="button" id="<?php echo ($vo["id"]); ?>" class="del" value="删除" /> </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    <tr>
    </tr>
</table>
<div class="result page"><?php echo ($page); ?></div>
</body>
</html>