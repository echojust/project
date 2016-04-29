<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="/Public/admin/css/common.css">
        <script src="/Public/admin/js/jquery.js"></script>
        <script src="/Public/admin/js/base.js"></script>
    </head>

    <body>
        <div class="header-wrapper">
            <a href="#" class="fl">网站首页</a>
            <a href="#" class="fr">退出</a>
            <a href="#" class="fr">时间啊</a>
        </div>

        <div class="left-wrapper" id="left_wrapper">
            <ul id="left_nav">
                <li><a href="/index.php/Admin/Index/index">管理首页</a></li>
                <li><a href="/index.php/Admin/Category/indexCategory">分类管理</a></li>
                <li><a href="/index.php/Admin/Blog/indexBlog">博客管理</a></li>
                <li><a href="#">采集管理</a></li>
                <li><a href="#">游客管理</a></li>
                <li><a href="#">用户管理</a></li>
                <li><a href="#">留言管理</a></li>
                <li><a href="#">百度统计</a></li>
                <li><a href="#">系统设置</a></li>
            </ul>
        </div>

        <div class="right-wrapper">
            <div class="right-nav">
                当前位置：
                <a href="#">博客管理 > </a>
                <a href="#">博客管理</a>
            </div>

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
                        <tr>
                            <td>1111</td>
                            <td>
                                11111
                            </td>
                            <td>
                                <a href="#">修改</a>
                                |
                                <a href="#" onclick="return confirm('确认删除吗？')">删除</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </body>
</html>