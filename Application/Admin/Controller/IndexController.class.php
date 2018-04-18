<?php
namespace Admin\Controller;

use Think\Controller;

class IndexController extends BaseController
{
    public function index()
    {
        $this -> pageview = number_format(M('index')->where("id = 1")->getField('pageview'));
        $this -> item = number_format(M('items')->count());
        $this -> comment = number_format(M('comment')->count());
        $this -> user = number_format(M('user')->count());

        $this->display();
    }

    public function login()
    {
        $this->display();
    }

    public function checkLogin(){
        $admin = M('admin');
        $arr['Status'] = '0';
        $checkLogin['username'] = I('username');
        $checkLogin['password'] = md5(I('password'));
        $check = $admin->where($checkLogin)->select();
        if ($check == null){
            $arr['Text'] = "用户名或密码错误";
        }else{
            session("flag", "logok");
            session('username',$checkLogin['username']);
            $arr['Status'] = '1';
            $arr['Text'] = "登录成功<br /><br />欢迎回来";
        }
        $this->ajaxReturn($arr,json);
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

    public function loginOut(){
        session('flag',null);
        redirect('login');
    }
}