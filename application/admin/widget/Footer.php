<?php

namespace app\admin\widget;

use app\common\constant\Route;
use app\common\controller\Widget;

class Footer extends Widget
{
    public function index(){
        $this->assignJs();
        return $this->fetch('widget/footer/index');
    }

    private function assignJs(){
        $jsSrcs = ['admin/js/global.js'];
        switch ($this->route){
            case Route::ADMIN_HOME:
                break;
        }

        $this->assign('js_srcs', $jsSrcs);
    }
}