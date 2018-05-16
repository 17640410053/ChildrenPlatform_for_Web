<?php

namespace Home\Controller;

use Think\Controller;

class CommunicateController extends BaseController
{
    public function communicate($id)
    {
        if (I('session.user_id') != null) {
            //查询购物车
            $this->getUserCart();

            //查询收藏数
            $this->get_collect_num();
        }
        $commodity_sql = M('commodity');
        $communicate = $commodity_sql ->where("type_id = $id")->select();
        $this->assign('communicate',$communicate);
        $this->display();
    }

    public function communicate_detail($id){
        $commodity_sql = M('commodity');
        $star_sql = M('star');
        $subsettype = M('subsettype');
        $comment_sql = M('comment');
        $userinfor_sql = M('userinfor');
        $collect_sql = M('collect');
        $company_sql = M('company');

        //取出物品信息
        $detail = $commodity_sql->where("commodity_id=$id")->find();
        $re['subsetType_id'] = $detail['subsettype_id'];

        //判断是否评分
        $check_star['user_id'] = I('session.user_id');
        $check_star['commodity_id'] = $id;
        $check = $star_sql->where($check_star)->select();
        if ($check == null) {
            $detail['check_star'] = "0";
        } else {
            $detail['check_star'] = "1";
        }

        //查询物品详情
        $detail['subsettype_id'] = $subsettype->where($re)->getField("name");
        $detail['count'] = $comment_sql->where("commodity_id=$id")->count();
        $company_id = $detail['company_id'];
        $detail['company_id'] = $company_sql->where("company_id = $company_id")->getField("name");
        $check_collect['commodity_id'] = $id;
        $check_collect['user_id'] = I('session.user_id');
        $detail['collect_state'] = M('collect')->where($check_collect)->getField("state");
        $this->assign('detail', $detail);


        //获取评论信息
        $parent = $comment_sql->where("commodity_id=$id")->order('datetime desc')->select();
        foreach ($parent as $n => $val) {
            $parent[$n]['voo'] = $userinfor_sql->where('user_id = ' . $val['user_id'] . '')->order()->select();
        }
        $this->assign('comment', $parent);
        if (I('session.user_id') != null) {
            //查询购物车
            $this->getUserCart();

            //查询收藏数
            $this->get_collect_num();
        }


        //浏览量+1
        $commodity_sql->where("commodity_id=$id")->setInc('hintNum');
        $this->display();
    }
}