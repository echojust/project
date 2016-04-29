<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="/Public/admin/css/common.css">
        <script src="/Public/admin/js/jquery-1.8.3.min.js"></script>
        <script src="/Public/admin/js/base.js"></script>
    </head>

    <body>
        <div class="header-wrapper">
            <a href="/" class="fl">网站首页</a>
            <a href="/index.php/Admin/User/logout" class="fr">退出</a>
            <a href="#" class="fr"><?php echo (date('Y-m-d g:i a',time())); ?></a>
            <a href="#" class="fr"><?php echo (session('usernameBlog')); ?></a>
        </div>

        <div class="left-wrapper" id="left_wrapper">
            <ul id="left_nav">
                <li><a href="/index.php/Admin/Index/index" class="navTitle">管理首页</a></li>
                <li><a href="/index.php/Admin/Category/indexCategory" class="navTitle">分类管理</a></li>
                <li><a href="/index.php/Admin/Blog/indexBlog" class="navTitle">博客管理</a></li>
                <li><a href="#">采集管理</a></li>
                <li><a href="#">游客管理</a></li>
                <li><a href="#">留言管理</a></li>
                <li><a href="#">百度统计</a></li>
                <li><a href="/index.php/Admin/System/indexSystem" class="navTitle">系统设置</a></li>
            </ul>
        </div>

        <div class="right-wrapper">


<div class="right-content-container">

    <form action="/index.php/Admin/Category/updateCategory/id/<?php echo ($cates["id"]); ?>/pd/<?php echo ($parentId['id']); ?>" method="post">
        <table>
            <tbody>
                <tr>
                    <td>分类</td>
                    <td>
                        <input type="text" name="name" value="<?php echo ($cates["name"]); ?>" class="input fl">
                        <p class="tip">一篇博客所属的分类，比如：HTML（不能为空）</p>
                    </td>
                </tr>
                <tr>
                    <td>上级分类:</td>
                    <td>
                        <select name="parent_id" class="fl h32">
                            <option value="0">顶级分类</option>
                            <?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i; if(($value["id"] == $parentId['id'])): ?><option value="<?php echo ($value["id"]); ?>" selected>
                                    <?php else: ?>
                                    <option value="<?php echo ($value["id"]); ?>"><?php endif; ?>
                                    <?php if(($value["level"] == 0)): ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php else: ?>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php endif; ?>
                                    <?php echo ($value["name"]); ?>
                                </option><?php endforeach; endif; else: echo "" ;endif; ?>
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
            </tbody>
        </table>
    </form>

    </div>
</div>
</body>
</html>