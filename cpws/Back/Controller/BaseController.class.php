<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/10 010
 * Time: 09:46:08
 */

namespace Back\Controller;

use Think\Controller;

class BaseController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        if (empty(session('LUSER'))) {
            $this->redirect('Index/index');
        }
    }
}