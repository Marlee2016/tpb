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
<!--         <li class="now">
            <div class="nav_m">
                <span><a>昌平报新闻</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li class="now_li">
                    <span><a href="<?php echo U('Total/lists?cat=papers');?>" target="main">昌平报新闻列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=papers');?>" target="main">添加昌平报新闻</a></span>
                </li>
            </ul>
        </li>

        </li> -->
        <li class="now">
            <div class="nav_m">
                <span><a>举报信息</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li class="now_li">
                    <span><a href="<?php echo U('Total/lists?cat=sm');?>" target="main">举报信息列表</a></span>
                </li>
<!--                 <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=sm');?>" target="main">添加使命</a></span>
                </li> -->
            </ul>
        </li>

</div>
</body>
</html>