<?php

namespace app\index\widget;

use app\common\controller\Widget;

class Footer extends Widget
{
    public function index(){

        return $this->fetch('widget/footer/index');
    }
}