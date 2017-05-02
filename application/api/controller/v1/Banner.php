<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/24 0024
 * Time: 12:28
 */

namespace app\api\controller\v1;

use app\api\validate\IDMustBePositiveInt;
use app\api\validate\TestValidate;
use think\Validate;

class Banner
{
    /**
     * @param $id
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @id banner的id号
     */
    public function getBanner($id){
//        独立验证
//        验证器
        /*$data = [
            'name' => 'vendor1111111111',
            'email' => 'vendor@qq.com'
        ];
        $validate = new Validate([
            'name' => 'require|max:10',
            'email' => 'email'
        ]);
//        $validate = new TestValidate();
        $result = $validate->batch()->check($data);
        var_dump($validate->getError());
        var_dump($result);*/
        $data = [
            'id'=>$id
        ];
        (new IDMustBePositiveInt())->goCheck();
        $c =1;
        echo $c;
    }
}