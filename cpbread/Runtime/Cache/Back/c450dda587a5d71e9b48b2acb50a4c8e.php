<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" >
<title>左边导航</title>
    <base href="/tp/Public/2018SecondMeeting/Back/">
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
                <span><a>语音读报</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li class="now_li">
                    <span><a href="<?php echo U('Total/lists?cat=read');?>" target="main">读报新闻列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=read');?>" target="main">添加读报新闻</a></span>
                </li>
            </ul>
        </li>
        <!-- <li>
            <div class="nav_m">
                <span><a>聚焦</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li>
                    <span><a href="<?php echo U('Total/lists?cat=jj');?>" target="main">聚焦列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=jj');?>" target="main">添加聚焦</a></span>
                </li>
            </ul>
        </li>
        <li>
            <div class="nav_m">
                <span><a>直播</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li>
                    <span><a href="<?php echo U('Total/lists?cat=zb');?>" target="main">直播列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=zb');?>" target="main">添加直播</a></span>
                </li>
            </ul>
        </li>
        <li>
            <div class="nav_m">
                <span><a>快照</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li>
                    <span><a href="<?php echo U('Total/lists?cat=kz');?>" target="main">快照列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=kz');?>" target="main">添加快照</a></span>
                </li>
            </ul>
        </li>
        <li>
            <div class="nav_m">
                <span><a>读报告</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li>
                    <span><a href="<?php echo U('Total/lists?cat=dbg');?>" target="main">读报告列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=dbg');?>" target="main">添加读报告</a></span>
                </li>
            </ul>
        </li>
                <li >
            <div class="nav_m">
                <span><a>履职</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li class="now_li">
                    <span><a href="<?php echo U('Total/lists?cat=lz');?>" target="main">履职列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=lz');?>" target="main">添加履职</a></span>
                </li>
            </ul>
        </li>
        <li>
            <div class="nav_m">
                <span><a>回顾</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li>
                    <span><a href="<?php echo U('Total/lists?cat=hg');?>" target="main">回顾列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=hg');?>" target="main">添加回顾</a></span>
                </li>
            </ul>
        </li>
        <li>
            <div class="nav_m">
                <span><a>展望</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li>
                    <span><a href="<?php echo U('Total/lists?cat=zw');?>" target="main">展望列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=zw');?>" target="main">添加展望</a></span>
                </li>
            </ul>
        </li>
                <li>
            <div class="nav_m">
                <span><a>话题</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li>
                    <span><a href="<?php echo U('Total/lists?cat=ht');?>" target="main">展望话题</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=ht');?>" target="main">添加话题</a></span>
                </li>
            </ul>
        </li>
        <li>
            <div class="nav_m">
                <span><a>互动</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li>
                    <span><a href="<?php echo U('Total/lists?cat=hd');?>" target="main">互动列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=hd');?>" target="main">添加互动</a></span>
                </li>
            </ul>
        </li>
        <li>
            <div class="nav_m">
                <span><a>今日评</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li>
                    <span><a href="<?php echo U('Total/lists?cat=jrp');?>" target="main">今日评列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=jrp');?>" target="main">添加今日评</a></span>
                </li> 
            </ul>
        </li> -->
    </ul>
</div>
</body>
</html>