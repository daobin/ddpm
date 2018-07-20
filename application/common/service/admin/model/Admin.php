<?php

namespace app\common\service\admin\model;

use app\common\service\Model;

class Admin extends Model
{
    public function adminGroup()
    {
        return $this->belongsTo('AdminGroup');
    }
}