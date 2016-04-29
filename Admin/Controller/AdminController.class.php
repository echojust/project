<?php
/**
 * Created by PhpStorm.
 * User: dongbigen
 * Date: 2016/4/25
 * Time: 15:45
 */

/**
 * 后台共用控制器
 * 防止翻墙操作
 */
namespace Admin\Controller;

use Think\Controller;

class AdminController extends Controller
{
    public function __construct ()
    {
        parent::__construct();

        $username = session( 'usernameBlog' ) ? session( 'usernameBlog' ) : 0;
        $password = session( 'passwordBlog' ) ? session( 'passwordBlog' ) : 0;

        if ( !( $username || $password ) ) {
            $this->redirect( "User/index" );
            die;
        }
    }
}