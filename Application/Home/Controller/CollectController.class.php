<?php
namespace Home\Controller;

use Think\Controller;

class CollectController extends BaseController
{
    public function collect()
    {
        $collect_sql = M('collect');
        $commodity_id = I('commodity_id');
        $state = I('state');
        $check['user_id'] = I('session.user_id');
        $check["commodity_id"] = $commodity_id;
        if ($state == 0) {
            //添加收藏
            if ($collect_sql->where($check)->select() == null) {
                $check['collectTime'] = date('Y-m-d H:i:s');
                $check['state'] = 1;
                if (false != $collect_sql->add($check)) {
                    $data = 1;
                } else {
                    $data = 0;
                }
            } else {
                $up_data['state'] = 1;
                $up_data['collectTime'] = date('Y-m-d H:i:s');
                if (false != $collect_sql->where($check)->save($up_data)) {
                    $data = 1;
                } else {
                    $data = 0;
                }
            }
        } else {
            //取消收藏
            $up_data['state'] = 0;
            $up_data['collectTime'] = date('Y-m-d H:i:s');
            if (false != $collect_sql->where($check)->save($up_data)) {
                $data = 2;
            } else {
                $data = 0;
            }
        }
        echo json_encode($data);
    }
}