<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
        private $appid = 'wxefacc5dcde4cbf2b';
        private $appSecret = '3dfab71e96c5c7278daf9ed8cf1bdfa3';
        //private $link = 'https://wx.bjcpn.com/tpa/2022sessions.php/home/index/lists?cat=jjlh';
        //private $link = 'https://wx.bjcpn.com/tpa/2022sessions.php/home/index/lists?cat=jjlh&/uid/56/device/ffffffff-be0d-4b20-8e6b-6f8e0033c587=';
        private $link;
        public function getweixinsharetoken(){

        $this->link = I('get.shareurl');
    try {
        $data = $this->getCacheInfo();
        $ticket = '';
        if(isset($data['ticket'])&& $data['time']>=time()){
            $ticket = $data['ticket'];
        }
        if(!$ticket || $data['time'] < time()){
            $accessToken = '';
            if(isset($data['accessToken']) && $data['time']>=time()){
                $accessToken = $data['accessToken'];
            }
            if (!$accessToken || $data['time'] < time()) {
                $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$this->appid."&secret=".$this->appSecret;
                $res = json_decode(file_get_contents($url), true);
                if (!$res || empty($res['access_token'])){
                    throw new \Exception('微信授权失败');
                    // echo json_encode('微信授权失败');
                } 
                $accessToken = $res['access_token'];
                // Cache::set('wxAccessToken', $accessToken, 7000);
            }
            $ticketUrl = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token={$accessToken}&type=jsapi";
            $result = json_decode(file_get_contents($ticketUrl), true);
            if (!$result || empty($result['ticket'])){
                throw new \Exception('ticket获取失败');
                // echo json_encode('ticket获取失败');
            } 
            $ticket = $result['ticket'];
            $this->setCacheInfo($accessToken,$ticket);
            // Cache::set('wxTicket', $ticket, 7000);
        }
      $this->link = htmlspecialchars_decode($this->link);
        $param['jsapi_ticket'] = $ticket;
        $param['noncestr'] = md5(mt_rand(1000000,9999999));
        $param['timestamp'] = time();
        $param['url'] = $this->link;
        $str = '';
        foreach ($param as $k => $v) {
            $str .= $k.'='.$v.'&';
        }
        $sign = sha1(trim($str, '&'));
        $resp['appId'] = $this->appid;
        $resp['timestamp'] = $param['timestamp'];
        $resp['nonceStr'] = $param['noncestr'];
        $resp['signature'] = $sign;
        // return json($resp);
        echo(json_encode($resp));
        return;
    } catch (\Exception $e) {
        echo($e->getMessage());
    }
    }


        //获取文件的内容
    public  function getCacheInfo(){
            return json_decode(file_get_contents('cache.txt'),true);
        }

        //设置文件的内容
    public  function setCacheInfo($accessToken='',$ticket=''){
            $time = time()+6999;
            $data = json_encode(['accessToken'=>$accessToken,'ticket'=>$ticket,'time'=>$time]);
            return file_put_contents('cache.txt',$data);
        }

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
        $img  = 'bg.jpg';
        $news = M('News');
        switch ($cat) {

            case 'jjlh':
                $list = $news->where(['cat_id' => 10])->order('id desc')->select();
                $cid = 10;
                break;
            case 'xczb':
                $list = $news->where(['cat_id' => 11])->order('id desc')->select();
                $cid = 11;
                break;
            case 'yqdbg':
                $list = $news->where(['cat_id' => 12])->order('id desc')->select();
                $cid = 12;
                break;
            case 'gqtj':
                $list = $news->where(['cat_id' => 13])->order('id desc')->select();
                $cid = 13;
                break;
            case 'rmhd':
                $list = $news->where(['cat_id' => 14])->order('id desc')->select();
                $cid = 14;
                break;
            case 'lzxs':
                $list = $news->where(['cat_id' => 15])->order('id desc')->select();
                $cid = 15;
                break;
            case 'lhtk':
                $list = $news->where(['cat_id' => 16])->order('id desc')->select();
                $cid = 16;
                break;
            case 'gdpl':
                $list = $news->where(['cat_id' => 17])->order('id desc')->select();
                $cid = 17;
                break;
            case 'jrp':
                $list = $news->where(['cat_id' => 18])->order('id desc')->select();
                $cid = 18;
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