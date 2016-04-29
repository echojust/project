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
                <li><a href="#">回收站</a></li>
            </ul>
        </div>

        <div class="right-wrapper">


<div class="right-content-container">

    <div class="choose-category">
        <span class="select-category">选择分类</span>
        <select name="parent_id" id="firstCategory" class="h26" style="padding: 0 10px;">
            <option value="0">一级分类</option>
        </select>
        <select name="parent_id" id="secondCategory" class="h26" style="padding: 0 10px;">
            <option value="0">二级分类</option>
        </select>
    </div>

    <a href="/index.php/Admin/Blog/createBlog" class="add-button">+ 添加博客</a>

    <a href="#" class="add-button delBtn" style="margin-left: 20px">- 批量删除</a>

    <table>
        <thead>
            <tr>
                <th>删除</th>
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

        </tbody>
    </table>

    <div class="page-container"></div>
</div>

</div>
</div>
</body>
</html>
<script>
    /**
     * 初始化全部分类
     */
    $.ajax({
        url: "/index.php/Admin/Blog/showCategory",
        data: "parent_id=0",
        dataType: "json",
        type: "post",
        success: function ( msg ) {
            for ( var i = 0; i < msg.length; i ++ ) {
                var op = new Option(msg[i].name, msg[i].id);
                document.getElementById("firstCategory").options.add(op);
            }
        }
    });

    /**
     * 点击顶级分类，显示二级分类信息
     * @returns {boolean}
     */
    document.getElementById("firstCategory").onchange = function () {
        var id = this.value;

        if ( id == 0 ) {
            document.getElementById("secondCategory").length = 1;
            return false;
        }

        $.ajax({
            url: "/index.php/Admin/Blog/showCategory",
            data: "parent_id=" + id,
            dataType: "json",
            type: "post",
            success: function ( msg ) {
                document.getElementById("secondCategory").length = 1;
                for ( var i = 0; i < msg.length; i ++ ) {
                    var op = new Option(msg[i].name, msg[i].id);
                    document.getElementById("secondCategory").options.add(op);
                }
            }
        });
    }

    /**
     * 初始化显示列表信息
     */
    $.ajax({
        url: "/index.php/Admin/Blog/showBlog/",
        data: null,
        dataType: "json",
        type: "get",
        success: function ( msg ) {
            $("tbody").html(msg[0]);
            $(".page-container").html(msg[1]);
        }
    });

    /**
     * 分页展示数据
     */
    $(".page-container").on("click", "a", function () {
        var page = $(this).attr("data-href");
        $.ajax({
            url: "/index.php/Admin/Blog/showBlog/page/" + page,
            data: null,
            dataType: "json",
            type: "get",
            success: function ( msg ) {
                $("tbody").html(msg[0]);
                $(".page-container").html(msg[1]);
            }
        });
    });

    /**
     * 删除单条数据 -> 逻辑删除 -> 回收站
     */
    $("tbody").on("click", ".delete", function () {
        if ( ! confirm("确认删除吗") ) {
            return false;
        }

        var id = $(this).attr("data-id");
        var page = $(this).attr("data-page");
        $.ajax({
            url: "/index.php/Admin/Blog/deleteBlog/id/" + id + "/page/" + page,
            data: null,
            dataType: "json",
            type: "get",
            success: function ( msg ) {
                if ( msg ) {
                    $("tbody").html(msg[0]);
                    $(".page-container").html(msg[1]);
                    alert("删除成功");
                } else {
                    alert("删除失败");
                }
            }
        });
    });

    /**
     * 批量删除 -> 逻辑删除 -> 回收站
     */
    $(".delBtn").on("click", function () {
        var page = null;
        var id = [];

        $("tbody tr td input").each(function () {
            if ( $(this).attr("checked") ) {
                id.push($(this).val());
                page = $("tbody tr td .delete").attr("data-page");
            }
        });

        if ( page != null && id.length != 0 ) {
            if ( ! confirm("确认删除这" + id.length + "条数据吗") ) {
                return false;
            }

            $.ajax({
                url: "/index.php/Admin/Blog/deleteBlog/id/" + id + "/page/" + page,
                data: null,
                dataType: "json",
                type: "get",
                success: function ( msg ) {
                    if ( msg ) {
                        $("tbody").html(msg[0]);
                        $(".page-container").html(msg[1]);
                        alert("删除成功");
                    } else {
                        alert("删除失败");
                    }
                }
            });
        } else {
            alert("没有选择要删除数据");
        }
    })
</script>