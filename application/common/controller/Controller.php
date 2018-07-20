<?php
/**
 * 所有控制器基类
 */

namespace app\common\controller;

class Controller extends \think\Controller
{
    /**
     * @var 页面访问路由
     */
    public $route;

    /**
     * 初始化工作
     */
    public function _initialize()
    {
        parent::_initialize();

        //初始化页面访问路由
        $routeInfo = $this->request->routeInfo();
        if (isset($routeInfo['route'])) {
            $this->route = trim($routeInfo['route']);
        } else {
            $this->route = trim($this->request->module());
            $this->route .= '/' . trim($this->request->controller());
            $this->route .= '/' . trim($this->request->action());
        }
        $this->route = strtolower($this->route);
    }
}

