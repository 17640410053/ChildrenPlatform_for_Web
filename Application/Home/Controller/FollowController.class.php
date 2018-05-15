<?php

namespace Home\Controller;

use Think\Controller;

class FollowController extends BaseController
{
    public function un_follow()
    {
        $follow_sql = M('follow');
        if (I('post.user_id') != I('session.user_id')) {
            $temp = "请重新登录后再试！";
            echo json_encode($temp);
        } else {
            if (false !== $follow_sql->where("follow_id=" . I('post.follow_id'))->delete()) {
                $temp = "取消成功！";
                echo json_encode($temp);
            } else {
                $temp = "网络繁忙！";
                echo json_encode($temp);
            }
        }
    }
}