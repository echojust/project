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
                <li><a href="/index.php/Admin/Category/index">分类管理</a></li>
                <li><a href="#">博客管理</a></li>
                <li><a href="#">采集管理</a></li>
                <li><a href="#">游客管理</a></li>
                <li><a href="#">用户管理</a></li>
                <li><a href="#">留言管理</a></li>
                <li><a href="#">百度统计</a></li>
                <li><a href="#">系统设置</a></li>
            </ul>
        </div>

        <div class="right-wrapper">
            <div class="right-content-container">

                <a href="index.php?c=b/Blog&a=create" class="add-button">+ 添加博客</a>

                <form action="#" class="fr">
                    <span class="select-category">选择分类</span>
                    <select name="parent_id" class="h26" style="padding: 0 10px;">
                        <option value="0">全部分类</option>
                        <option value="1">前端</option>
                        <option value="1">后端</option>
                    </select>
                    <select name="parent_id" class="h26" style="padding: 0 10px;">
                        <option value="0">全部分类</option>
                        <option value="1">html5</option>
                        <option value="1">css3</option>
                        <option value="1">php</option>
                        <option value="1">linux</option>
                    </select>
                </form>

                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>所属分类</th>
                            <th>作者</th>
                            <th>标题</th>
                            <th>点击量</th>
                            <th>是否置顶</th>
                            <th>是否上线</th>
                            <th>创建时间</th>
                            <th>更新时间</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                <a href="#">修改</a>
                                |
                                <a href="#" onclick="return confirm('确认删除吗？')">删除</a>
                                |
                                <a href="#">详情</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="page-container">分页</div>

            </div>

            </div>
        </div>
    </body>
</html>