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
            $('#device_type').combobox({
                url:'http://localhost/lunwen/index.php/home/device/device_type_data',
                valueField:'id',
                textField:'device_type'
            });

        });
    </script>
</head>
<body>
<div style="margin-top: 20px;margin-left: 50px;">
    <h1>采购报价单详细信息</h1>
    <form id="add_from"  method="post" action="http://localhost/lunwen/index.php/home/Purchase/add_money">
        <input  name="id" value="<?php echo ($data[0]["id"]); ?>"  type="hidden">
        <div style="margin-top: 10px;">
            <label for="" >设备名:</label>
            <input id="" name="name" value="<?php echo ($data[0]["name"]); ?>" class="easyui-validatebox" data-options="required:true,validType:'missingMessage'" />
        </div>
        <div style="margin-top: 10px;">
            <label for="" >购买数量:</label>
            <input  name="num" value="<?php echo ($data[0]["num"]); ?>"  data-options="required:true,validType:'missingMessage'">
        </div>
        <div style="margin-top: 10px;">
            <label for="" >总价格:</label>
            <input  name="money" value="<?php echo ($data[0]["money"]); ?>"  data-options="required:true,validType:'missingMessage'">(元)
        </div>
        <input type="submit" value="生成">
    </form>

</div>
</body>
</html>