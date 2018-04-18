<?php
namespace Home\Controller;

use Think\Controller;

class BaseController extends Controller
{
    public function get_collect_num(){
        //查询收藏数
        $collect_select['user_id']=I('session.user_id');
        $collect_select['state'] = 1;
        $count_num = M('collect')->where($collect_select)->count();
        $this -> count_num = $count_num;
    }

    public function type_query(){
        $type_sql = M('type');
        $subsetType_sql = M('subsettype');
        $parent = $type_sql -> select();
        foreach ($parent as $n => $val){
            $parent[$n]['voo'] = $subsetType_sql -> where('type_id = '.$val['type_id']) -> select();
        }
        $this -> assign('list',$parent);
    }
}