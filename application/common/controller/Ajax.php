<?php
/**
 * 所有Ajax控制器基类
 */

namespace app\common\controller;

class Ajax extends Controller
{
    public function _initialize()
    {
        parent::_initialize();
        $this->view->engine->layout(false);

        if(!$this->request->isAjax()){
            $this->echoDataFormatToJson();
        }
    }

    public function echoDataFormatToJson($data = null){
        if(empty($data) || !is_array($data)){
            $data = ['status'=>'fail', 'msg'=>'资源请求无效 || 返回数据无效'];
        }

        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }
}