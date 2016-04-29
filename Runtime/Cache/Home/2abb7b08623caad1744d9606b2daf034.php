<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="/Public/home/css/base.css?v=2015226">
        <link rel="stylesheet" href="/Public/home/css/common.css?v=2015226">
        <link rel="stylesheet" href="/Public/home/css/skill.css?v=2015226">
        <link rel="stylesheet" href="/Public/home/css/message.css?v=2015226">
        <script src="/Public/home/js/base.js"></script>
        <script src="/Public/home/js/jquery.js"></script>
    </head>
    <body>
        <!-- head - s -->
        <div class="head-wrapper">
            <div class="head-container">
                <div class="head-container-top-box">
                    <h1>
                        <a href="/index.php/Home/index/index">
                            <img src="/Public/home/img/head/logo.png">
                        </a>
                    </h1>
                </div>
                <div class="head-container-bottom-box">
                    <div class="head-nav" id="headNav">
                        <a href="/index.php/Home/Index/index">首页</a>
                        <a href="/index.php/Home/Hd/index">后端开发</a>
                        <a href="#">前端开发</a>
                        <a href="#">软件手册</a>
                        <a href="#">视频分享</a>
                        <a href="/index.php/Home/Message/index" class="mr0">联系站长</a>
                    </div>
                    <div class="head-nav-r">
                        <div class="search-panel">
                            <input type="text" class="search-text" id="searchText" placeholder="极客搜索">
                            <ol id="quickSearch">搜索历史啊</ol>
                            <input type="submit" class="search-button" value="搜索" id="searchBtn" data-val="0">
                        </div>
                        <em></em>
                        <a href="/index.php/Home/login/index">登录</a>
                        <a href="/index.php/Home/register/index">注册</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- head - e -->

        <!-- content - s -->
        <div class="content-wrapper">

            <div class="subnav-container pt10">
                <a href="#" class="active">Apache</a>
                <a href="#">Nginx</a>
                <a href="#">Linux</a>
                <a href="#">PHP</a>
            </div>
            <div class="listbox oh">
                <ul>
                    <?php if(is_array($blogs)): foreach($blogs as $key=>$vo): ?><li>
                            <h4><a href="/index.php/Home/hd/detail"><?php echo ($vo["title"]); ?></a></h4>
                            <p class="list-summary">简介</p>
                            <div class="list-other">发布时间：<?php echo ($vo["create_time"]); ?></div>
                        </li><?php endforeach; endif; ?>
                </ul>
            </div>

            <div class="page-container">
                <a href="#">上一页</a>
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">下一页</a>
            </div>
        </div>
        <!-- content - e -->

        <!-- foot - s -->
        <div class="foot-wrapper">
            <div class="foot-container">
                Copyright © 2015 - 2016 极客空间 . All Rights Reserved. 京ICP备15056776号-1
            </div>
        </div>
        <!-- foot - e -->
    </body>
</html>