<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends BaseController
{
    public function index()
    {
        $type_sql = M('type');
        $subsetType_sql = M('subsettype');
        $company_sql = M('company');
        $commodity_sql = M('commodity');
        $collect_sql = M('collect');
        $search_sql = M('search');
        $carousel_id = M('carousel');

        //分类查询，连表查询
        $this->type_query();

        //热门查询
        $hot = $subsetType_sql->order('clickNum desc')->limit(12)->select();
        foreach ($hot as $v => $ho_val) {
            $check['subsetType_id'] = $ho_val['subsettype_id'];
            $check['state'] = 0;
            $result = $hot[$v]['hot_vo'] = $commodity_sql->where($check)->limit(8)->order('hintNum desc')->select();
            $a = i_array_column($result, 'commodity_id');


            //三表查询收藏表
            if (!empty($a)) {
                foreach ($a as $key => $t) {
                    $c['commodity_id'] = $t;
                    $c['user_id'] = I('session.user_id');
                    $b = $collect_sql->where($c)->Field('state')->select();
                    if ($b == null) {
                        $b[0]['state'] = 0;
                    }
                    $hot[$v]['hot_vo'][$key]['vo2'] = $b;
                }
            }
        }
        $this->assign('hot', $hot);

        //热门搜索
        $this->search = $search_sql->order('time desc')->limit(8)->select();

        //轮播图右侧热门信息
        $this->hot_commodity = $commodity_sql->where("state = 0")->order('hintNum desc')->limit(3)->select();


        //轮播图查询
        $this->carousel = $carousel_id->where("state = 0")->order('hintNum desc')->limit(4)->select();

        //查询收藏数
        $this->get_collect_num();

        //浏览量+1
//        M('index')->where("id = 1")->setInc('pageview');
        $this->display();
    }

    public function test($f_id)
    {
        $text = M('items')->where("f_id=$f_id")->select();
        $this->ajaxReturn($text, json);
    }

    public function search($type_id,$value)
    {
        $commodity_sql = M('commodity');
        $cond['name'] = array('like', "%$value%");
        $cond['state'] = 0;
        if ($type_id == "0") {
            $search = $commodity_sql->where($cond)->order("hintNum desc")->select();
        } else {
            $cond['type_id'] = $type_id;
            $search = $commodity_sql->where($cond)->order("hintNum desc")->select();
        }
        $this->assign('empty', '<span class="empty">很抱歉，没有找到相关的内容。</span>');
        $this->search = $search;
        $this->display();
    }

    //注册
    public function registration()
    {
        $user = D('Users');
        //自动验证  创建数据集
        if (!$data = $user->create()) {
            //防止中文乱码
            header("Content-type:text/html; charset=utf-8");
            $this->error($user->getError());
        }
        //插入数据库
        if (false != $user ->add($data)) {
            $user_id = M('users')->where($data)->getField('user_id');
            $telephone = $data['telephone'];
            $username = M('userinfor') -> where("telephone = $telephone") -> getField('username');
            session('user_id', $user_id);
            session('username',$username);
            M('users')->where("user_id = $user_id")->setInc('loginNum');
            redirect('index');
        } else {
            $this->error('信息填写有误');
        }
    }

    //退出登录
    public function logout()
    {
        session('[destroy]');
        redirect('index');
    }


    public function login()
    {
        $user_sql = M('users');
        $userinfor_sql = M('userinfor');
        $login['telephone'] = $_POST['telephone'];
        $login['password'] = md5($_POST['password']);
        $arr['flag'] = 0;
        $user_id = $user_sql-> where($login) -> getField('user_id');
        $telephone = $user_sql -> where($login) -> getField('telephone');
        if ($user_id == null) {
            $this->ajaxReturn($arr, json);
        } else {
            $state = $user_sql -> where($login) -> getField('state');
            if ($state == 1) {
                $arr['flag'] = 2;
                $this->ajaxReturn($arr, json);
            } else {
                $username = $userinfor_sql -> where("telephone = $telephone") -> getField('username');
                session('user_id', $user_id);
                session('username', $username);
                $data['loginTime'] = date('Y-m-d H:i:s');
                $data['loginIp'] = get_client_ip();
                $user_sql-> where($login) ->setInc('loginNum');
                $user_sql-> where($login) ->save($data);
                $arr['flag'] = 1;
                $arr['username'] = $username;
                $this->ajaxReturn($arr, json);
            }
        }
    }

    public function check_tel()
    {
        $user = D('user');
        if (!$user->create()) {
            exit($user->getError());
        } else {
            echo 0;
        }
    }

    public function collect()
    {
        $collect_sql = M('collect');
        $commodity_id = I('commodity_id');
        $state = I('state');
        $check['user_id'] = I('user_id');
        $check["commodity_id"] = $commodity_id;
        if ($state == 0) {
            //添加收藏
            if ($collect_sql->where($check)->select() == null) {
                $check['collectTime'] = date('Y-m-d H:i:s');
                $check['state'] = 1;
                if (false != $collect_sql->add($check)) {
                    $data = 1;
                } else {
                    $data = 0;
                }
            } else {
                $up_data['state'] = 1;
                $up_data['collectTime'] = date('Y-m-d H:i:s');
                if (false != $collect_sql->where($check)->save($up_data)) {
                    $data = 1;
                } else {
                    $data = 0;
                }
            }
        } else {
            //取消收藏
            $up_data['state'] = 0;
            $up_data['collectTime'] = date('Y-m-d H:i:s');
            if (false != $collect_sql->where($check)->save($up_data)) {
                $data = 2;
            } else {
                $data = 0;
            }
        }
        echo json_encode($data);
    }
}