<?php

namespace Api\Controller;

use Think\Controller;

class OrderController extends BaseController
{
    public function create_order()
    {
        $order_sql = M('order');
        $commodity_sql = M('commodity');
        $check['user_id'] = $_GET['user_id'];
        $check['commodity_id'] = $_GET['commodity_id'];
        $check['orderNum'] = date('Ymd') . rand(10000, 99999);
        $check['number'] = $_GET['number'];
        $check['telephone'] = $_GET['telephone'];
        $check['orderTime'] = date('Y-m-d H:i:s');
        $price = $commodity_sql->where('commodity_id=' . $_GET['commodity_id'])->getField('price');
        $check['price'] = $price * $_GET['number'];
        $check['state'] = 1;
        if (false !== $order_sql->add($check)){
            echo self::json("200", "购买成功", "");
        }else{
            echo self::json("404", "网络繁忙", "");
        }
    }

    public function userOrder(){
        $order_sql = M('order');
        $user_id = $_GET['user_id'];
        $order = $order_sql->where("user_id = $user_id") ->select();
        foreach ($order as $n => $val) {
            $order[$n]['commodity_name'] = M('commodity')->where('commodity_id = ' . $val['commodity_id'] . '')->order()->getField('name');
            $order[$n]['commodity_image'] = M('commodity')->where('commodity_id = ' . $val['commodity_id'] . '')->order()->getField('small_pic');
        }
        $this->ajaxReturn($order);
    }
}