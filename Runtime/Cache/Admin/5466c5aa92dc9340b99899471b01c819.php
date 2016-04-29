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

                <form action="#" method="post">
                    <table>
                        <tr>
                            <td>分类</td>
                            <td>
                                <input type="text" name="name" class="input fl">
                                <p class="tip">一篇博客所属的分类，比如：HTML（不能为空）</p>
                            </td>
                        </tr>
                        <tr>
                            <td>上级分类:</td>
                            <td>
                                <select name="parent_id" class="fl h32">
                                    <option value="0">顶级分类</option>
                                    <option value="-1"</option>
                                </select>
                                <p class="tip">一篇博客所属的上级分类，比如：HTML属于前端技术</p>
                            </td>
                        </tr>
                        <tr>
                            <td>操作</td>
                            <td>
                                <input type="submit" name="submit" value="提交" class="submit">
                                <input type="reset" name="reset" value="重置" class="submit">
                            </td>
                        </tr>
                    </table>
                </form>

            </div>
        </div>
    </body>
</html>