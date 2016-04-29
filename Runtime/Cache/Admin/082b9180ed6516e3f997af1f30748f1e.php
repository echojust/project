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

                <a href="/index.php/Admin/Blog/createBlog" class="add-button">+ 添加博客</a>

                <form action="#">
                    <span class="select-category">选择分类</span>
                    <select name="parent_id" class="h26" style="padding: 0 10px;">
                        <option value="0">顶级分类</option>
                        <option value="1">后端</option>
                    </select>
                    <select name="parent_id" class="h26" style="padding: 0 10px;">
                        <option value="0">二级分类</option>
                        <option value="1">html5</option>
                    </select>
                </form>

                <table>
                    <thead>
                        <tr>
                            <th>批量处理</th>
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
                        <?php if(is_array($blogs)): $i = 0; $__LIST__ = $blogs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td><input type="radio"></td>
                                <td>
                                    <?php echo ($vo["id"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["name"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["author"]); ?>
                                </td>
                                <td>
                                    <?php echo (mb_substr(strip_tags(htmlspecialchars_decode($vo["title"])),0,10,'utf-8')); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["hit"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["is_top"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["is_display"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["create_time"]); ?>
                                </td>
                                <td>
                                    <?php echo ($vo["update_time"]); ?>
                                </td>
                                <td>
                                    <a href="#">修改</a>
                                    |
                                    <a href="#" onclick="return confirm('确认删除吗？')">删除</a>
                                    |
                                    <a href="#">详情</a>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>

                <div class="page-container">分页</div>

            </div>

        </div>
        </div>
    </body>
</html>