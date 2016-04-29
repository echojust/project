<?php
/**
 * Created by PhpStorm.
 * User: dongbigen
 * Date: 2016/4/22
 * Time: 14:27
 */

/**
 * 用户登录，验证，退出登录控制器
 */
namespace Admin\Controller;

use Think\Controller;

use Think\Verify;

class UserController extends Controller
{
    public function index ()
    {
        if ( IS_POST ) {
            $data = I( "post." );
            $verify = new Verify();
            $res = $verify->check( $data["code"] );
            if ( $res ) {
                $username = $data["username"];
                $password = $data["password"];

                $this->checkUserPwd( $username , $password );
            }
            else {
                $this->error( "验证码错误" , U( "index" ) );
            }
        }
        else {
            $this->display();
        }
    }

    public function checkUserPwd ( $username , $password )
    {
        if ( !( $username || $password ) ) {
            $this->error( "用户名或密码不正确" , U( "index" ) );
        }

        $password = md5( $password );

        $admin = D( "Admin" );
        $res = $admin->where( "username='$username' and password='$password'" )->find();
        if ( $res ) {
            $login_times = $admin->field( "login_times" )->find();

            $ip = get_client_ip();
            $times = $login_times["login_times"];
            $times += 1;

            $data = array (
                "id" => 1 ,
                "login_ip" => $ip ,
                "login_times" => $times
            );

            $admin->save( $data );

            session( 'usernameBlog' , $username );
            session( 'passwordBlog' , $password );

            $this->success( "欢迎登录管理后台" , U( "Index/index" ) );
        }
        else {
            $this->error( "用户名或密码错误" , U( "index" ) );
        }
    }

    public function captcha ()
    {
        $cfy = array (
            'fontSize' => 14 ,
            "imageW" => 100 ,
            "imageH" => 40 ,
            'length' => 4 ,
            "fontttf" => "5.ttf"
        );

        $verify = new Verify( $cfy );
        $verify->entry();
    }

    public function logout ()
    {
        session( null );
        $this->error( "正在退出。。。" , U( "User/index" ) );
        die;
    }
}