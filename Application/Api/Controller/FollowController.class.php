<?php

namespace Api\Controller;

use Think\Controller;

class FollowController extends BaseController
{
    public function IfFollow()
    {
        $follow_sql = M('follow');
        $check['company_id'] = $_GET['company_id'];
        $check['user_id'] = $_GET['user_id'];
        $data = $follow_sql->where($check)->find();
        if ($data == null) {
            echo self::json("200", "+ 关注", "");
        } else {
            echo self::json("200", "已关注", "");
        }
    }

    public function Follow()
    {
        $follow_sql = M('follow');
        $check['company_id'] = $_GET['company_id'];
        $check['user_id'] = $_GET['user_id'];
        $data = $follow_sql->where($check)->find();
        if ($data == null) {
            $check['followTime'] = date('Y-m-d H:i:s');
            if (false != $follow_sql->add($check)) {
                echo self::json("200", "已关注", "");
            } else {
                echo self::json("404", "数据错误", "");
            }
        } else {
            if (false != $follow_sql->where($check)->delete($check)) {
                echo self::json("200", "+ 关注", "");
            }else{
                echo self::json("404", "数据错误", "");}
        }
    }
}