<?php

namespace Admin\Controller;

use Think\Controller;

class OrderController extends BaseController
{
    public function order_list()
    {
        $order_sql = M('order');
        $commodity_sql = M('commodity');
        $user_info_sql = M('userinfor');
        $order = $order_sql->order('order_id desc')->select();
        foreach ($order as $n => $val) {
            $order[$n]['username'] = $user_info_sql->where('user_id=' . $val['user_id'])->getField('username');
            $order[$n]['commodity_name'] = $commodity_sql->where('commodity_id=' . $val['commodity_id'])->getField('name');
            $order[$n]['commodity_image'] = $commodity_sql->where('commodity_id=' . $val['commodity_id'])->getField('small_pic');
        }
        $this->assign('order', $order);
        $this->display();
    }

    public function delete_order()
    {
        $order_sql = M('order');
        $order_id = I('order_id');
        if (false !== $order_sql->where("order_id=$order_id")->delete()) {
            $temp = 1;
        } else {
            $temp = "系统繁忙";
        }
        echo json_encode($temp);
    }

    public function sure_state()
    {
        $order_sql = M('order');
        $order_id = I('order_id');
        $order['state'] = I('state');
        if (false !== $order_sql->where("order_id=$order_id")->save($order)) {
            $temp = 1;
        } else {
            $temp = "系统繁忙";
        }
        echo json_encode($temp);
    }

    //权限验证
    public function _initialize()
    {
        header("Content-type:text/html;charset=utf-8");
        if (ACTION_NAME != 'login' && ACTION_NAME != 'checkLogin' && ACTION_NAME != 'verify') {
            if (null == session('flag') || session('flag') != 'logok') {
                redirect(U('Index/login'));
            }
        }
    }
}