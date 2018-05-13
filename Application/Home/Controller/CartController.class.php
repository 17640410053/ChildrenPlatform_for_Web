<?php

namespace Home\Controller;

use Think\Controller;

class CartController extends BaseController
{
    public function addCart()
    {
        $cart_sql = M('cart');
        $commodity_sql = M('commodity');
        $commodity_id = I('commodity_id');
        $commodity_num = I('commodity_num');
        $check['commodity_id'] = $commodity_id;
        $check['user_id'] = I('session.user_id');
        if ($cart_sql->where($check)->select() == null) {
            $check['commodity_num'] = $commodity_num;
            $check['shopTime'] = date('Y-m-d H:i:s');
            if (false != $cart_sql->add($check)) {
                $data = $this->getUserCart();
                $data['name'] = $commodity_sql->where("commodity_id = $commodity_id")->getField('name');
                $data['image'] = $commodity_sql->where("commodity_id = $commodity_id")->getField('small_pic');
                $data['price'] = $commodity_sql->where("commodity_id = $commodity_id")->getField('price');
                $data['state'] = 1;
            } else {
                $data['state'] = 0;
            }
        } else {
            if (false != $cart_sql->where($check)->setInc('commodity_num', $commodity_num)) {
                $data = $this->getUserCart();
                $data['state'] = 2;
            } else {
                $data['state'] = 0;
            }
        }
        $this->ajaxReturn($data);
    }

    public function deleteCart()
    {
        $cart_sql = M('cart');
        $check['commodity_id'] = I('commodity_id');
        $check['user_id'] = I('session.user_id');
        if (false != $cart_sql->where($check)->delete()) {
            $data = $this->getUserCart();
            $data['state'] = 1;
        } else {
            $data['state'] = 0;
        }
        echo json_encode($data);
    }
}