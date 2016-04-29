<?php
/**
 * Created by PhpStorm.
 * User: dongbigen
 * Date: 2016/4/22
 * Time: 14:27
 */

namespace Home\Controller;

use Think\Controller;

class HdController extends Controller
{
    public function index ()
    {
        $blog = D("blog");

        $blogs = $blog->field("title,create_time,content")->select();
        $this->assign("blogs", $blogs);
        $this->display();
    }

    public function detail ()
    {
        $this->display();
    }
}