<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/24 0024
 * Time: 15:07
 */

namespace app\api\validate;


use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck(){
//        获取http传入的参数
//        对这些参数做检验
        $request = Request::instance();
        $params = $request->param();
        $result = $this->check($params);
        if (!$result){
            $error = $this->getError();
            throw new Exception($error);
        }else{
            return true;
        }
    }
}