<?php
namespace Admin\Model;

use Think\Model;

class ItemsModel extends Model
{
    protected $_validate = array(
        array('f_name', '', '该物品已存在', 0, 'unique', self::MODEL_INSERT),
    );

    protected $_auto = array(

    );

    function getdate()
    {
        return date('Y-m-d H:i:s');
    }

}
