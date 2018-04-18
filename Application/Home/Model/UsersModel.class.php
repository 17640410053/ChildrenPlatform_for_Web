<?php
namespace Home\Model;

use Think\Model;

class UsersModel extends Model
{
    protected $_validate = array(
        array('telephone', 'require', '手机号必须！', 1),
        array('telephone', '', '手机号已经存在', 0, 'unique', self::MODEL_INSERT),
        array('telephone','/^1[34578]\d{9}$/','手机号码格式不正确',0),
    );

    protected $_auto = array(
        array('regTime', 'get_date', self::MODEL_INSERT, 'callback'),
        array('loginTime', 'get_date', self::MODEL_INSERT, 'callback'),
        array('password', 'md5', self::MODEL_INSERT, 'function'),
        array('loginIp','get_client_ip',1,'function'),
        array('regIp','get_client_ip',1,'function'),
    );

    function get_date()
    {
        return date('Y-m-d H:i:s');
    }

}
