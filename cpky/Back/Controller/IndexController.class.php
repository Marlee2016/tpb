<?php

namespace Back\Controller;

use Think\Controller;
use Think\Page;

class IndexController extends Controller
{
    public function login()
    {
        if (IS_POST) {
            $admin = M('Admin');
            $name = I('post.name');
            if ($res = $admin->where("name='%s'", $name)->find()) {
                $password = I('post.password');
                if ($res['password'] = md5($password)) {
                    session('admin', $name);
                    $this->redirect("Index/index", [], 1, '<h1>ok</h1>');
                }
            } else {
                $this->redirect("Index/login", [], 1, '<h1>failed! try again...</h1>');
            }
        }

        $this->display();
    }

    public function isLogin()
    {
        if (empty(session('admin'))) {
            $this->redirect("Index/login", [], 2, '<h1>please login...</h1>');
        }
    }

    public function index()
    {
        $this->isLogin();

        $q = M('User');
        $per = 12;
        $now = $_GET['p'] ? $_GET['p'] : 1;
        $count = $q->count();
        $p = new Page($count, $per);
        $p->setConfig('prev', '上一页');
        $p->setConfig('next', '下一页');
        $show = $p->show();
        $list = $q->order('id DESC')->page($now . ',' . $per)->select();

        $this->assign('list', $list);
        $this->assign('show', $show);
        $this->display();
    }

    public function detail($id)
    {
        $this->isLogin();

        $ques = M('User')->find($id);
        // $ques['content'] = html_entity_decode($ques['content']);

        $this->assign('ques', $ques);
        $this->display();
    }

    

    public function destroy($id)
    {
        $this->isLogin();

        if (M('User')->where("id=$id")->save(['active' => -1])) {
            $this->redirect("Index/index", [], 1, '<h1>ok</h1>');
        } else {
            dd(M('User')->getError());
        }
    }

    public function logout()
    {
        session('admin', null);
        $this->redirect("Index/login", [], 1, '<h1>goodbye...</h1>');
    }
}