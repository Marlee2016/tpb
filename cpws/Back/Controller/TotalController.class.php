<?php

namespace Back\Controller;

use Think\Page;
use Think\Upload;

class TotalController extends BaseController
{
    public function index()
    {
        $this->display();
    }

    public function lists()
    {
        $p    = I('get.p', 1);
        $size = 10;

        $cat = I('get.cat');
        $cid = 10;

        if ($cat) {
            $cid = $this->getCid($cat);
        }
        $cname = M('Category')->where(['id'=>$cid])->getField('name');
        $rs = $this->showList($cid, $p, $size); // 默认取昌平报新闻

        $this->assign('news', $rs[0]);
        $this->assign('nav', $rs[1]);
        $this->assign('cat', $cat);
        $this->assign('cname', $cname);
        $this->display('list');
    }

    public function newsAdd()
    {
        $cat = I('get.cat');
        $cid = $this->getCid($cat);
        $cname = M('Category')->where(['id'=>$cid])->getField('name');

        if (IS_POST) {
            $catName = I('post.catName');
            if ($_FILES) {
                if ($_FILES['file']['error'] == 0) {
                    // 保存目录
                    $baseDir = $_SERVER ['DOCUMENT_ROOT'] . '/tp/Public/cpws/home/upload/';
                    $path    = $catName . '/' . date('Ymd') . '/';
                    $dir     = $baseDir . $path;
                    if (!is_dir($dir)) {
                        @mkdir($dir, 0777, true);
                    }
                    // 文件名
                    $file = createRandString(9);
                    // 保持原有后缀
                    $fix = substr($_FILES['file']['name'], strrpos($_FILES['file']['name'], '.'));
                    if (move_uploaded_file($_FILES['file']['tmp_name'], $dir . $file . $fix)) {
                        $pic = $path . $file . $fix;
                        session('pic', $pic);
                        $this->ajaxReturn(['code' => 200]);
                    }
                }
            }

            $cid = I('post.cid');
            $cname = M('Category')->where(['id'=>$cid])->getField('name');

            // $title = '[' . $cname . ']' . I('post.title');
            $title = I('post.title');
            $desc = I('post.desc');
            $link  = I('post.link');
            $status  = I('post.status');
            $cid   = I('post.cid');
            $pic   = session('pic');
            $rs    = $this->add($title, $desc, $link,$status, $pic, $cid);
            if (!$rs) {
                $this->ajaxReturn(['code' => 2]);
            } else {
                session('pic', null);
                if (is_array($rs)) {
                    $msg = $rs[0];
                    $this->ajaxReturn(['code' => 3, 'msg' => $msg]);
                }
                $this->ajaxReturn(['code' => 1]);
            }
        }

        $this->assign('cat', $cat);
        $this->assign('cname', $cname);
        $this->assign('cid', $cid);
        $this->display();
    }

    public function newsEdit()
    {
        $cat = I('get.cat', 'papers');
        if (IS_POST) {
            $catName = I('post.catName');
            if ($_FILES) {
                if ($_FILES['file']['error'] == 0) {
                    // 保存目录
                    $baseDir = $_SERVER ['DOCUMENT_ROOT'] . '/tp/Public/cpws/home/upload/';
                    $path    = $catName . '/' . date('Ymd') . '/';
                    $dir     = $baseDir . $path;
                    if (!is_dir($dir)) {
                        @mkdir($dir, 0777, true);
                    }
                    // 文件名
                    $file = createRandString(9);
                    // 保持原有后缀
                    $fix = substr($_FILES['file']['name'], strrpos($_FILES['file']['name'], '.'));
                    if (move_uploaded_file($_FILES['file']['tmp_name'], $dir . $file . $fix)) {
                        $pic = $path . $file . $fix;
                        session('pic', $pic);
                        $this->ajaxReturn(['code' => 200, 'path' => $dir . $pic]);
                    }
                }
            }
            // dd(I('post.'));

            $id      = I('post.id');
            $addTime = I('post.addtime');
            $rs      = $this->edit($id, session('pic'), $addTime);

            if ($rs < 0) {
                $this->ajaxReturn(['code' => 2]);
            } else {
                if (is_array($rs)) {
                    $msg = $rs[0];
                    $this->ajaxReturn(['code' => 3, 'msg' => $msg]);
                }
                $this->ajaxReturn(['code' => 1]);
            }
        }

        $id  = I('get.id');
        $new = M('News')->where(['id' => $id])->find();
        $this->assign('new', $new);
        $this->assign('cat', $cat);
        $this->display();
    }

    public function newsDel()
    {
        $cat = I('get.cat', 'papers');
        if (IS_POST) {
            $catName = I('post.catName');
            // if ($_FILES) {
            //     if ($_FILES['file']['error'] == 0) {
            //         // 保存目录
            //         $baseDir = $_SERVER ['DOCUMENT_ROOT'] . '/tp/Public/cpws/home/upload/';
            //         $path    = $catName . '/' . date('Ymd') . '/';
            //         $dir     = $baseDir . $path;
            //         if (!is_dir($dir)) {
            //             @mkdir($dir, 0777, true);
            //         }
            //         // 文件名
            //         $file = createRandString(9);
            //         // 保持原有后缀
            //         $fix = substr($_FILES['file']['name'], strrpos($_FILES['file']['name'], '.'));
            //         if (move_uploaded_file($_FILES['file']['tmp_name'], $dir . $file . $fix)) {
            //             $pic = $path . $file . $fix;
            //             session('pic', $pic);
            //             $this->ajaxReturn(['code' => 200, 'path' => $dir . $pic]);
            //         }
            //     }
            // }
            // dd(I('post.'));

            $id      = I('post.id');
            $addTime = I('post.addtime');
            $rs      = $this->del($id, session('pic'), $addTime);

            if ($rs < 0) {
                $this->ajaxReturn(['code' => 2]);
            } else {
                if (is_array($rs)) {
                    $msg = $rs[0];
                    $this->ajaxReturn(['code' => 3, 'msg' => $msg]);
                }
                $this->ajaxReturn(['code' => 1]);
            }
        }

        $id  = I('get.id');
        $new = M('News')->where(['id' => $id])->find();
        $this->assign('new', $new);
        $this->assign('cat', $cat);
        $this->display();
    }

    private function showList($cid, $p, $size)
    {
        $news           = M('News')->where(['cat_id' => $cid])->order('addtime desc')->page($p . ',' . $size)->select();
        $count          = M('News')->where(['cat_id' => $cid])->count();
        $page           = new Page($count, $size);
        $page->rollPage = 5;
        $page->setConfig('prev', '上一页');
        $page->setConfig('next', '下一页');
        $page->setConfig('first', '首页');
        $nav = $page->show();

        return [$news, $nav];
    }

    private function add($title, $desc, $link,$status, $pic, $catId)
    {
        $news = D('News');
        if ($news->create()) {
            $data['title']   = $title;
            $data['desc']   = $desc;
            $data['link']    = $link;
            $data['status']    = $status;
            $data['pic']     = $pic;
            $data['addtime'] = date('Y-m-d');
            $data['cat_id']  = $catId;

            return $news->add($data);
        } else {
            $err = $news->getError();

            return $err;
        }
    }

    private function edit($id, $pic = null, $addTime = null)
    {
        $news = D('News');
        if ($news->create()) {
            if ($pic) {
                $news->pic = $pic;
            }
            if ($addTime) {
                $news->addtime = $addTime;
            }

            return $news->where(['id' => $id])->save();
        } else {
            $err = $news->getError();

            return $err;
        }
    }

    private function del($id, $pic = null, $addTime = null)
    {
        $news = D('News');
        if ($news->create()) {
        //     if ($pic) {
        //         $news->pic = $pic;
        //     }
        //     if ($addTime) {
        //         $news->addtime = $addTime;
        //     }

            return $news->where(['id' => $id])->delete();
        } else {
            $err = $news->getError();

            return $err;
        }
    }

    private function getCid($cat)
    {
        $cid = 0;
        switch ($cat) {

            case 'qyfw':
                $cid = 21;
                break;
            case 'bmfw':
                $cid = 22;
                break;
            case 'dwjw':
                $cid = 23;
                break;
            case 'cpyx':
                $cid = 24;
                break;
            case 'wybs':
                $cid = 25;
                break;
            case 'yyj':
                $cid = 26;
                break;
            
        }

        return $cid;
    }
}