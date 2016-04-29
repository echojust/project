<?php

/**
 * Created by PhpStorm.
 * User: dongbigen
 * Date: 2016/4/24
 * Time: 10:06
 */

namespace Admin\Model;

use Think\Model;

class BlogModel extends Model
{
    public function blogsTotal ()
    {
        return $this->field( 'blog.*,category.name' )->join( "category ON blog.category_id = category.id" )->where( "is_delete=0" )->select();
    }

    public function allBlogs ( $offset , $showrow )
    {
        return $this->field( 'blog.*,category.name' )->join( "category ON blog.category_id = category.id" )->where( "is_delete=0" )->limit( $offset , $showrow )->select();
    }
}