<?php
namespace Admin\Controller;

use Think\Controller;

class BaseController extends Controller
{
    public function _initialize()
    {
        header("Content-type:text/html;charset=utf-8");
        $this->checkAdmin();
    }

    private function checkAdmin()
    {
        if (!session('?name')) {
            $this->error('无权限访问此页，请先登录', U('Admin/index/login'));
        }
    }
}