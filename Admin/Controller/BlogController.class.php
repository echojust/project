<?php
/**
 * Created by PhpStorm.
 * User: dongbigen
 * Date: 2016/4/24
 * Time: 13:13
 */


/**
 * 博客管理控制器
 */
namespace Admin\Controller;

use Think\Controller;

use Think\Pages;

class BlogController extends AdminController
{
    public function indexBlog ()
    {
        $this->display();
    }

    public function showCategory ()
    {
        $id = I( "POST.parent_id" );
        $Category = D( "Category" );
        $res = $Category->chooseCategory( $id );
        echo json_encode( $res );
    }

    public function showBlog ()
    {
        if ( IS_GET ) {
            $blog = D( "Blog" );

            $curpage = I( "get.page" ) ? I( "get.page" ) : 1;

            $showrow = 10;
            $blogs = $blog->blogsTotal();
            $total = count( $blogs );
            $url = "{page}";

            if ( !empty( $_GET["page"] ) && $total != 0 && $curpage > ceil( $total / $showrow ) ) {
                $curpage = ceil( $total / $showrow );
            }

            if ( $total > $showrow ) {
                $page = new Pages( $total , $showrow , $curpage , $url , 2 );
                $returnPages = $page->myde_write();
            }
            else {
                $returnPages = "";
            }

            $offset = ( $curpage - 1 ) * $showrow;
            $allBlogs = $blog->allBlogs( $offset , $showrow );

            $this->assign( "allBlogs" , $allBlogs );
            $this->assign( "curpage" , $curpage );
            $str = $this->fetch( "indexBlogList" );

            $json = array ();
            $json[] = $str;
            $json[] = $returnPages;

            echo json_encode( $json );
        }
    }

    public function createBlog ()
    {
        $cate = D( "Category" );
        $categorys = $cate->select();
        $category = $cate->tree( $categorys , 0 , 0 );
        $this->assign( "category" , $category );
        $this->display();
    }

    public function updateBlog ()
    {

    }

    public function deleteBlog ()
    {
        /**
         * 删除数据，单个或者多个  同一个方法
         * where( "id in ($id)" )
         */
        $id = I( "get.id" );
        $page = I( "get.page" );

        $blog = D( "Blog" );
        $data["is_delete"] = 1;
        $res = $blog->where( "id in ($id)" )->save( $data );

        if ( $res > 0 ) {
            $this->showBlog();
        }
        else {
            echo 0;
        }
    }
}

