<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="/Public/home/css/logreg.css?v=2015226">
    </head>
    <body>

        <div class="center-style">
            <h1>
                <a href="/index.php/Home/index/index">
                    <img src="/Public/home/img/head/logo.png">
                </a>
            </h1>

            <div class="inner-wrapper">
                <div class="inner-left">
                    <h2>欢迎登录</h2>
                    <div class="submit-info">
                        <input type="text" placeholder="手机 / 用户名 / 邮箱" class="text-area">
                        <p class="tip">请输入手机 / 用户名 / 邮箱</p>
                        <input type="password" placeholder="输入6-32位密码" class="text-area">
                        <p class="tip">请输入6-32位密码</p>
                        <div class="user-tip">
                            <a href="#">忘记密码</a>
                        </div>
                        <input type="submit" class="submit" value="确认登录">
                    </div>
                </div>
                <div class="inner-right">
                    <p class="link-more">没有账号？<a href="index.php?c=f/Register&a=index">免费注册</a></p>
                    <div class="more-benefit">
                        注册后可以？<br>
                        1、分享的开源软件和IT技术心得<br>
                        2、参与开源软件/新闻的讨论和评论<br>
                        3、与技术人士进行讨论和交流
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>