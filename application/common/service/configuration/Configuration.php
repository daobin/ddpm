<?php
namespace app\common\service\configuration;

use app\common\service\Model;

class Configuration extends Model {
    public function scopeList($query, $condition = null){
        $where = [];

        if(!empty($condition) && is_a($condition)){
            foreach($condition as $field=>$val){
                switch($field){
                    case 'group':
                        $where['group'] = trim($val);
                        break;
                }
            }
        }
        if(!empty($where)){
            $query->where($where);
        }
        $query->field(true)->order(['sort' => 'asc', 'configuration_id' => 'asc']);
    }
}