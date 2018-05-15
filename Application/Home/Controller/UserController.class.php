<?php

namespace Home\Controller;

use Think\Controller;

class UserController extends BaseController
{
    public function user_detail(){
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

    public function save_user_header(){
        $user_info_sql = M('userinfor');
        $user_img = $user_info_sql ->where("user_id = ".I('session.user_id'))->getField("image");
        if ($_POST['image'] == ""){
            $temp['message'] = "请先选择图片！";
            echo json_encode($temp);
        }else if (I('post.user_id') != I('session.user_id')){
            $temp = "请重新登录后再试！";
            echo json_encode($temp);
        }else{
            $user['image'] = $this->base64_upload($_POST['image']);
            if (false !== $user_info_sql->where("user_id = " . I('session.user_id'))->save($user)){
                if ($user_img != "default.jpg"){
                    $user_img_url = $this->url_image("user_image").$user_img;
                    unlink($user_img_url);
                }
                $temp = "修改成功";
                echo json_encode($temp);
            }else{
                $temp = "提交失败，请稍后再试！！";
                echo json_encode($temp);
            }
        }
    }

    //base64编码图片上传
    public function base64_upload($base64)
    {
        $base64_image = str_replace(' ', '+', $base64);
        //post的数据里面，加号会被替换为空格，需要重新替换回来，如果不是post的数据，则注释掉这一行
        if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image, $result)) {
            //匹配成功
            if ($result[2] == 'jpeg') {
                $image_name = uniqid() . '.jpg';
                //纯粹是看jpeg不爽才替换的
            } else {
                $image_name = uniqid() . '.' . $result[2];
            }
            $image_file = "./Public/Uploads/user_image/{$image_name}";
            //服务器文件存储路径
            if (file_put_contents($image_file, base64_decode(str_replace($result[1], '', $base64_image)))) {
                return $image_name;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}