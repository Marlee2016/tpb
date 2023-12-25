<?php

namespace Back\Model;

use Think\Model;

class NewsModel extends Model
{
    protected $patchValidate = true;
    protected $_validate = array(
        array('title', 'require', '请填写标题'),
        array('desc', 'require', '请填写简介'),
        array('link', 'require', '请填写链接')
    );

    protected $_auto = array(
        array('author', '昌平外事'),
        array('addtime', 'getCurrDate', 1, 'function'),
        array('updtime', 'getCurrDate', 2, 'function'),
        array('status', 1)
    );
}