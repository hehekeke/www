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
        $(function () {
            //动态菜单数据


            //实例化树形菜单
            $("#tree").tree({
                url: "http://localhost/lunwen/index.php/home/index/authority_tree",
                lines: true,
                onClick: function (node) {
                    if (node.url) {
                        Open(node.text, node.url);
                    }
                }
            });

            //在右边center区域打开菜单，新增tab
            function Open(text, url) {
                if ($("#tabs").tabs('exists', text)) {
                    $('#tabs').tabs('select',text);
                } else {
                    $('#tabs').tabs('add', {
                        title: text,
                        closable: true,
                        content: "<iframe scrolling='auto' src='"+url+"' style='width:100%;height:480px;'></iframe>"
                    });
                }
            }

            //绑定tabs的右键菜单
            $("#tabs").tabs({
                onContextMenu: function (e, title) {
                    e.preventDefault();
                    $('#tabsMenu').menu('show', {
                        left: e.pageX,
                        top: e.pageY
                    }).data("tabTitle", title);
                }
            });

            //实例化menu的onClick事件
            $("#tabsMenu").menu({
                onClick: function (item) {
                    CloseTab(this, item.name);
                }
            });

            //几个关闭事件的实现
            function CloseTab(menu, type) {
                var curTabTitle = $(menu).data("tabTitle");
                var tabs = $("#tabs");

                if (type === "close") {
                    tabs.tabs("close", curTabTitle);
                    return;
                }

                var allTabs = tabs.tabs("tabs");
                var closeTabsTitle = [];

                $.each(allTabs, function () {
                    var opt = $(this).panel("options");
                    if (opt.closable && opt.title != curTabTitle && type === "Other") {
                        closeTabsTitle.push(opt.title);
                    } else if (opt.closable && type === "All") {
                        closeTabsTitle.push(opt.title);
                    }
                });

                for (var i = 0; i < closeTabsTitle.length; i++) {
                    tabs.tabs("close", closeTabsTitle[i]);
                }
            }
        });
    </script>
</head>
<body class="easyui-layout" fit="true">
<div data-options="region:'north',title:'North Title',split:true" style="height:100px;">
     <div style="margin-left:30px;folat:left;">
        <div style="float:left;">
            <h1>兴化中学固定资产管理系统</h1>
        </div>
        <div style="float:right;margin-top:20px;margin-right:40px;">
         <span style="margin-right:30px;"><?php echo ($username); ?></span> <a  href="http://localhost/lunwen/index.php/home/user/layout">退出登录</a>
        </div>
     </div>


</div>
<div data-options="region:'west',title:'组织机构',split:true" style="width:200px;">

    <ul id="tree"></ul>
</div>
<div data-options="region:'center',title:'内容',split:true,fit:true" id="tabs"  style="padding:5px;background:#eee;">
        <div title="首页" style="width:100%;height:480px;">
               <div style="margin-left:100px;margin-top:100px;">
                    <h1>欢迎登录兴化中学固定资产管理系统</h1>
               </div>
           </div>

</div>
</body>
</html>