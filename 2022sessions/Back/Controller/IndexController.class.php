<?php

namespace Back\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        if (!empty(session('LUSER'))) {
            $this->redirect('Total/index');
            return;
        }
        $this -> display();
    }
}