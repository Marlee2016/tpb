<?php

namespace Home\Controller;

use Think\Controller;

class IndeController extends Controller
{
    public function index()
    {
        // $list = M('News')->field('news.id, title, desc, link, pic, cat_id, category.id as cid')->join('Category on news.cat_id=category.id', 'left')->where('category.id!=3 and category.id!=4')->limit(10)->order('id desc')->select();
        $list = M('News')->field('news.id, title, desc, link, pic, status,addtime,cat_id, category.id as cid')->join('Category on news.cat_id=category.id', 'left')->limit(10)->order('id desc')->select();
        // $list = M('News')->field('news.id, title, desc, link, pic,status, cat_id, category.id as cid')->join('Category on news.cat_id=category.id', 'left')->where('category.id!=3 and status=0')->limit(10)->order('id desc')->select();
        $this->assign('list', $list);
        $this->display();
    }

    public function lists()
    {
        $cat  = I('get.cat');
        $list = '';
        $cid = 0;
        $img  = '';
        $news = M('News');
        switch ($cat) {

            case 'sm':
                $list = $news->where(['cat_id' => 10])->order('id desc')->select();
                $cid = 10;
                $img  = 'bg.jpg';
                break;
            case 'jj':
                $list = $news->where(['cat_id' => 11])->order('id desc')->select();
                $cid = 11;
                $img  = 'bg.jpg';
                break;
            case 'zb':
                $list = $news->where(['cat_id' => 12])->order('id desc')->select();
                $cid = 12;
                $img  = 'bg.jpg';
                break;
            case 'kz':
                $list = $news->where(['cat_id' => 13])->order('id desc')->select();
                $cid = 13;
                $img  = 'bg.jpg';
                break;
            case 'dbg':
                $list = $news->where(['cat_id' => 14])->order('id desc')->select();
                $cid = 14;
                $img  = 'bg.jpg';
                break;
            case 'lz':
                $list = $news->where(['cat_id' => 15])->order('id desc')->select();
                $cid = 15;
                $img  = 'bg.jpg';
                break;
            case 'hg':
                $list = $news->where(['cat_id' => 16])->order('id desc')->select();
                $cid = 16;
                $img  = 'bg.jpg';
                break;
            case 'zw':
                $list = $news->where(['cat_id' => 17])->order('id desc')->select();
                $cid = 17;
                $img  = 'bg.jpg';
                break;
            case 'ht':
                $list = $news->where(['cat_id' => 18])->order('id desc')->select();
                $cid = 18;
                $img  = 'bg.jpg';
                break;
            case 'hd':
                $list = $news->where(['cat_id' => 19])->order('id desc')->select();
                $cid = 19;
                $img  = 'bg.jpg';
                break;
            case 'jrp':
                $list = $news->where(['cat_id' => 20])->order('id desc')->select();
                $cid = 20;
                $img  = 'bg.jpg';
                break;    
            case 'qyfw':
                $list = $news->where(['cat_id' => 21])->order('id desc')->select();
                $cid = 21;
                $img  = 'bg.jpg';
                break;
            case 'bmfw':
                $list = $news->where(['cat_id' => 22])->order('id desc')->select();
                $cid = 22;
                $img  = 'bg.jpg';
                break;
            case 'dwjw':
                $list = $news->where(['cat_id' => 23])->order('id desc')->select();
                $cid = 23;
                $img  = 'bg1.jpg';
                break;
           case 'cpyx':
                $list = $news->where(['cat_id' => 24])->order('id desc')->select();
                $cid = 24;
                $img  = 'bg1.jpg';
                break;
            case 'wybs':
                $list = $news->where(['cat_id' => 25])->order('id desc')->select();
                $cid = 25;
                $img  = 'bg.jpg';
                break;
            case 'yyj':
                $list = $news->where(['cat_id' => 26])->order('id desc')->select();
                $cid = 26;
                $img  = 'bg.jpg';
                break;  
        }

        $this->assign('list', $list);
        $this->assign('cid', $cid);
        $this->assign('img', $img);
        
        if ($cid == 3) {
            $res = M('News')->where(['cat_id'=>$cid])->find();
            // dd($res['link']);
            $this->assign('link', $res['link']);
            $this->display('list-sb');
        } else if ($cid == 4) {
             $res = M('News')->where(['cat_id'=>$cid])->find();
            $this->assign('link', $res['link']);
            $this->display('list-zz');
        } else {
            $this->display('list');
        }
    }

    public function news()
    {
        $id = I('get.id');
        $cid = I('get.cid');
        // $sta = I('get.cid');
        $link = M('News')->where(['id'=>$id])->getField('link');
        $this->assign('link', $link);

        if ($cid == 1) {
            $this->display('news');
        } else if ($cid == 2 || $cid == 5) {
            $this->display('new');
        }
    }
}