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

            <div class="station-master oh fl">
                <div class="basic-info oh bgfff">
                    <div class="head-portrait oh fl"><img src="/Public/home/img/master/mine.png"></div>
                    <div class="person-info oh fl">
                        <ul class="pt10 fs12">
                            <li><span>昵&nbsp;&nbsp;称：</span>追风的男孩儿</li>
                            <li><span>年&nbsp;&nbsp;龄：</span>25</li>
                            <li><span>爱&nbsp;&nbsp;好：</span>编程、思考、上网、追风</li>
                            <li><span>个人铭句：</span>相信自己你能信，你就能行！！！</li>
                        </ul>
                    </div>
                </div>
                <div class="basic-info oh bgfff">
                    <h3>联系方式</h3>
                    <ul class="contact oh fs12 pt10">
                        <li><span>扣&nbsp;&nbsp;扣：</span>3186428954</li>
                        <li><span>邮&nbsp;&nbsp;箱：</span>3186428954@qq.com</li>
                    </ul>
                </div>
                <div class="basic-info oh bgfff">
                    <h3>本站简介</h3>
                    <div class="explain oh fs12 pt10">记不清是什么时候开始写博客了，在我看来博客只是一个仓库的作用，把我所有的情感存储在这里。
                                                      拒绝抄袭，坚持原创！是我一贯的口号，本站原创内容达99%以上；当前站点上，主要是一些我的个人日志，生活、工作
                                                      、学习程序相关资料搜集整理；主要涉及互联网、数码、电脑、手机，网站编程等领域。
                                                      在05年的时候我还不会开发程序，所以很长一段时间都在使用网上一些开源的程序，如Z-Blog、WordPress等。
                                                      在2013年的时候开始计划自己开发一个符合自己使用习惯的博客程序，最终决定采用比较新的HTML5、CSS3，经过一年
                                                      多时间的运用再加上慢慢的完善，形成了现在您看到的样子。
                    </div>
                </div>
                <div class="basic-info oh bgfff">
                    <h3>个人说明</h3>
                    <div class="explain oh fs12 pt10">记不清是什么时候开始写博客了，在我看来博客只是一个仓库的作用，把我所有的情感存储在这里。
                                                      拒绝抄袭，坚持原创！是我一贯的口号，本站原创内容达99%以上；当前站点上，主要是一些我的个人日志，生活、工作
                                                      、学习程序相关资料搜集整理；主要涉及互联网、数码、电脑、手机，网站编程等领域。
                                                      在05年的时候我还不会开发程序，所以很长一段时间都在使用网上一些开源的程序，如Z-Blog、WordPress等。
                                                      在2013年的时候开始计划自己开发一个符合自己使用习惯的博客程序，最终决定采用比较新的HTML5、CSS3，经过一年
                                                      多时间的运用再加上慢慢的完善，形成了现在您看到的样子。
                    </div>
                </div>
            </div>
            <div class="message-container oh fr bgfff">
                <div class="message-box oh">
                    <textarea placeholder="扯淡、吐槽、表扬、鼓励……想说啥就说啥！"></textarea>
                    <span class="mt20 fs12">0/100</span>
                    <input type="submit" value="确认留言" class="mt20">
                </div>
                <div class="message-list oh fs12">
                    <ul>
                        <li>
                            <div><span>机器猫</span><em>2016/11/04 10:34:12</em></div>
                            <p>开发免费程序，与一些商业程序来比，肯定会有一些不足的地方，有时候得不到理解，得到的是一些讥讽、谩骂...想法更多的是要放弃，但最终还是坚持了下来。</p>
                        </li>
                        <li>
                            <div><span>机器猫</span><em>2016/11/04 10:34:12</em></div>
                            <p>开发免费程序，与一些商业程序来比，肯定会有一些不足的地方，有时候得不到理解，得到的是一些讥讽、谩骂...想法更多的是要放弃，但最终还是坚持了下来。</p>
                        </li>
                        <li>
                            <div><span>机器猫</span><em>2016/11/04 10:34:12</em></div>
                            <p>开发免费程序，与一些商业程序来比，肯定会有一些不足的地方，有时候得不到理解，得到的是一些讥讽、谩骂...想法更多的是要放弃，但最终还是坚持了下来。</p>
                        </li>
                        <li>
                            <div><span>机器猫</span><em>2016/11/04 10:34:12</em></div>
                            <p>开发免费程序，与一些商业程序来比，肯定会有一些不足的地方，有时候得不到理解，得到的是一些讥讽、谩骂...想法更多的是要放弃，但最终还是坚持了下来。</p>
                        </li>
                        <li>
                            <div><span>机器猫</span><em>2016/11/04 10:34:12</em></div>
                            <p>开发免费程序，与一些商业程序来比，肯定会有一些不足的地方，有时候得不到理解，得到的是一些讥讽、谩骂...想法更多的是要放弃，但最终还是坚持了下来。</p>
                        </li>
                    </ul>
                    <span class="loading-more">加载更多</span>
                </div>
            </div>
        </div>
        <!-- content - e -->

        <!-- foot - s -->
        <div class="foot-wrapper">
            <div class="foot-container">
                Copyright © 2015 - 2016 极术style . All Rights Reserved. 京ICP备15056776号-1
            </div>
        </div>
        <!-- foot - e -->
    </body>
</html>