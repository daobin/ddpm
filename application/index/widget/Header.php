<?php

namespace app\index\widget;

use app\common\controller\Widget;

class Header extends Widget
{
    public function index()
    {
        return $this->fetch('widget/header/index');
    }
}