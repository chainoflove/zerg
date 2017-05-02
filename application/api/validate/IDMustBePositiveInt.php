<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/24 0024
 * Time: 14:44
 */

namespace app\api\validate;

use think\Validate;

class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];
//    自定义验证规则
    protected function isPositiveInteger($value, $rule='', $data='', $field = ''){
        if (is_numeric($value) && is_int($value + 0) && ($value + 0)>0){
            return true;
        }else{
            return $field.'必须是正整数';
        }
    }
}