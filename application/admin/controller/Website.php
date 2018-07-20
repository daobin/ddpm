<?php

namespace app\admin\controller;

use app\common\controller\Controller;
use app\common\service\configuration\Configuration;

class Website extends Controller
{
    public function index(){
        $this->assign('config_list', Configuration::scope('list'));
        return $this->fetch();
    }

    public function kbapi(){
        $username = '道斌测试';
        $password = substr(md5('shouwen_lai1'), 8, 16);
        $sid = uniqid().time();

        $jsonData = [
            'username' => $username,
            'sid' => $sid,
            'sign' => md5($username.$password.$sid)
        ];
        $jsonData = json_encode($jsonData);

        $url = 'http://www.gogokb.com/API/GetKd';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: applicaqtion/json; charset=utf-8',
            'Content-Length: '.strlen($jsonData)
        ]);
        $response = curl_exec($ch);

        header('Content-type: text/html; charset=UTF-8');
        dump(json_decode($response, true));
        return '--';
    }
}
