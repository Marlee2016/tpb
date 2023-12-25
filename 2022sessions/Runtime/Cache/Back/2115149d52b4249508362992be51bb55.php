<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" >
<title>左边导航</title>
    <base href="/tp/Public/2022sessions/Back/">
<link rel="stylesheet" type="text/css" href="Assets/css/reset.css"/>
<link rel="stylesheet" type="text/css" href="Assets/css/common.css"/>
<script type="text/javascript" src="Assets/js/jquery-1.8.3.min.js"></script>
<!--框架高度设置-->
<script type="text/javascript">
$(function(){
	$('.sidenav li').click(function(){
		$(this).siblings('li').removeClass('now');
		$(this).addClass('now');
	});

	$('.erji li').click(function(){
		$(this).siblings('li').removeClass('now_li');
		$(this).addClass('now_li');
	});

	var main_h = $(window).height();
	$('.sidenav').css('height',main_h+'px');
})
</script>
<!--框架高度设置-->
</head>

<body>
<div id="left_ctn">
    <ul class="sidenav">

                <li class="now">
            <div class="nav_m">
                <span><a>聚焦两会</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li class="now_li">
                    <span><a href="<?php echo U('Total/lists?cat=jjlh');?>" target="main">聚焦两会列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=jjlh');?>" target="main">添加聚焦两会</a></span>
                </li>
            </ul>
        </li>
        <li>
            <div class="nav_m">
                <span><a>现场直播</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li>
                    <span><a href="<?php echo U('Total/lists?cat=xczb');?>" target="main">现场直播列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=xczb');?>" target="main">添加现场直播</a></span>
                </li>
            </ul>
        </li>
        <li>
            <div class="nav_m">
                <span><a>一起读报告</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li>
                    <span><a href="<?php echo U('Total/lists?cat=yqdbg');?>" target="main">一起读报告列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=yqdbg');?>" target="main">添加一起读报告</a></span>
                </li>
            </ul>
        </li>
        <li>
            <div class="nav_m">
                <span><a>高清图集</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li>
                    <span><a href="<?php echo U('Total/lists?cat=gqtj');?>" target="main">高清图集列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=gqtj');?>" target="main">添加高清图集</a></span>
                </li>
            </ul>
        </li>
        <li>
            <div class="nav_m">
                <span><a>融媒互动</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li>
                    <span><a href="<?php echo U('Total/lists?cat=rmhd');?>" target="main">融媒互动列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=rmhd');?>" target="main">融媒互动图集</a></span>
                </li>
            </ul>
        </li>
                <li >
            <div class="nav_m">
                <span><a>履职心声</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li class="now_li">
                    <span><a href="<?php echo U('Total/lists?cat=lzxs');?>" target="main">履职心声列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=lzxs');?>" target="main">添加履职心声</a></span>
                </li>
            </ul>
        </li>
        <li>
            <div class="nav_m">
                <span><a>两会特刊</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li>
                    <span><a href="<?php echo U('Total/lists?cat=lhtk');?>" target="main">两会特刊列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=lhtk');?>" target="main">添加两会特刊</a></span>
                </li>
            </ul>
        </li>
        <li>
            <div class="nav_m">
                <span><a>观点评论</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li>
                    <span><a href="<?php echo U('Total/lists?cat=gdpl');?>" target="main">观点评论列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=gdpl');?>" target="main">添加观点评论</a></span>
                </li>
            </ul>
        </li>
    </ul>
</div>
</body>
</html>