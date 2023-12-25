<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" >
<title>左边导航</title>
    <base href="/tp/Public/cpws/Back/">
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

        <li>
            <div class="nav_m">
                <span><a>昌平广播电台新闻</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li>
                    <span><a href="<?php echo U('Total/lists?cat=radio');?>" target="main">广播电台新闻列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=radio');?>" target="main">添加广播电台新闻</a></span>
                </li>
            </ul>
        </li> -->
     <li class="now">
            <div class="nav_m">
                <span><a>企业服务</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li class="now_li">
                    <span><a href="<?php echo U('Total/lists?cat=qyfw');?>" target="main">企业服务列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=qyfw');?>" target="main">添加企业服务</a></span>
                </li>
            </ul>
        </li>
             <li class="now">
            <div class="nav_m">
                <span><a>便民服务</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li class="now_li">
                    <span><a href="<?php echo U('Total/lists?cat=bmfw');?>" target="main">便民服务列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=bmfw');?>" target="main">添加便民服务</a></span>
                </li>
            </ul>
        </li>
             <li class="now">
            <div class="nav_m">
                <span><a>对外交往</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li class="now_li">
                    <span><a href="<?php echo U('Total/lists?cat=dwjw');?>" target="main">对外交往列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=dwjw');?>" target="main">添加对外交往</a></span>
                </li>
            </ul>
        </li>
             <li class="now">
            <div class="nav_m">
                <span><a>昌平友协</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li class="now_li">
                    <span><a href="<?php echo U('Total/lists?cat=cpyx');?>" target="main">昌平友协列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=cpyx');?>" target="main">添加昌平友协</a></span>
                </li>
            </ul>
        </li>
          <li class="now">
            <div class="nav_m">
                <span><a>外语标识规范</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li class="now_li">
                    <span><a href="<?php echo U('Total/lists?cat=wybs');?>" target="main">外语标识规范列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=wybs');?>" target="main">添加外语标识规范</a></span>
                </li>
            </ul>
        </li> 
          <li class="now">
            <div class="nav_m">
                <span><a>英语角</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li class="now_li">
                    <span><a href="<?php echo U('Total/lists?cat=yyj');?>" target="main">英语角列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=yyj');?>" target="main">添加英语角</a></span>
                </li>
            </ul>
        </li>  
                <!-- <li class="now">
            <div class="nav_m">
                <span><a>使命</a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
                <li class="now_li">
                    <span><a href="<?php echo U('Total/lists?cat=sm');?>" target="main">使命列表</a></span>
                </li>
                <li>
                    <span><a href="<?php echo U('Total/newsAdd?cat=sm');?>" target="main">添加使命</a></span>
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