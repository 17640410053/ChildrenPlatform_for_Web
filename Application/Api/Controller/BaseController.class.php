<?php

namespace Api\Controller;

use Think\Controller;

class BaseController extends Controller
{
    public static function json($code, $message = '', $data = array())
    {
        $result = array(
            'code' => $code,//状态
            'message' => urlencode($message),//提示信息
            'data' => $data//数据
        );
        return urldecode(json_encode($result));
    }
}