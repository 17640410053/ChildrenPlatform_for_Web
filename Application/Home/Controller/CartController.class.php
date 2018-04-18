<?php

namespace Home\Controller;

use Think\Controller;

class CartController extends BaseController
{
    public function addCart()
    {
        $cart_sql = M('cart');
        $commodity_id = I('commodity_id');
        $commodity_num = I('commodity_num');
        $check['commodity_id'] = $commodity_id;
        $check['user_id'] = I('session.user_id');
        if ($cart_sql->where($check)->select() == null) {
            $check['commodity_num'] = $commodity_num;
            $check['shopTime'] = date('Y-m-d H:i:s');
            if (false != $cart_sql->add($check)) {
                $data = 1;
            } else {
                $data = 0;
            }
        } else {
            if (false != $cart_sql->where($check)->setInc('commodity_num', $commodity_num)) {
                $data = 1;
            } else {
                $data = 0;
            }
        }
        echo json_encode($data);
    }
}