<?php

namespace app\index\widget;

use app\common\constant\Route;
use app\common\controller\Widget;

class Meta extends Widget
{
    public function index(){
        $this->assignCss();
        $this->assignTKD();
        return $this->fetch('widget/meta/index');
    }

    private function assignCss(){
        $cssHrefs = ['index/css/global.css'];
        switch ($this->route){
            case Route::HOME:
                break;
        }

        $this->assign('css_hrefs', $cssHrefs);
    }

    private function assignTKD(){
        $tkd = [
            'title' => '',
            'keywords' => '',
            'description' => ''
        ];

        $this->assign('tkd', $tkd);
    }

}