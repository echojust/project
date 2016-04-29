<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="/Public/admin/css/common.css">
        <script src="/Public/admin/js/jquery.js"></script>
        <script src="/Public/admin/js/base.js"></script>
        <script src="/Public/admin/editor/kindeditor-min.js"></script>
        <script src="/Public/admin/editor/lang/zh_CN.js"></script>
        <script>
            var editor;
            KindEditor.ready(function ( K ) {
                editor = K.create('textarea[name="content"]' , {
                    allowFileManager: true
                });
            });
        </script>
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

                <form action="#" method="post">
                    <table>
                        <tr>
                            <td>分类</td>
                            <td>
                                <select name="category_id" class="fl h32">
                                    <option value="-1">选择分类</option>
                                    <?php if(is_array($category)): $k = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($k % 2 );++$k;?><option value="<?php echo ($value["id"]); ?>">
                                            <?php if(($value["level"] == 0)): ?>&nbsp;&nbsp;
                                                <?php else: ?>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php endif; ?>
                                            <?php echo ($value["name"]); ?>
                                        </option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                                <p class="tip">请选择分类（必选）</p>
                            </td>
                        </tr>
                        <tr>
                            <td>标题</td>
                            <td>
                                <input type="text" name="title" class="input fl">
                                <p class="tip">标题不能为空啊</p>
                            </td>
                        </tr>
                        <tr>
                            <td>作者</td>
                            <td>
                                <input type="text" name="author" class="input fl" value="佚名">
                                <p class="tip">默认为佚名啊</p>
                            </td>
                        </tr>
                        <tr>
                            <td>内容</td>
                            <td>
                                <textarea name="content" style="min-height: 300px;"></textarea>
                                <p class="tip">内容不能为空啊</p>
                            </td>
                        </tr>
                        <tr>
                            <td>点击量</td>
                            <td>
                                <input type="text" name="hit" class="input" value="0">
                            </td>
                        </tr>
                        <tr>
                            <td>是否置顶</td>
                            <td>
                                <label><input type="radio" name="is_top" value="1">&nbsp;是</label>
                                &nbsp;&nbsp;
                                <label><input type="radio" name="is_top" value="0" checked>&nbsp;否</label>
                            </td>
                        </tr>
                        <tr>
                            <td>是否直接显示</td>
                            <td>
                                <label><input type="radio" name="is_display" value="1" checked>&nbsp;是</label>
                                &nbsp;&nbsp;
                                <label><input type="radio" name="is_display" value="0">&nbsp;否</label>
                            </td>
                        </tr>
                        <tr>
                            <td>创建时间</td>
                            <td>
                                <input type="text" name="create_time" class="input" value="2016">
                            </td>
                        </tr>
                        <tr>
                            <td>操作</td>
                            <td>
                                <input type="submit" name="submit" value="提交" class="submit">
                                <input type="reset" name="reset" value="重置" class="submit">
                            </td>
                        </tr>
                    </table>
                </form>

            </div>

        </div>
        </div>
    </body>
</html>