<?php
namespace Admin\Controller;

use Think\Controller;

class CarouselController extends BaseController
{
    public function url_carousel(){
        $url_carousel = realpath('./')."\\Public\\Uploads\\carouselpic\\";
        return $url_carousel;
    }

    public function carousellist()
    {
        //调用模型层获取数据
        $carouselmodel = M('carousel');
        $carousel = $carouselmodel->order('c_id desc')->select();
        //调用视图层显示数据
        $this->carousel = $carousel;
        $this->display();
    }

    public function addcarousel(){
        $item = M('items');
        $this->items = $item -> select();
        $this->display();
    }

    //删除
    public function del_carousel(){
        $user = M('carousel');
        $c_id = I('c_id');
        $carousel_img = M('carousel') ->where("c_id = $c_id")->getField("pic");
        if (false != $user->where("c_id = $c_id")->delete()) {
            if ($carousel_img != "default.jpg"){
                $carousel_img_url = $this->url_carousel().$carousel_img;
                unlink($carousel_img_url);
            }
            $tempdata = "删除成功！";
        } else {
            $tempdata = "删除失败";
        }
        echo json_encode($tempdata);
    }

    //修改状态
    public function change_state_carousel()
    {
        $carouselmodel = M('carousel');
        $c_id = I('c_id');
        $carouselmodel->state = I('state');
        if (false != $carouselmodel->where("c_id=$c_id")->save()) {
            $tempdata = "修改成功！";
        } else {
            $tempdata = "修改失败！";
        }
        echo json_encode($tempdata);
    }

    //添加轮播图
    public function add_carousel()
    {
        $carousel['hint'] = rand(1000, 9999);
        $carousel['f_id'] = I('post.f_id');
        $carousel['name'] = M('items') -> where("f_id =".$carousel['f_id'])->getField('f_name');
        if ($_FILES['file']['error'] == 0) {
            $up_info = $this->img_upload();
            $pic = $up_info['pic']['savename'];
            if ($pic != null) {
                $carousel['pic'] = $pic;
            }
            if (false != M('carousel')->add($carousel)) {
                redirect('carousellist');
            } else {
                $this->error('信息填写有误');
            }
        }
    }

    //上传图片
    public function img_upload()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 314572800;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Public/Uploads/carouselpic/'; // 设置附件上传根目录
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
            $pic_url = $this->url_carousel(). $info['pic']['savename'];
            $image = new \Think\Image();
            if ($info['pic']['savename'] != null) {
                $image->open($pic_url);
                $image->thumb(600, 422, \Think\Image::IMAGE_THUMB_CENTER)->save($pic_url);
            }
            return $info;
        }
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