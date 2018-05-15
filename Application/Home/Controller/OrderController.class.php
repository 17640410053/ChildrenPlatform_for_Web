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
                if ($state == 5){
                    $temp['message'] = "正在为你处理！";
                    $temp['operation'] = "退货中";
                    $temp['state'] = "退货中";
                }
                if ($state == 4){
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
}