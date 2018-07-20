<?php
/**
 * 前台首页控制器
 */

namespace app\index\controller;

use app\common\controller\Controller;

class Index extends Controller
{
    public function index(){
        return $this->fetch();
    }
}

