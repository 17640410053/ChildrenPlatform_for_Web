<?php
namespace Admin\Controller;

use Think\Controller;

class CommentController extends BaseController
{
    public function commentlist(){
        $items = M('items');
        $item = $items -> order('hint desc') ->select();
        foreach ($item as $n => $val) {
            $item[$n]['comment_num'] = M('comment')->where('f_id = '.$val['f_id'] .'') -> count();
        }
        $this -> assign('item',$item);
        $this->display();
    }

    public function commentdetail($id){
        $commentmodel = M('comment');

        $this -> item_name = M('items') -> where("f_id = $id") -> getField("f_name");

        $comment = $commentmodel -> where("f_id = $id") -> select();
        foreach ($comment as $n => $val) {
            $comment[$n]['u_name'] = M('u_information')->where('u_id = '.$val['u_id'] .'') -> getField('username');
            $comment[$n]['u_pic'] = M('u_information')->where('u_id = '.$val['u_id'] .'') -> getField('pic');
        }
        $this -> assign('comment',$comment);
        $this->display();
    }

    public function del_comment(){
        $r_id = I('r_id');
        if (false != M('comment')->where("r_id = $r_id")->delete()) {
            $tempdata = "删除成功！";
        } else {
            $tempdata = "删除失败";
        }
        echo json_encode($tempdata);
    }

    //权限验证
    public function _initialize()
    {
        header("Content-type:text/html;charset=utf-8");
        if (ACTION_NAME != 'login' && ACTION_NAME != 'checkLogin' && ACTION_NAME != 'verify') {
            if (null == session('flag') || session('flag') != 'logok') {
                redirect(U('Index/login'));
            }
        }
    }
}