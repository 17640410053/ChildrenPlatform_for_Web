<?php

namespace Home\Controller;

use Think\Controller;

class UserController extends BaseController
{
    public function user_detail()
    {
        $this->get_collect_num();
        $this->getUserCart();
        $this->type_query();
        $user_info_sql = M('userinfor');
        $user_detail = $user_info_sql->where("user_id=" . I('session.user_id'))->find();
        $this->assign('user_detail', $user_detail);
    }

    public function user_center()
    {
        $this->user_detail();
        $this->display();
    }

    public function save_user_detail()
    {
        $user_info_sql = M('userinfor');
        $user_sql = M('users');
        if (I('post.user_id') != I('session.user_id')) {
            $temp = "请重新登录后再试！";
            echo json_encode($temp);
        } else {
            $user['telephone'] = I('post.telephone');
            if (false !== $user_sql->where("user_id = " . I('session.user_id'))->save($user)) {
                $user_info['username'] = I('post.username');
                $user_info['address'] = I('post.address');
                $user_info['gender'] = I('post.gender');
                $user_info['email'] = I('post.email');
                $user_info['intro'] = I('post.intro');
                $user_info['birthTime'] = I('post.birth');
                if (false !== $user_info_sql->where("user_id = " . I('session.user_id'))->save($user_info)) {
                    $temp = "修改成功";
                    session('username', $user_info['username']);
                    echo json_encode($temp);
                } else {
                    $temp = "提交失败，请稍后再试！";
                    echo json_encode($temp);
                }
            } else {
                $temp = "提交失败，请稍后再试！！";
                echo json_encode($temp);
            }
        }
    }

    public function user_head_image()
    {
        $this->user_detail();
        $this->display();
    }

    public function save_user_header()
    {
        $user_info_sql = M('userinfor');
        $user_img = $user_info_sql->where("user_id = " . I('session.user_id'))->getField("image");
        if ($_POST['image'] == "") {
            $temp['message'] = "请先选择图片！";
            echo json_encode($temp);
        } else if (I('post.user_id') != I('session.user_id')) {
            $temp = "请重新登录后再试！";
            echo json_encode($temp);
        } else {
            $user['image'] = $this->base64_upload($_POST['image']);
            if (false !== $user_info_sql->where("user_id = " . I('session.user_id'))->save($user)) {
                if ($user_img != "default.jpg") {
                    $user_img_url = $this->url_image("user_image") . $user_img;
                    unlink($user_img_url);
                }
                $temp = "修改成功";
                echo json_encode($temp);
            } else {
                $temp = "提交失败，请稍后再试！！";
                echo json_encode($temp);
            }
        }
    }

    public function user_order()
    {
        $this->user_detail();
        $order_sql = M('order');
        $commodity_sql = M('commodity');
        $order = $order_sql->where("user_id = " . I('session.user_id'))->select();
        foreach ($order as $n => $val) {
            $order[$n]['commodity_name'] = $commodity_sql->where('commodity_id=' . $val['commodity_id'])->getField('name');
            $order[$n]['commodity_image'] = $commodity_sql->where('commodity_id=' . $val['commodity_id'])->getField('small_pic');
        }
        $this->assign('order', $order);
        $this->display();
    }

    public function user_collect()
    {
        $this->user_detail();
        $collect_sql = M('collect');
        $commodity_sql= M('commodity');
        $check['user_id'] = I('session.user_id');
        $check['state'] = 1;
        $collect = $collect_sql->where($check)->select();
        foreach ($collect as $n => $val) {
            $collect[$n] = $commodity_sql->where('commodity_id = ' . $val['commodity_id'])->find();
        }
        $this->assign('collect', $collect);
        $this->display();
    }
}