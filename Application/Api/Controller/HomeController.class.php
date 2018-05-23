<?php

namespace Api\Controller;

use Think\Controller;

class HomeController extends BaseController
{
    //推荐-综合查询
    public function comp()
    {
        $data = M('commodity')->order("hintNum desc")->select();
        foreach ($data as $n => $val) {
            $data[$n]['type'] = M('type')->where('type_id = ' . $val['type_id'] . '')->order()->getField('name');
            $data[$n]['child_type'] = M('subsettype')->where('subsetType_id = ' . $val['subsettype_id'] . '')->order()->getField('name');
        }
        $this->ajaxReturn($data);
    }

    public function compPartition()
    {
        $id = $_GET['id'];
        $data = M('commodity')->where("subsetType_id = $id")->order("hintNum desc")->select();
        foreach ($data as $n => $val) {
            $data[$n]['type'] = M('type')->where('type_id = ' . $val['type_id'] . '')->order()->getField('name');
            $data[$n]['child_type'] = M('subsettype')->where('subsetType_id = ' . $val['subsettype_id'] . '')->order()->getField('name');
        }
        $this->ajaxReturn($data);
    }

    //分类查询 1为食物，2为娱乐，3为衣着，4为培训
    public function type()
    {
        $id = $_GET['id'];
        $data = M('commodity')->where("type_id = $id")->order("hintNum desc")->select();
        foreach ($data as $n => $val) {
            $data[$n]['type'] = M('type')->where('type_id = ' . $val['type_id'] . '')->order()->getField('name');
            $data[$n]['child_type'] = M('subsettype')->where('subsetType_id = ' . $val['subsettype_id'] . '')->order()->getField('name');
        }
        $this->ajaxReturn($data);
    }
}