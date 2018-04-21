<?php

namespace Home\Controller;

use Think\Controller;

class BaseController extends Controller
{
    //查询收藏数
    public function get_collect_num()
    {
        $collect_select['user_id'] = I('session.user_id');
        $collect_select['state'] = 1;
        $count_num = M('collect')->where($collect_select)->count();
        $this->count_num = $count_num;
    }

    //查询购物车
    public function getUserCart()
    {
        $total_price = '0';
        $cart_num = '0';
        $cart_sql = M('cart');
        $commodity_sql = M('commodity');
        $user_cart = $cart_sql->where("user_id=" . I('session.user_id'))->select();
        foreach ($user_cart as $n => $val) {
            $user_cart[$n]['voo'] = $commodity_sql->where('commodity_id=' . $val['commodity_id'])->find();
            $total_price = $total_price + $user_cart[$n]['voo']['price'] * $val['commodity_num'];
            $cart_num= $cart_num + $val['commodity_num'];
        }
        $cart_data['total_price'] = $total_price;
        $cart_data['cart_num']= $cart_num;
        $this->assign('cart_data',$cart_data);
        $this->assign('cart_list', $user_cart);
        return $cart_data;
    }

    public function type_query()
    {
        $type_sql = M('type');
        $subsetType_sql = M('subsettype');
        $parent = $type_sql->select();
        foreach ($parent as $n => $val) {
            $parent[$n]['voo'] = $subsetType_sql->where('type_id = ' . $val['type_id'])->select();
        }
        $this->assign('list', $parent);
    }

    //退出登录
    public function logout()
    {
        session('[destroy]');
        redirect('index');
    }
}