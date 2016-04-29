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


            <div class="skill-detail-container oh">
                <div class="crumbs-nav oh">
                    <a href="#">前端技术</a>
                    <a href="#">HTML5</a>
                </div>
                <div class="concrete-content oh pt20">
        <pre>
        在日常开发中，大多数人的做法是在开发环境时开启调试模式，在产品环境关闭调试模式。在开发的时候可以查看各种错误、异常，但是在线上就把错误显示的关闭。

上面的情形看似很科学，有人解释为这样很安全，别人看不到错误，以免泄露重要信息...

但是你有没有遇到这种情况，线下好好的，一上线却运行不起来也找不到原因...

一个脚本，跑了好长一段时间，一直没有问题，有一天突然中断了，然后了也没有任何记录都不造啥原因...

线上一个付款，别人明明付了款，但是我们却没有记录到，自己亲自去实验，却是好的...



种种以上，都是因为大家关闭了错误信息，并且未将错误、异常记录到日志，导致那些随机发生的错误很难追踪。这样矛盾就来了，即不要显示错误，又要追踪错误，这如何实现了？

以上问题都可以通过PHP的错误、异常机制及其内建函数'set_exception_handler','set_error_handler','register_shutdown_function' 来实现



'set_exception_handler' 函数 用于拦截各种未捕获的异常，然后将这些交给用户自定义的方式进行处理

'set_error_handler' 函数可以拦截各种错误，然后交给用户自定义的方式进行处理

'register_shutdown_function' 函数是在PHP脚本结束时调用的函数，配合'error_get_last'可以获取最后的致命性错误



这个思路大体就是把错误、异常、致命性错误拦截下来，交给我们自定义的方法进行处理，我们辨别这些错误、异常是否致命，如果是则记录的数据库或者文件系统，然后使用脚本不停的扫描这些日志，发现严重错误立即发送邮件或发送短信进行报警



首先我们定义错误拦截类，该类用于将错误、异常拦截下来，用我们自己定义的处理方式进行处理，该类放在文件名为'errorHandler.class.php'中，代码如下</pre>
                </div>
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