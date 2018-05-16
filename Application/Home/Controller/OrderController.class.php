<?php

namespace Home\Controller;

use Think\Controller;

class OrderController extends BaseController
{
    //支付状态，0为未支付，1为已支付，2为已发货，3为已收货，4为交易成功，5为退货中，6为退货成功，7为退款中，8为退款成功

    //申请退款
    public function application_for_refund()
    {
        $order_sql = M('order');
        if (I('post.user_id') != I('session.user_id')) {
            $temp['message'] = "请重新登录后再试！";
            echo json_encode($temp);
        } else {
            $check['order_id'] = I('post.order_id');
            $state = I('post.state');
            $order['state'] = $state;
            if (false !== $order_sql->where($check)->save($order)) {
                if ($state == 7) {
                    $temp['message'] = "正在为你退款！";
                    $temp['operation'] = "大概需要3个工作日";
                    $temp['state'] = "退款中";
                }
                if ($state == 5) {
                    $temp['message'] = "正在为你处理！";
                    $temp['operation'] = "退货中";
                    $temp['state'] = "退货中";
                }
                if ($state == 4) {
                    $temp['message'] = "收货成功！";
                    $temp['operation'] = "已收货";
                    $temp['state'] = "交易成功";
                }
                echo json_encode($temp);
            } else {
                $temp['message'] = "网络繁忙，请稍后再试！";
                echo json_encode($temp);
            }
        }
    }

    public function checkout_order()
    {
        $this->getUserCart();
        $this->type_query();
        $user_info_sql = M('userinfor');
        $cart_sql = M('cart');
        $commodity_sql = M('commodity');
        $checkout = $cart_sql->where('user_id= ' . I('session.user_id'))->select();
        foreach ($checkout as $n => $val) {
            $checkout[$n]['commodity_name'] = $commodity_sql->where('commodity_id=' . $val['commodity_id'])->getField('name');
            $checkout[$n]['commodity_image'] = $commodity_sql->where('commodity_id=' . $val['commodity_id'])->getField('small_pic');
            $checkout[$n]['commodity_price'] = $commodity_sql->where('commodity_id=' . $val['commodity_id'])->getField('price');
            $checkout[$n]['commodity_total_price'] = $checkout[$n]['commodity_price'] * $val['commodity_num'];
        }
        $user_detail = $user_info_sql->where('user_id= ' . I('session.user_id'))->find();
        $this->assign('user_detail', $user_detail);
        $this->assign('checkout', $checkout);
        $this->display();
    }

    //添加订单
    public function create_order()
    {
        $cart_sql = M('cart');
        $commodity_sql = M('commodity');
        $order_sql = M('order');
        $cart = $cart_sql->where('user_id= ' . I('session.user_id'))->select();
        if ($cart == null) {
            $temp = "请先选择需要购买的物品";
            echo json_encode($temp);
        } else {
            foreach ($cart as $n => $val) {
                $price = $commodity_sql->where('commodity_id=' . $val['commodity_id'])->getField('price');
                $cart[$n]['price'] = $price * $val['commodity_num'];
                $cart[$n]['number'] = $val['commodity_num'];
                $cart[$n]['telephone'] = I('post.telephone');
                $cart[$n]['orderTime'] = date('Y-m-d H:i:s');
                $cart[$n]['state'] = 1;
                $cart[$n]['orderNum'] = date('Ymd') . rand(10000, 99999);
            }
            if (false != $order_sql->addAll($cart)) {
                if (false != $cart_sql->where('user_id= ' . I('session.user_id'))->delete()) {
                    $temp = "结算成功";
                    echo json_encode($temp);
                } else {
                    $temp = "网络繁忙";
                    echo json_encode($temp);
                }
            } else {
                $temp = "网络繁忙";
                echo json_encode($temp);
            }
        }
    }
}