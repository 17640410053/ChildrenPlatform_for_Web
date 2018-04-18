<?php
namespace Home\Controller;

use Think\Controller;

class SearchController extends BaseController
{
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
}