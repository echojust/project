<?php
/**
 * Created by PhpStorm.
 * User: dongbigen
 * Date: 2016/4/24
 * Time: 13:08
 */

/**
 * 分类管理控制器
 */
namespace Admin\Controller;

use Think\Controller;

class CategoryController extends AdminController
{
    public function indexCategory ()
    {
        $this->display();
    }

    public function listCategory ()
    {
        if ( IS_GET ) {
            $blog = D( "Category" );
            $categorys = $blog->select();
            $category = $blog->tree( $categorys , 0 , 0 );
            $this->assign( "category" , $category );
            $content = $this->fetch( "indexCategoryList" );
            echo $content;
        }
    }

    public function createCategory ()
    {
        $blog = D( "Category" );
        if ( IS_POST ) {
            $datas = I( "post." );
            $res = $blog->add( $datas );
            if ( $res ) {
                $this->success( "添加成功" , U( "createCategory" ) );
            }
            else {
                $this->error( "添加失败" , U( "createCategory" ) );
            }
        }
        else {
            $categorys = $blog->select();
            $category = $blog->tree( $categorys , 0 , 0 );
            $this->assign( "category" , $category );
            $this->display();
        }
    }

    public function updateCategory ()
    {
        if ( IS_GET ) {
            $id = I( "get.id" );
            $pd = I( "get.pd" );
            $cate = D( "Category" );

            $cates = $cate->find( $id );
            $parentId = $cate->where( "id=$pd" )->find();
            $categorys = $cate->select();
            $category = $cate->tree( $categorys , 0 , 0 );
            $this->assign( "category" , $category );
            $this->assign( "cates" , $cates );
            $this->assign( "parentId" , $parentId );
            $this->display();
        }
        else {
            $data = I( "post." );
            $id = I( "get.id" );
            $pd = I( "get.pd" );

            $cate = D( "Category" );
            $res = $cate->where( "id=$id" )->save( $data );
            if ( $res ) {
                $this->success( '修改成功' , U( 'indexCategory' ) );
            }
            else {
                $this->error( '修改失败' , U( "updateCategory" , array ( "id" => $id , "pd" => $pd ) ) );
            }
        }
    }

    public function deleteCategory ()
    {
        $id = I( "get.id" );
        $cate = D( "Category" );
        $result = $cate->where( "parent_id=$id" )->select();
        if ( $result ) {
            echo 1;
            die;
        }
        $res = $cate->delete( $id );
        if ( $res ) {
            $categorys = $cate->select();
            $category = $cate->tree( $categorys , 0 , 0 );
            $this->assign( "category" , $category );
            $content = $this->fetch( "indexCategoryList" );
            echo $content;
        }
        else {
            echo 2;
        }
    }
}



