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
                    <h2>欢迎注册</h2>
                    <div class="submit-info">
                        <input type="text" placeholder="手机 / 用户名 / 邮箱" class="text-area">
                        <p class="tip">请输入手机 / 用户名 / 邮箱</p>
                        <input type="password" placeholder="输入6-32位密码" class="text-area">
                        <p class="tip">请输入6-32位密码</p>
                        <input type="password" placeholder="输入6-32位密码" class="text-area">
                        <p class="tip">请确认密码</p>
                        <div class="code-box">
                            <input type="text" placeholder="验证码" class="text-area code">
                            <span class="imgcode"><img src="/Public/home/img/logreg/code.jpg"></span>
                            <i class="again"></i>
                        </div>
                        <p class="tip">请输入验证码</p>
                        <input type="submit" class="submit" value="确认提交">
                    </div>
                </div>
                <div class="inner-right">
                    <p class="link-more">已有账号？<a href="index.php?c=f/Login&a=index">立即登录</a></p>
                    <div class="more-benefit">
                        登陆后可以？<br>
                        1、分享的开源软件和IT技术心得<br>
                        2、参与开源软件/新闻的讨论和评论<br>
                        3、与技术人士进行讨论和交流
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>