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
                    $this->success("登陆成功！");
                } else {
                    $this->error("用户名或密码错误！");
                }
            } else {
                $this->error("请输入用户名密码！");
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