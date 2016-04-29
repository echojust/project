<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="/Public/admin/css/common.css">
        <script src="/Public/admin/js/jquery-1.8.3.min.js"></script>
        <script src="/Public/admin/js/base.js"></script>
    </head>

    <body>
        <div class="header-wrapper">
            <a href="/" class="fl">网站首页</a>
            <a href="/index.php/Admin/User/logout" class="fr">退出</a>
            <a href="#" class="fr"><?php echo (date('Y-m-d g:i a',time())); ?></a>
            <a href="#" class="fr"><?php echo (session('usernameBlog')); ?></a>
        </div>

        <div class="left-wrapper" id="left_wrapper">
            <ul id="left_nav">
                <li><a href="/index.php/Admin/Index/index" class="navTitle">管理首页</a></li>
                <li><a href="/index.php/Admin/Category/indexCategory" class="navTitle">分类管理</a></li>
                <li><a href="/index.php/Admin/Blog/indexBlog" class="navTitle">博客管理</a></li>
                <li><a href="#">采集管理</a></li>
                <li><a href="#">游客管理</a></li>
                <li><a href="#">留言管理</a></li>
                <li><a href="#">百度统计</a></li>
                <li><a href="/index.php/Admin/System/indexSystem" class="navTitle">系统设置</a></li>
                <li><a href="#">回收站</a></li>
            </ul>
        </div>

        <div class="right-wrapper">


<div class="right-content-container">

    <a href="/index.php/Admin/Category/createCategory" class="add-button">+ 添加分类</a>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>分类</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    </div>
</div>
</body>
</html>

    <script>
        $(document).ready(function () {
            $.ajax({
                url: "/index.php/Admin/Category/listCategory",
                data: "",
                dataType: "text",
                type: "get",
                success: function ( msg ) {
                    $("tbody").html(msg);
                }
            })

            $("tbody").on("click", ".delete", function () {

                if ( ! confirm("确认删除吗") ) {
                    return false;
                }

                var id = $(this).attr("data-id");

                $.ajax({
                    url: "/index.php/Admin/Category/deleteCategory/id/" + id,
                    data: "",
                    dataType: "text",
                    type: "get",
                    success: function ( msg ) {
                        if ( msg == 1 ) {
                            alert("请先清空子分类");
                            return false;
                        }

                        if ( msg == 2 ) {
                            alert("删除失败");
                            return false;
                        }

                        alert("删除成功");
                        $("tbody").html(msg);
                    }
                });
            });
        })
    </script>