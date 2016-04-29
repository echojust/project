<?php
/**
 * Created by PhpStorm.
 * User: dongbigen
 * Date: 2016/4/24
 * Time: 19:15
 */

namespace Admin\Model;

use Think\Model;

class CategoryModel extends Model
{
    public function tree ( $categorys , $parentId = 0 , $level = 0 )
    {
        static $categoryTrees = array ();

        foreach ( $categorys as $value ) {
            if ( $value["parent_id"] == $parentId ) {
                $value["level"] = $level;
                $categoryTrees[] = $value;

                $this->tree( $categorys , $value["id"] , $level + 1 );
            }
        }

        return $categoryTrees;
    }

    public function chooseCategory ( $id )
    {
        return $this->where( "parent_id=$id" )->select();
    }
}