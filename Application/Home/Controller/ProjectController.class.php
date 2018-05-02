<?php

namespace Home\Controller;

use Think\Controller;

class ProjectController extends BaseController
{
    public function project_detail($id)
    {
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
        $detail['count'] =$comment_sql->where("commodity_id=$id")->count();
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

        //判断收藏，两表联查
        $map['commodity_id'] = array('neq', $id);
        $hot = $commodity_sql->where($map)->order('hintNum desc')->limit(4)->select();
        $a = i_array_column($hot, 'commodity_id');
        foreach ($a as $n => $val) {
            $c['commodity_id'] = $val;
            $c['user_id'] = I('session.user_id');
            $b = $collect_sql->where($c)->Field('state')->select();
            if ($b == null) {
                $b[0]['state'] = 0;
            }
            $hot[$n]['voo'] = $b;
        }
        $this->assign('hot', $hot);

        if (I('session.user_id') != null){
            //查询购物车
            $this->getUserCart();

            //查询收藏数
            $this->get_collect_num();
        }


        //浏览量+1
        $commodity_sql->where("commodity_id=$id")->setInc('hintNum');
        $this->display();
    }

    public function project_type($id)
    {
        $List = M('type');
        $List2 = M('subsettype');
        $items = M('commodity');
        $map['type_id'] = array('neq', $id);

        $this->type = $type = $List->where("type_id = $id")->getField('name');

        //分类查询
        $parent = $List->select();
        foreach ($parent as $n => $val) {
            $parent[$n]['voo'] = $List2->where('type_id = ' . $val['type_id'] . '')->order()->select();
        }
        $this->assign('list', $parent);

        //热门查询
        $hot = $List2->where($map)->order('clickNum desc')->limit(10)->select();
        $this->assign('hot', $hot);

        //其他热门查询
        $map['state'] = 0;
        $other = $items->where($map)->limit(4)->order('hintNum desc')->select();
        $this->assign('other', $other);

        //页面分类查询
        $check_state['state'] = 0;
        $check_state['type_id'] = $id;
        $item = $items->where($check_state)->order('hintNum desc')->select();
        $a = i_array_column($item, 'commodity_id');
        foreach ($a as $n => $val) {
            $c['commodity_id'] = $val;
            $c['user_id'] = I('session.user_id');
            $b = M('collect')->where($c)->Field('state')->select();
            if ($b == null) {
                $b[0]['state'] = 0;
            }
            $item[$n]['voo'] = $b;
        }
        $this->assign('item', $item);

        //浏览量+1
        $List->where("type_id=$id")->setInc('hintNum');

        if (I('session.user_id') != null){
            //查询购物车
            $this->getUserCart();

            //查询收藏数
            $this->get_collect_num();
        }


        //显示页面
        $this->display();
    }

    public function project_child_type($id)
    {
        $List = M('type');
        $List2 = M('subsettype');
        $items = M('commodity');
        $type_id = $List2->where("subsetType_id = $id")->getField('type_id');
        $map['type_id'] = array('neq', $type_id);

        $this->type = $type = $List->where("type_id = $type_id")->getField('name');
        $this->child_type = $type = $List2->where("subsetType_id = $id")->getField('name');

        //分类查询
        $parent = $List->select();
        foreach ($parent as $n => $val) {
            $parent[$n]['voo'] = $List2->where('type_id = ' . $val['type_id'] . '')->order()->select();
        }
        $this->assign('list', $parent);

        //热门查询
        $hot = $List2->where($map)->order('clickNum desc')->limit(10)->select();
        $this->assign('hot', $hot);

        //其他热门查询
        $map['state'] = 0;
        $other = $items->where($map)->limit(4)->order('hintNum desc')->select();
        $this->assign('other', $other);

        //页面分类查询
        $check_state['state'] = 0;
        $check_state['subsetType_id'] = $id;
        $item = $items->where($check_state)->order('hintNum desc')->select();
        $a = i_array_column($item, 'commodity_id');
        foreach ($a as $n => $val) {
            $c['commodity_id'] = $val;
            $c['user_id'] = I('session.user_id');
            $b = M('collect')->where($c)->Field('state')->select();
            if ($b == null) {
                $b[0]['state'] = 0;
            }
            $item[$n]['voo'] = $b;
        }
        $this->assign('item', $item);

        //浏览量+1
        $List2->where("subsetType_id=$id")->setInc('clickNum');
        $List->where("type_id=$type_id")->setInc('clickNum');

        if (I('session.user_id') != null){
            //查询购物车
            $this->getUserCart();

            //查询收藏数
            $this->get_collect_num();
        }


        //显示页面
        $this->display();
    }

    //发布评论
    public function add_cot()
    {
        $comment = D('comment');
        if (!$data = $comment->create()) {
            //防止中文乱码
            header("Content-type:text/html; charset=utf-8");
            $tempdata = error($comment->getError());
        }else{
            if (false != $comment->add($data)) {
                $tempdata = "发布成功";
            } else {
                $tempdata = "发布失败";
            }
        }
        echo json_encode($tempdata);
    }

    public function add_star()
    {
        $star = D('star');
        $commodity_id = I('commodity_id');
        if (!$data = $star->create()) {
            //防止中文乱码
            header("Content-type:text/html; charset=utf-8");
            $tempdata = error($star->getError());
            echo json_encode($tempdata);
        }
        if (false != $star->add($data)) {
            $star_avg['starNum'] = round(M('star')->where("commodity_id=$commodity_id")->Avg('starNum'));
            M('commodity')->where("commodity_id = $commodity_id")->save($star_avg);
            $tempdata = $star_avg['starNum'];
        } else {
            $tempdata = "发布失败";
        }
        echo json_encode($tempdata);
    }

    public function add_commodity(){
        $subsetType_id = I('post.subsetType_id');
        $company_user_id = I('session.company_user_id');
        $_POST['type_id'] = M('subsettype')->where("subsetType_id = $subsetType_id")->getField("type_id");
        $_POST['company_id'] = M('companyusers')->where("companyUser_id=$company_user_id")->getField('company_id');
        $commodity_sql = D('commodity');
        if (!$data = $commodity_sql->create()){
            //防止中文乱码
            header("Content-type:text/html; charset=utf-8");
            $temp = error($commodity_sql->getError());
        }else{
            if (false!=$commodity_sql->add()){
                $temp = "发布成功";
            }else{
                $temp = "发布失败";
            }
        }
        echo json_encode($temp);
    }
}