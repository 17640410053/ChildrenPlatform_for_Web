<?php

namespace Admin\Controller;

use Think\Controller;

class ProjectController extends BaseController
{
    public function prolist()
    {
        $promodel = M('commodity');
        $pro = $promodel->order('commodity_id desc')->select();
        //调用视图层显示数据
        $this->pro = $pro;
//        dump($url = $this->url()."5a02ac0ff172e.jpg");
//        $image = new \Think\Image();
//        $image -> open($url);
//        dump(__ROOT__);
//        dump($_SERVER['DOCUMENT_ROOT']);
//        die();

        $this->display();
    }

    public function uploadpro()
    {
        $List = M('type');
        $List2 = M('subsettype');
        $parent = $List->select();
        foreach ($parent as $n => $val) {
            $parent[$n]['voo'] = $List2->where('type_id = ' . $val['type_id'] . '')->order()->select();
        }
        $this->assign('list', $parent);
        $this->display();
    }

    public function prodetail($id)
    {
        $promodel = M('commodity');
        session('commodity_id', $id);
        $List = M('type');
        $List2 = M('subsettype');
        $parent = $List->select();
        foreach ($parent as $n => $val) {
            $parent[$n]['voo'] = $List2->where('type_id = ' . $val['type_id'] . '')->order()->select();
        }

        $this->assign('list', $parent);
        $pro_detail = $promodel->where("commodity_id = $id")->select();
        $re['subsetType_id'] = $pro_detail[0]['subsettype_id'];
        $pro_detail[0]['subsettype_id'] = M('subsettype')->where($re)->getField("name");
        $this->pro_detail = $pro_detail;
        $this->display();
    }

    //删除
    public function delpro()
    {
        $promodel = M('commodity');
        $commodity_id = I('commodity_id');
        $s_img_url = $this->url_image("commodity_image") . $promodel->where("commodity_id=$commodity_id")->getField("small_pic");
        $m_img_url = $this->url_image("commodity_image") . $promodel->where("commodity_id=$commodity_id")->getField("middle_pic");
        if (false !== $promodel->where("commodity_id=$commodity_id")->delete()) {
            unlink($s_img_url);
            unlink($m_img_url);
            $tempdata = "删除成功！";
        } else {
            $tempdata = "删除失败";
        }
        echo json_encode($tempdata);
    }

    //修改状态
    public function changestate()
    {
        $promodel = M('commodity');
        $commodity_id = I('commodity_id');
        $promodel->state = I('state');
        if (false != $promodel->where("commodity_id=$commodity_id")->save()) {
            $tempdata = "修改成功！";
        } else {
            $tempdata = "修改失败！";
        }
        echo json_encode($tempdata);
    }

    //添加项目
    public function up_pro()
    {
        $subsettype_id = I('post.type');
        $type_id = M('subsettype')->where("subsettype_id = $subsettype_id")->getField("type_id");
        $pro['name'] = I('post.f_name');
        $pro['type_id'] = $type_id;
        $pro['subsetType_id'] = $subsettype_id;
        $pro['hintNum'] = rand(1000, 9999);
        $pro['collectNum'] = rand(100, 999);
        $pro['starNum'] = rand(1, 5);
        $pro['price'] = I('post.price');
        $pro['telephone'] = I('post.telephone');
        $pro['address'] = I('post.address');
        $pro['url'] = I('post.url');
        $pro['company_id'] = 1;
        if ($_FILES['file']['error'] == 0) {
            $upinfo = $this->img_upload();
            $s_img = $upinfo['s_img']['savename'];
            $m_img = $upinfo['m_img']['savename'];
            if ($s_img != null) {
                $pro['small_pic'] = $s_img;
            }
            if ($m_img != null) {
                $pro['middle_pic'] = $m_img;
            }
            if (false != M('commodity')->add($pro)) {
                redirect('prolist');
            } else {
                $this->error('信息填写有误');
            }
        }
    }

    public function save_pro()
    {
        $items = D('commodity');
        $commodity_id = I('commodity_id');
        if (!$data = $items->create()) {
            //防止中文乱码
            header("Content-type:text/html; charset=utf-8");
            $this->error($items->getError());
        }
        if (false != $items->where("commodity_id=$commodity_id")->save()) {
            $tempdata = "修改成功！";
        } else {
            $tempdata = "修改失败！";
        }
        echo json_encode($tempdata);
    }

    public function up_img()
    {
        $commodity = M('commodity');
        $commodity_id = I('commodity_id');
        $s_img_url = $this->url_image("commodity_image") . $commodity->where("commodity_id=$commodity_id")->getField("small_pic");
        $m_img_url = $this->url_image("commodity_image") . $commodity->where("commodity_id=$commodity_id")->getField("middle_pic");
        $m_base64 = I('m_base64');
        $s_base64 = I('s_base64');
        if ($m_base64 != null) {
            $m_img = $this->base64_upload(null, $m_base64);
            $pro['m_pic'] = $m_img;
            if (false != $commodity->where("commodity_id = $commodity_id")->save($pro)) {
                unlink($m_img_url);
                $tempdata = $m_img;
            } else {
                $tempdata = "修改失败！";
            }
            echo json_encode($tempdata);
        }
        if ($s_base64 != null) {
            $s_img = $this->base64_upload($s_base64, null);
            $pro['small_pic'] = $s_img;
            if (false != $commodity->where("commodity_id = $commodity_id")->save($pro)) {
                unlink($s_img_url);
                $tempdata = "修改成功！";
            } else {
                $tempdata = "修改失败！";
            }
            echo json_encode($tempdata);
        }
    }

    public function up_type()
    {
        $items = M('commodity');
        $commodity_id = I('commodity_id');
        $subsettype_id = I('subsettype_id');
        $m_id = M('subsettype')->where("subsettype_id = $subsettype_id")->getField("type_id");
        $up_pro['type_id'] = $m_id;
        $up_pro['subsetType_id'] = $subsettype_id;
        if (false !== $items->where("commodity_id = $commodity_id")->save($up_pro)) {
            $tempdata = "修改成功！";
        } else {
            $tempdata = "修改失败！";
        }
        echo json_encode($tempdata);
    }

    //上传图片
    public function img_upload()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 314572800;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Public/Uploads/commodity_image/'; // 设置附件上传根目录
        $upload->saveName = 'uniqid';
        $upload->replace = true;
        $upload->autoSub = false;
        // 上传
        $info = $upload->upload();
        if (!$info) {
            // 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功
            //裁剪图片
            $s_url = $this->url_image("commodity_image") . $info['s_img']['savename'];
            $m_url = $this->url_image("commodity_image") . $info['m_img']['savename'];
            $image = new \Think\Image();
            if ($info['s_img']['savename'] != null) {
                $image->open($s_url);
                $image->thumb(500, 500, \Think\Image::IMAGE_THUMB_CENTER)->save($s_url);
            }
            if ($info['m_img']['savename'] != null) {
                $image->open($m_url);
                $image->thumb(260, 134, \Think\Image::IMAGE_THUMB_CENTER)->save($m_url);
            }
            return $info;
        }
    }

    public function base64_upload($s_base64, $m_base64)
    {
        //修改大图
        if ($m_base64 != null) {
            $base64_image = str_replace(' ', '+', $m_base64);
            if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image, $result)) {
                if ($result[2] == 'jpeg') {
                    $m_image_name = uniqid() . '.jpg';
                } else {
                    $m_image_name = uniqid() . '.' . $result[2];
                }
                $image_file = "./Public/Uploads/commodity_image/{$m_image_name}";
                if (file_put_contents($image_file, base64_decode(str_replace($result[1], '', $m_base64)))) {
                    $image = new \Think\Image();
                    $m_url = $this->url_image("commodity_image") . $m_image_name;
                    if ($m_image_name != null) {
                        $image->open($m_url);
                        $image->thumb(260, 134, \Think\Image::IMAGE_THUMB_CENTER)->save($m_url);
                    }
                    return $m_image_name;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
        //修改小图
        if ($s_base64 != null) {
            $base64_image = str_replace(' ', '+', $s_base64);
            if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $base64_image, $result)) {
                if ($result[2] == 'jpeg') {
                    $s_image_name = uniqid() . '.jpg';
                } else {
                    $s_image_name = uniqid() . '.' . $result[2];
                }
                $image_file = "./Public/Uploads/commodity_image/{$s_image_name}";
                if (file_put_contents($image_file, base64_decode(str_replace($result[1], '', $s_base64)))) {
                    $image = new \Think\Image();
                    $s_url = $this->url_image("commodity_image") . $s_image_name;
                    if ($s_image_name != null) {
                        $image->open($s_url);
                        $image->thumb(500, 500, \Think\Image::IMAGE_THUMB_CENTER)->save($s_url);
                    }
                    return $s_image_name;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }

    public function typelist()
    {
        $type_sql = M('type');
        $subsetType_sql = M('subsettype');
        $parent = $type_sql->select();
        foreach ($parent as $n => $val) {
            $parent[$n]['voo'] = $subsetType_sql->where('type_id = ' . $val['type_id'])->select();
        }
        $this->assign('list', $parent);
        $this->display();
    }

    public function subset_type_list(){
        $type_sql = M('type');
        $subsetType_sql = M('subsettype');
        $parent = $subsetType_sql->select();
        foreach ($parent as $n => $val) {
            $parent[$n]['type_name'] = $type_sql->where('type_id = ' . $val['type_id'])->getField('name');
        }
        $this->assign('list', $parent);
        $this->display();
    }

    public function del_type()
    {
        $type_sql = M('type');
        $type_id = I('type_id');
        if (false !== $type_sql->where("type_id=$type_id")->delete()) {
            $tempdata = "删除成功！";
        } else {
            $tempdata = "删除失败！";
        }
        echo json_encode($tempdata);
    }

    public function del_subset_type()
    {
        $type_sql = M('subsettype');
        $type_id = I('subsettype_id');
        if (false !== $type_sql->where("subsetType_id=$type_id")->delete()) {
            $tempdata = "删除成功！";
        } else {
            $tempdata = "删除失败！";
        }
        echo json_encode($tempdata);
    }

    public function update_type(){
        $type_sql = M('type');
        $type_id = I('type_id');
        $type['name'] = I('name');
        if (false !== $type_sql->where("type_id=$type_id")->save($type)) {
            $tempdata = "修改成功！";
        } else {
            $tempdata = "修改失败！";
        }
        echo json_encode($tempdata);
    }

    public function update_subset_type(){
        $type_sql = M('subsettype');
        $type_id = I('subsetType_id');
        $type['name'] = I('name');
        if (false !== $type_sql->where("subsetType_id=$type_id")->save($type)) {
            $tempdata = "修改成功！";
        } else {
            $tempdata = "修改失败！";
        }
        echo json_encode($tempdata);
    }

    public function add_subset_type(){
        $type_sql = M('subsettype');
        $type['type_id'] = I('type_id');
        $type['name'] = I('name');
        if (false !== $type_sql ->add($type)){
            $tempdata = "添加成功！";
        } else {
            $tempdata = "添加失败！";
        }
        echo json_encode($tempdata);
    }

    public function add_type(){
        $type_sql = M('type');
        $type['name'] = I('name');
        if (false !== $type_sql ->add($type)){
            $tempdata = "添加成功！";
        } else {
            $tempdata = "添加失败！";
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