<?php

namespace Api\Controller;

use Think\Controller;

class CommentController extends BaseController
{
    public function CommodityComment()
    {
        $comment_sql = M('comment');
        $commodity_id = $_GET['commodity_id'];
        $data = $comment_sql->where("commodity_id = $commodity_id")->select();
        foreach ($data as $n => $val) {
            $data[$n]['username'] = M('userinfor')->where('user_id = ' . $val['user_id'] . '')->getField('username');
            $data[$n]['user_image'] = M('userinfor')->where('user_id = ' . $val['user_id'] . '')->getField('image');
        }
        $this->ajaxReturn($data);
    }

    public function CommodityIntro()
    {
        $commodity_sql=M('commodity');
        $company_sql = M('company');
        $follow_sql = M('follow');
        $commodity_id = $_GET['commodity_id'];
        $data = $commodity_sql -> where("commodity_id = $commodity_id") -> find();
        $data['follow_num'] = $follow_sql ->where("company_id = ".$data['company_id'])->count();
        $data['company_name'] = $company_sql ->where("company_id = ".$data['company_id'])->getField("name");
        $data['company_image'] = $company_sql ->where("company_id = ".$data['company_id'])->getField('image');
        $this->ajaxReturn($data);
    }
}