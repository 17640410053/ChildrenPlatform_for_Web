<?php
namespace Home\Model;

use Think\Model;

class StarModel extends Model
{
    protected $_validate = array(

    );

    protected $_auto = array(
        array('starTime', 'get_date', self::MODEL_INSERT, 'callback'),
    );

    function get_date()
    {
        return date('Y-m-d H:i:s');
    }

}
