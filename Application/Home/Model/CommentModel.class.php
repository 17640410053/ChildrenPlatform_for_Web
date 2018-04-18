<?php
namespace Home\Model;

use Think\Model;

class CommentModel extends Model
{
    protected $_validate = array(
    );

    protected $_auto = array(
        array('datetime', 'get_date', self::MODEL_INSERT, 'callback'),
    );

    function get_date()
    {
        return date('Y-m-d H:i:s');
    }

}
