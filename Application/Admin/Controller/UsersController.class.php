<?php

namespace Admin\Controller;

use Think\Controller;
use Think\Page;

class UsersController extends BaseController
{

    public function userlist()
    {
        //调用模型层获取数据
        $usersmodel = M('userinfor');
        $user = $usersmodel->order('user_id desc')->select();
        //调用视图层显示数据
        $this->users = $user;
        $this->display();
    }

    //修改状态
    public function changestate()
    {
        $usersmodel = M('userinfor');
        $user_id = I('user_id');
        $usersmodel->state = I('state');
        if (false != $usersmodel->where("user_id=$user_id")->save()) {
            $tempdata = "修改成功！";
        } else {
            $tempdata = "修改失败！";
        }
        echo json_encode($tempdata);
    }

    //密码重置
    public function editpswd()
    {
        $usersmodel = M('users');
        $user_id = I('user_id');
        $usersmodel->password = md5('Lovely0827');
        if (false != $usersmodel->where("user_id=$user_id")->save()) {
            $tempdata = "重置成功！";
        } else {
            $tempdata = "重置失败";
        }
        echo json_encode($tempdata);
    }

    //删除用户
    public function del_user()
    {
        $user = M('users');
        $user_id = I('user_id');
        $user_img = M('userinfor')->where("user_id = $user_id")->getField("image");
        if (false !== $user->where("user_id = $user_id")->delete()) {
            if ($user_img != "default.jpg") {
                $user_img_url = $this->url_user("user_image") . $user_img;
                unlink($user_img_url);
            }
            $tempdata = "删除成功！";
        } else {
            $tempdata = "删除失败";
        }
        echo json_encode($tempdata);
    }

    public function add_user()
    {
        $tel_arr = array(130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 144, 147, 150, 151, 152, 153, 155, 156, 157, 158, 159, 176, 177, 178, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189,);
        $email_arr = array('@qq.com', '@sohu.com', '@163.com', '@126.com', '@139.com', '@sina.com', '@yeah.net', '@21cn.com', '@yahoo.com', '@Gmail.com', '@Tom.com', '@Hotmail.com');
        $city_arr = array('合肥', '安庆', '毫州', '蚌埠', '滁州', '巢湖', '池州', '阜阳', '淮北', '淮南', '黄山站', '六安', '马鞍山', '宿州', '铜陵', '芜湖', '宣城', '广州', '佛山', '汕头', '深圳', '珠海', '中山', '南宁', '桂林', '贵阳', '海口', '三亚', '文昌', '西沙', '石家庄', '保定', '承德', '邯郸', '秦皇岛', '郑州', '哈尔滨', '大庆', '武汉', '长沙', '长春', '南京', '沈阳', '大连', '抚顺', '呼和浩特', '银川', '太原', '西安', '宝鸡', '上海', '北京', '成都', '德阳', '资阳', '天津', '昆明', '杭州',);
        $k = I("k");
        for ($i = 0; $i < $k; $i += 1) {
            $user['telephone'] = $tel_arr[array_rand($tel_arr)] . rand('10000000', '99999999');
            $user['password'] = md5(uniqid());
            $user['loginTime'] = date('Y-m-d H:i:s');
            $user['ip'] = get_client_ip();
            if (false != M('users')->add($user)) {
                $user_id = M('users')->where($user)->getField('user_id');
                $message['user_id'] = $user_id;
                $message['telephone'] = $user['telephone'];
                $message['username'] = "用户_" . rand('100000', '999999');
                $message['state'] = rand(0, 1);
                $message['email'] = rand('1000000', '9999999') . $email_arr[array_rand($email_arr)];
                $message['gender'] = rand(0, 1);
                $message['image'] = rand(1, 30) . ".jpg";
                $message['address'] = $city_arr[array_rand($city_arr)];
                if (false != M('userinfor')->where("user_id=$user_id")->save($message)) {
                } else {
                    M('users')->where("user_id = $user_id")->delete();
                    $i -= 1;
                }
            }
        }
        $tempdata = "成功插入" . $k . "条数据！";
        echo json_encode($tempdata);
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