<?php if (!defined('THINK_PATH')) exit(); if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><tr>
        <td><?php echo ($value["id"]); ?></td>
        <td>
            <?php if(($value["level"] == 0)): ?><span class="firstCate"><?php echo ($value["name"]); ?></span>
                <?php else: ?>
                <span class="secondCate"><?php echo ($value["name"]); ?></span><?php endif; ?>

        </td>
        <td>
            <a href="/index.php/Admin/Category/updateCategory/id/<?php echo ($value["id"]); ?>/pd/<?php echo ($value["parent_id"]); ?>">修改</a>
            |
            <span class="delete" data-id="<?php echo ($value["id"]); ?>">删除</span>
        </td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>