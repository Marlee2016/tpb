<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>头部</title>
    <base href="/tp/Public/2022sessions/Back/">
    <link rel="stylesheet" type="text/css" href="Assets/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="Assets/css/common.css"/>
</head>

<body>
<div class="head clearfix">
    <div class="logo">
        <a href="/tpa/2022sessions.php/back/Total/index">2023两会新闻管理系统</a>
    </div>
    <div class="right">
        <span>
            欢迎你，
            <span class="user" style="color: red;"><?php echo (session('LUSER')); ?></span>
            <!-- <span class="logout"><a href="/tpa/2022sessions.php/back/User/logout" onclick="">退出</a></span> -->
        </span>
    </div>
</div>
</body>
</html>