<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    private $times = 5; // 每人每天有5次投票机会

    public function index()
    {
        if (empty(session('user_openid'))) {
            header('Location: https://open.weixin.qq.com/connect/oauth2/authorize?appid=' . C('APPID') . '&redirect_uri=' . urlencode(C('REDIRECT_URL')) . '&response_type=code&scope=' . C('SCOPE') . '&state=' . C('STATE') . '#wechat_redirect');
        } else {
            $this->display();
        }
    }

    public function lists()
    {
        $list = M('Vote_user')->order('id')->select();
        // dd($list);

        $this->assign('list', $list);
        $this->display('list');
    }

    public function show($uid)
    {
        $show = M('Vote_user')->field('name, story, story_img')->find($uid);

        $this->assign('show', $show);
        $this->display();
    }

    public function vote()
    {
        // 是否到活动时间
        $final = strtotime('2019-03-01 23:59:59');
        $current = strtotime(date('Y-m-d H:i:s'));
        if ($current >= $final) {
            $info = '点赞活动已结束！';
            $this->ajaxReturn(['info'=>$info]);
            return;
        }

        $uid = I('post.uid');
        $voterOpenId = session('user_openid');
        // $voterOpenId = 'mrlee';
        $voterWxName = session('user_nickname');
        // $voterWxName = 'lee';
        $voterIp     = $_SERVER["REMOTE_ADDR"];

        // 是否是当天的初次投票
        $voteCtrl = M('Vote_ctrl');
        $voteUser = M('Vote_user');
        $rs       = $voteCtrl->where(['uid' => $uid, 'voter_openid' => $voterOpenId])->order('id desc')->find();
        if ($rs) {
            // 该帐号已经参与过活动，判断今天是否投过票
            $lastDay = explode(' ', $rs['vote_time'])[0];// 上次投票日期（2019-01-13）
            $today   = date('Y-m-d');
            if (strtotime($lastDay) < strtotime($today)) {
                // 今天没有投过票
                $code = $this->doVote($uid, $voterOpenId, $voterWxName, $voterIp, $voteCtrl, $voteUser);
            } else {
                // 今天已经投过票了，判断是否还有次数
                $rs = $voteCtrl->field('vote_time')->where(['uid' => $uid, 'voter_openid' => $voterOpenId])->order('id desc')->limit(5)->select();

                $times = []; // 存放最新5次的投票时间
                foreach ($rs as $r) {
                    $times[] = $r['vote_time'];
                }
                $chance = 0; // 初始化今天的机会次数
                for ($i = 0; $i < count($times); $i++) {
                    if (explode(' ', $times[$i])[0] == $today) {
                        $chance++;
                    } else {
                        break;
                    }
                }

                if ($chance < $this->times) {
                    // 还有机会
                    $code = $this->doVote($uid, $voterOpenId, $voterWxName, $voterIp, $voteCtrl, $voteUser);
                } else {
                    // 不能点赞
                    $code = 'limit';
                }
            }
        } else {
            // 第一次参加投票，直接操作
            $code = $this->doVote($uid, $voterOpenId, $voterWxName, $voterIp, $voteCtrl, $voteUser);
        }

        $vote_num = $voteUser->where("id = '$uid'")->getField('score');

        $this->ajaxReturn(['code' => $code, 'num' => $vote_num, 'id' => $uid]);
    }

    private function doVote($uid, $voterOpenId, $voterWxName, $voterIp, $m1, $m2)
    {
        $data = [
            'uid'          => $uid,
            'voter_openid' => $voterOpenId,
            'voter_wxname' => $voterWxName,
            'vote_time'    => date('Y-m-d H:i:s'),
            'voter_ip'     => $voterIp
        ];

        M()->startTrans();
        $r1 = $m1->add($data); // 添加点赞控制表中的数据
        $r2 = $m2->where("id = '$uid'")->setInc('score'); // 更新选手票数
        if ($r1 && $r2) {
            M()->commit();
            $code = 'ok';
        } else {
            M()->rollback();
            $code = 'fail';
        }

        return $code;
    }

    public function search()
    {
        $name = I('post.name');
        $res  = M('Vote_user')->where("name like '%$name%'")->select();

        $this->assign('res', $res);
        $this->display();
    }
}