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
}