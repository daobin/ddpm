<?php

namespace app\admin\widget;

use app\common\constant\Route;
use app\common\controller\Widget;

class Header extends Widget
{
    public function index()
    {
        $this->assign('time_greeting', date('A') == 'AM' ? '上午好' : '下午好');
        $this->assignNavigation();
        return $this->fetch('widget/header/index');
    }

    private function assignNavigation()
    {
        $navs = [
            [
                'name' => '管理首页',
                'url' => url(Route::ADMIN_HOME)
            ],
            [
                'name' => '网站配置',
                'url' => url(Route::ADMIN_WEBSITE)
            ],
            [
                'name' => '会员管理',
                'sub_navs' => [
                    [
                        'name' => '会员列表',
                        'url' => url(Route::ADMIN_USER)
                    ],
                    [
                        'name' => '会员等级',
                        'url' => url(Route::ADMIN_USER_LEVEL)
                    ]
                ]
            ],
            [
                'name' => '管理权限',
                'sub_navs' => [
                    [
                        'name' => '管理员列表',
                        'url' => url(Route::ADMIN_ADMIN)
                    ],
//                    [
//                        'name' => '管理组列表',
//                        'url' => url(Route::ADMIN_ADMIN_GROUP)
//                    ]
                ]
            ],
        ];

        $this->assign('navs', $navs);
    }
}