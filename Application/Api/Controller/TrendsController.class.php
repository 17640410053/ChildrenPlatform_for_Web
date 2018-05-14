<?php

namespace Api\Controller;

use Think\Controller;

class TrendsController extends BaseController
{
    public function GetTrends()
    {
        $commodity_sql = M('commodity');
        $data = $commodity_sql -> order('createtime desc') ->select();
        foreach ($data as $n => $val) {
            $data[$n]['company_name'] = M('company')->where('company_id = ' . $val['company_id'] . '')->getField('name');
            $data[$n]['company_image'] = M('company')->where('company_id = ' . $val['company_id'] . '')->getField('image');
            $data[$n]['comment_num'] = M('comment')->where('commodity_id=' . $val['commodity_id'] . '')->count();
        }
        $this->ajaxReturn($data);
    }
}