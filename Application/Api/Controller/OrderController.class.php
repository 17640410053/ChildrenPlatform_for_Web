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
}