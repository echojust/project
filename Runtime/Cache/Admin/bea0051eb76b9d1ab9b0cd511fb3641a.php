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
    <ul class="home_ul">
        <li><a href="#">总共分类<br>暂无数据</a></li>
        <li><a href="#">所有博文<br>暂无数据</a></li>
        <li><a href="#">网站评论<br>暂无数据</a></li>
        <li><a href="#">网站评论<br>暂无数据</a></li>
        <li><a href="#">总共访问<br>暂无数据</a></li>
    </ul>
    <table>
        <thead>
            <tr>
                <th colspan="2">系统基本信息</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>管理员</td>
                <td><?php echo (session('usernameBlog')); ?></td>
            </tr>
            <tr>
                <td>ip地址</td>
                <td><?php echo ($ip); ?></td>
            </tr>
            <tr>
                <td>登录时间</td>
                <td><?php echo ($loginTime); ?></td>
            </tr>
        </tbody>
    </table>

</div>
</div>
</body>
</html>