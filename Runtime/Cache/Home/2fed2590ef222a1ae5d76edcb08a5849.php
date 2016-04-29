<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="/Public/home/css/base.css?v=2015226">
        <link rel="stylesheet" href="/Public/home/css/common.css?v=2015226">
        <link rel="stylesheet" href="/Public/home/css/skill.css?v=2015226">
        <link rel="stylesheet" href="/Public/home/css/message.css?v=2015226">
        <link rel="stylesheet" href="/Public/home/css/software.css?v=2015226">
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
                        <a href="#">前端开发</a>
                        <a href="/index.php/Home/Hd/index">后端开发</a>
                        <a href="/index.php/Home/Software/index">软件手册</a>
                        <a href="#">视频分享</a>
                        <a href="/index.php/Home/Website/index">建站服务</a>
                        <a href="/index.php/Home/Message/index" class="mr0">联系站长</a>
                    </div>
                    <div class="head-nav-r">
                        <div class="search-panel">
                            <input type="text" class="search-text" id="searchText" placeholder="极客搜索">
                            <ol id="quickSearch">搜索历史啊</ol>
                            <input type="submit" class="search-button" value="搜索" id="searchBtn" data-val="0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- head - e -->

        <!-- content - s -->
        <div class="content-wrapper">

<table>
    <thead>
        <tr>
            <th width="70">编号</th>
            <th width="620">网站展示</th>
            <th>服务功能</th>
            <th width="70">服务价格</th>
            <th width="70">附加服务</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>服务1</td>
            <td>
                <dl class="fl">
                    <dt>前台模版</dt>
                    <dd class="picture">
                        <img src="/Public/home/img/website/q-1.png" width="300">
                        <div>点击查看大图</div>
                    </dd>
                </dl>
                <dl class="fl">
                    <dt>管理模版</dt>
                    <dd class="picture">
                        <img src="/Public/home/img/website/q-2.png" width="300">
                        <div>点击查看大图</div>
                    </dd>
                </dl>
            </td>
            <td>
                <dl class="pt10">
                    <dt>前台模版功能</dt>
                    <dd>
                        首页、关于我们、联系我们、<br>
                        企业展示、最新公告
                    </dd>
                </dl>
                <dl class="pt10">
                    <dt>管理模版功能</dt>
                    <dd>登录、管理内容</dd>
                </dl>
            </td>
            <td>&yen;500.00</td>
            <td>
                域名申请<br>
                空间申请<br>
                数据库申请<br>
                H5微站<br>
                数据采集<br>
            </td>
        </tr>
        <tr>
            <td>服务1</td>
            <td>
                <dl class="fl">
                    <dt>前台模版</dt>
                    <dd class="picture">
                        <img src="/Public/home/img/website/q-1.png" width="300">
                        <div>点击查看大图</div>
                    </dd>
                </dl>
                <dl class="fl">
                    <dt>管理模版</dt>
                    <dd class="picture">
                        <img src="/Public/home/img/website/q-2.png" width="300">
                        <div>点击查看大图</div>
                    </dd>
                </dl>
            </td>
            <td>
                <dl class="pt10">
                    <dt>前台模版功能</dt>
                    <dd>
                        首页、关于我们、联系我们、<br>
                        企业展示、最新公告
                    </dd>
                </dl>
                <dl class="pt10">
                    <dt>管理模版功能</dt>
                    <dd>登录、管理内容</dd>
                </dl>
            </td>
            <td>&yen;500.00</td>
            <td>
                域名申请<br>
                空间申请<br>
                数据库申请<br>
                H5微站<br>
                数据采集<br>
            </td>
        </tr>
    </tbody>
</table>

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

<script>
    $("table tbody tr:odd").css("background", "#ddd");
    $("tbody dl .picture").mouseenter(function(){
        $(this).children("div").fadeIn(300);
    });

    $("tbody dl .picture").mouseleave(function () {
        $(this).children("div").fadeOut(300);
    });
</script>