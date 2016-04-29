<?php if (!defined('THINK_PATH')) exit(); if(is_array($allBlogs)): $i = 0; $__LIST__ = $allBlogs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        <td class="t-cen"><input type="checkbox" value="<?php echo ($vo["id"]); ?>" name="del[]"></td>
        <td><?php echo ($vo["id"]); ?></td>
        <td><?php echo ($vo["name"]); ?></td>
        <td><?php echo ($vo["author"]); ?></td>
        <td><?php echo (mb_substr(strip_tags(htmlspecialchars_decode($vo["title"])),0,10,'utf-8')); ?></td>
        <td><?php echo ($vo["hit"]); ?></td>
        <td><?php echo ($vo["is_top"]); ?></td>
        <td><?php echo ($vo["is_display"]); ?></td>
        <td><?php echo ($vo["create_time"]); ?></td>
        <td><?php echo ($vo["update_time"]); ?></td>
        <td>
            <a href="#">修改</a>
            |
            <span class="delete" data-id="<?php echo ($vo["id"]); ?>" data-page="<?php echo ($curpage); ?>">删除</span>
            |
            <a href="#">详情</a>
        </td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>