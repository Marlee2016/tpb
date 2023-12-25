<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>“最美汤山人”评选活动</title>
    <style type="text/css">
        html, body {
            background-color: #fff!important;
        }
    </style>
    <script>
        document.querySelector('html').style.fontSize = window.screen.width / 20 + 'px';
        window.onresize = function () {
            document.querySelector('html').style.fontSize = window.screen.width / 20 + 'px';
        }
    </script>
    <link rel="stylesheet" href="/tp/Public/zmtsr/home/css/article.css"/>
    <style>
        html, body {
            height: 100%;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="head"></div>
    <div class="search">
        <!--<div class="search-input" contenteditable="true">请输入名字搜索...</div>-->
        <!--<div class="search-btn" contenteditable="false" data-url="/tp/zmtsr.php/Home/Index/search"></div>-->
        <form action="/tp/zmtsr.php/Home/Index/search" method="post">
            <input class="search-input" type="text" name="name" placeholder="请输入名字搜索..."/>
            <button class="search-btn"></button>
        </form>
    </div>
    <div class="main">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="column">
                <a href="/tp/zmtsr.php/Home/Index/show?uid=<?php echo ($vo['id']); ?>">
                    <div class="article-img" data-img="http://wx.bjcpn.com/tp/Public/zmtsr/home/<?php echo ($vo['avatar']); ?>"></div>
                    <div class="article-info"><?php echo ($vo['name']); ?></div>
                </a>
                <div class="do-vote">
                    <button data-url="/tp/zmtsr.php/Home/Index/vote" data-id="<?php echo ($vo['id']); ?>">投TA一票</button>&nbsp;&nbsp;&nbsp;
                    <span class="vote_num" data-id="<?php echo ($vo['id']); ?>"><?php echo ($vo['score']); ?></span>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<div class="tip"></div>
</body>
<script type="text/javascript" src="/tp/Public/zmtsr/home/js/jquery.min.js"></script>
<script>
    $(function () {
        $('.article-img').each(function () {
            $(this).css('backgroundImage', 'url(' + $(this).data('img') + ')');
        });

        // search
        $('.search-btn').click(function (e) {
            if (!$('.search-input').val()) {
                e.preventDefault();
            }
        });

        // vote
        $('.do-vote').children('button').click(function () {
            var url = $(this).data('url');
            var uid = $(this).data('id');
            $.ajax({
                type: 'POST',
                url: url,
                data: {uid: uid},
                success: function (msg) {
                    if (msg.code == 'ok') {
                        var num = $('.vote_num');
                        for (var i = 0; i < num.length; i++) {
                            if ($(num[i]).data('id') == msg.id) {
                                $(num[i]).text(parseInt($(num[i]).text()) + 1);
                            }
                        }
                    } else if (msg.code == 'fail') {
                        alert('点赞失败，请重试~');
                    } else if (msg.code == 'limit') {
                        alert('你今天对该候选人的投票次数已达上限！');
                    }
                }
            });
        });
    });
</script>
</html>