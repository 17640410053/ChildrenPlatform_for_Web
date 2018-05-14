<?php

namespace Api\Controller;

use Think\Controller;

class CommodityController extends BaseController
{
    public function CommodityDetail()
    {
        $commodity_sql = M('commodity');
        $commodity_id = $_GET['commodity_id'];
        $data = $commodity_sql->where("commodity_id = $commodity_id")->find();
        $data['type'] = M('type')->where('type_id = ' . $data['type_id'] . '')->getField('name');
        $data['child_type'] = M('subsettype')->where('subsettype_id = ' . $data['subsettype_id'] . '')->getField('name');
        $this->ajaxReturn($data);
    }

    public function CommodityIntro()
    {
        $commodity_sql = M('commodity');
        $company_sql = M('company');
        $follow_sql = M('follow');
        $commodity_id = $_GET['commodity_id'];
        $data = $commodity_sql->where("commodity_id = $commodity_id")->find();
        $data['follow_num'] = $follow_sql->where("company_id = " . $data['company_id'])->count();
        $data['company_name'] = $company_sql->where("company_id = " . $data['company_id'])->getField("name");
        $data['company_image'] = $company_sql->where("company_id = " . $data['company_id'])->getField('image');
        $this->ajaxReturn($data);
    }
}