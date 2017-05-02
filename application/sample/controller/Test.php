<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/21 0021
 * Time: 16:06
 */

namespace app\sample\controller;

use think\Request;

class Test
{
    public function hello(Request $request){
        /*$id = Request::instance()->param('id');
        $name = Request::instance()->param('name');
        $age = Request::instance()->param('age');
        echo $id;
        echo '|';
        echo $name;
        echo '|';
        echo $age;*/
//        $all = Request::instance()->param();//1
//        $all = input('param.');//2
        $all = $request->param();//3.通过参数
        var_dump($all);
        echo json_encode($all);
//        $all = $request->param();
//        $name = Request::instance()->param('name');
//        $age = Request::instance()->param('age');
//        var_dump($all);
//        return 'hello, shenjiani!';
    }
}