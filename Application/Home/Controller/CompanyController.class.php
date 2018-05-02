<?php

namespace Home\Controller;

use Think\Controller;

class CompanyController extends BaseController
{
    public function company_center()
    {
        $company_sql = M('company');
        $commodity_sql = M('commodity');
        $company_user_sql = M('companyusers');
        $company_user_id = I('session.company_user_id');
        if ($company_user_id == null) {
            redirect("../Index/index");
        } else {
            $company_id = $company_user_sql->where("companyUser_id=$company_user_id")->getField("company_id");
            //分类查询，连表查询
            $this->type_query();

            //查询企业信息
            $company_detail = $company_sql->where("company_id = $company_id")->find();
            $this->assign('detail', $company_detail);

            //查询企业物品
            $company_goods = $commodity_sql->where("company_id = $company_id")->select();
            $this->assign('company_goods', $company_goods);


            $this->display();
        }
    }

    public function add_commodity()
    {
        $company_sql = M('company');
        $company_user_sql = M('companyusers');
        $company_user_id = I('session.company_user_id');
        $company_id = $company_user_sql->where("companyUser_id=$company_user_id")->getField("company_id");

        //查询企业信息
        $company_detail = $company_sql->where("company_id = $company_id")->find();
        $this->assign('detail', $company_detail);
        //分类查询，连表查询
        $this->type_query();

        $this->display();
    }
}