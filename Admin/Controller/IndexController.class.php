<?php

/**
 * Created by PhpStorm.
 * User: dongbigen
 * Date: 2016/4/22
 * Time: 14:27
 */

/**
 * 首页控制器
 */
namespace Admin\Controller;

use Think\Controller;

class IndexController extends AdminController
{
    public function index ()
    {
        $ip = get_client_ip();
        $loginTime = date( "Y年m月d日" );
        $this->assign( "ip" , $ip );
        $this->assign( "loginTime" , $loginTime );
        $this->display();
    }
}