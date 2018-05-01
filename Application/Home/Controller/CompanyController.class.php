<?php

namespace Home\Controller;

use Think\Controller;

class CompanyController extends BaseController
{
    public function company_center()
    {
        //分类查询，连表查询
        $this->type_query();

        $company_sql = M('company');
        $commodity_sql = M('commodity');
//        $company_id = I('session.company_id');
        $company_id = 4;

        //查询企业信息
        $company_detail = $company_sql ->where("company_id = $company_id")->find();
        $this->assign('detail',$company_detail);

        //查询企业物品
        $company_goods = $commodity_sql->where("company_id = $company_id")->select();
        $this->assign('company_goods',$company_goods);


        $this->display();
    }
}