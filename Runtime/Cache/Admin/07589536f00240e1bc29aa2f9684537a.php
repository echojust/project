<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="/Public/admin/css/admin.css">
    </head>
    <body>
        <div class="root">
            <div id="login">
                <p>管理系统</p>
                <form action="#" method="post">
                    <input type="text" name="username" placeholder="管理员账号" id="username" value="">
                    <input type="password" name="password" placeholder="管理员密码" id="password" value="">
                    <input type="text" placeholder="验证码" id="code" name="code">
				<span id="codeBox">
					<img src="index.php?c=b/login&a=captcha" id="codeImg">
					<i id="codeTip">刷新</i>
				</span>
                    <input type="submit" value="登录" id="true" name="submit">
                </form>
            </div>
        </div>
    </body>
</html>
<script>
    var codeTip = document.getElementById("codeTip");
    var codeImg = document.getElementById("codeImg");
    codeTip.onclick = function () {
        codeImg.src = 'index.php?c=b/login&a=captcha&again=' + Math.random();
    }
</script>