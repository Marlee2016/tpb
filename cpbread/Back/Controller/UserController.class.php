<?php

namespace Back\Controller;

use Think\Controller;

class UserController extends Controller
{
    public function login()
    {
        if (IS_POST) {
            $user = I('post.user', '', 'trim');
            $pass = I('post.pass', '', 'trim');
            if ($user && $pass) {
                if (M('Admin')->where(array('name'=>$user, 'pass'=>md5($pass)))->find()) {
                    session('LUSER', $user);
                    $this->ajaxReturn(array('code'=>1));
                } else {
                    $this->ajaxReturn(array('code'=>2));
                }
            } else {
                $this->ajaxReturn(array('code'=>3));
            }
        }

        $this->redirect('Index/index');
    }

    public function logout()
    {
        session('LUSER', null);
        $this->redirect('Index/index');
    }
}