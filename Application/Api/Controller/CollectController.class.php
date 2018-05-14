<?php

namespace Api\Controller;

use Think\Controller;

class CollectController extends BaseController
{
    public function IsCollect()
    {
        $collect_sql = M('collect');
        $check['commodity_id'] = $_GET['commodity_id'];
        $check['user_id'] = $_GET['user_id'];
        $isCollect = $collect_sql->where($check)->getField('state');
        if ($isCollect == "1") {
            $data['state'] = $isCollect;
            echo self::json("300", "已收藏", "");
        } else if ($isCollect == "0") {
            $data['state'] = $isCollect;
            echo self::json("200", "收藏", "");
        } else if ($isCollect == null) {
            $data['state'] = 0;
            echo self::json("200", "收藏", "");
        } else {
            $data['state'] = 2;
            echo self::json("404", "数据错误", "");
        }
    }

    public function Collect()
    {
        $collect_sql = M('collect');
        $check['commodity_id'] = $_GET['commodity_id'];
        $check['user_id'] = $_GET['user_id'];
        $isCollect = $collect_sql->where($check)->getField('state');
        if ($isCollect == "1") {
            $data['state'] = 0;
            if (false != $collect_sql->where($check)->save($data)) {
                echo self::json("200", "收藏", "");
            } else {
                echo self::json("404", "数据错误", "");
            }
        } else if ($isCollect == "0") {
            $data['state'] = 1;
            if (false != $collect_sql->where($check)->save($data)) {
                echo self::json("300", "已收藏", "");
            } else {
                echo self::json("404", "数据错误", "");
            }
        } else if ($isCollect == null) {
            $check['collectTime'] = date('Y-m-d H:i:s');
            if (false != $collect_sql->add($check)) {
                echo self::json("300", "已收藏", "");
            } else {
                echo self::json("404", "数据错误", "");
            }
        } else {
            echo self::json("404", "数据错误", "");
        }
    }
}