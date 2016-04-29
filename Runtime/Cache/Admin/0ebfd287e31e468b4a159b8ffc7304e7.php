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

    <table>
        <thead>
            <tr>
                <th colspan="2">网站信息配置</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>站点标题</td>
                <td>
                    <input type="text" name="title" class="input fl">
                </td>
            </tr>
            <tr>
                <td>关键字</td>
                <td>
                    <input type="text" name="key" class="input fl">
                </td>
            </tr>
            <tr>
                <td>描述</td>
                <td>
                    <input type="text" name="description" class="input fl">
                </td>
            </tr>
            <tr>
                <td>操作</td>
                <td>
                    <input type="submit" name="submit" value="提交" class="submit">
                    <input type="reset" name="reset" value="重置" class="submit">
                </td>
            </tr>
        </tbody>
    </table>

</div>
</div>
</body>
</html>