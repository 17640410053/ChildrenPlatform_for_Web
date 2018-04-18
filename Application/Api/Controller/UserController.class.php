<?php
namespace Api\Controller;

use Think\Controller;

class UserController extends Controller
{
    //转化JSON数据
    public static function json($code, $message = '', $data = array())
    {
        $result = array(
            'code' => $code,//状态
            'message' => urlencode($message),//提示信息
            'data' => $data//数据
        );
        return urldecode(json_encode($result));
    }

    //登录接口
    public function userLogin()
    {
        $login['telephone'] = $_GET['telephone'];
        $login['password'] = md5($_GET['password']);
        $user_id = M('users')->where($login)->getField("user_id");
        if ($user_id == null) {
            $data["user_id"] = "0";
            echo self::json("404", "用户名或密码错误", $data);
        } else {
            M('users')->where("user_id = $user_id")->setInc('loginNum');
            $data = M('userinfor')->where("user_id=$user_id")->find();
            echo self::json("200", "登录成功", $data);
        }
    }

    //注册接口
    public function userRegister()
    {
        $_POST['telephone'] = $_GET['telephone'];
        $_POST['password'] = $_GET['password'];
        $user = D('Users');
        //自动验证  创建数据集
        if (!$data = $user->create()) {
            //防止中文乱码
            header("Content-type:text/html; charset=utf-8");
            echo self::json("404", $user->getError(), "fail");
        }
        //插入数据库
        if (false != $user->add($data)) {
                echo self::json("200", "注册成功", "success");
            } else {
                echo self::json("404", "服务器不稳定", "fail");
            }
    }

    //用户中心接口
    public function userInformation()
    {
        $id = $_GET['id'];
        $data = M('userinfor')->where("user_id = $id")->find();
        $data['collect_num'] = M('collect')->where("user_id = $id")->count();
        $this->ajaxReturn($data);
    }

    //修改用户信息接口
    public function updateUsername()
    {
        $data['username'] = $_GET['username'];
        $id = $_GET['id'];
        if (false !== M('userinfor')->where("user_id=$id")->save($data)) {
            echo self::json("200", "修改成功", "success");
        } else {
            echo self::json("404", "修改失败，服务器不稳定", "fail");
        }
    }

    //修改用户个性签名接口
    public function updateUserIntro(){
        $data['intro'] = $_GET['intro'];
        $id = $_GET['id'];
        if (false !== M('userinfor')->where("user_id=$id")->save($data)) {
            echo self::json("200", "修改成功", "success");
        } else {
            echo self::json("404", "修改失败，服务器不稳定", "fail");
        }
    }

    //修改用户性别接口
    public function updateUserSex(){
        $data['gender'] = $_GET['sex'];
        $id = $_GET['id'];
        if (false !== M('userinfor')->where("user_id=$id")->save($data)) {
            echo self::json("200", "修改成功", "success");
        } else {
            echo self::json("404", "修改失败，服务器不稳定", "fail");
        }
    }

    //获取用户收藏信息
    public function userCollect(){
        $check['user_id'] = $_GET['id'];
        $check['state'] = "1";
        $collect = M("collect") -> where($check)->field('commodity_id')->select();
        foreach ($collect as $n => $val) {
            $data[$n] = M('commodity')->where('commodity_id = '. $val['commodity_id'] . '')->find();
            $data[$n]['comment'] = M('comment') -> where('commodity_id = '. $val['commodity_id'] . '') -> count();
        }
        $this->ajaxReturn($data);
    }
}