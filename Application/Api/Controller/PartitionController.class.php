<?php

namespace Api\Controller;

use Think\Controller;

class PartitionController extends BaseController
{
    public function GetPartition()
    {
        $partition_sql = M('subsettype');
        $data = $partition_sql->select();
        $this->ajaxReturn($data);
    }
}