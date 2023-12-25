<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE;chrome=1">
    <meta name="format-detection" content="telephone=no">
    <title>小创答疑后台管理系统</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link type="text/css" rel="stylesheet" href="/tp/Public/xcdy/static/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="/tp/Public/xcdy/static/back/css/core.css">
    <link type="text/css" rel="stylesheet" href="/tp/Public/xcdy/static/back/css/icon.css">
    <link type="text/css" rel="stylesheet" href="/tp/Public/xcdy/static/back/css/home.css">
    
    <style>
        .title {
            margin: 10px 0;
        }

        .content {
            line-height: 25px;
            letter-spacing: 1px;
            text-indent: 2rem;
            text-align: justify;
            margin-top: 20px;
        }

        .other > span {
            color: #aaa;
            display: inline-block;
            text-indent: 2rem;
        }

        .update, .delete {
            font-size: 13px;
            text-align: center;
            text-decoration: underline;
            border-radius: 5px;
            display: inline-block;
            margin-left: 20px;
        }

        .update {
            color: #3e8f3e !important;
        }

        .delete {
            color: #990000 !important;
        }
    </style>

    <style>
        .ydc-menu {
            min-height:666px;
        }
        .ydc-loading-box {
            padding:0;
        }
        .ydc-column h1 {
            width: 200px;
            color: #fff;
            padding: 10px;
            margin-top: 7px;
        }
        .ydc-user-photo {
            margin:0 !important;
        }
        .ydc-user-photo a img {
            width:50%;
            margin-top: 11px;
        }
        .ydc-admin-info {
            width:205px;
        }
        .ydc-user-info-admin, .ydc-user-logout {
            color:#fff;
            margin:0 !important;
            width:49%;
            height:45px;
            line-height:45px;
            float:left;
            display: inline-block !important;
        }
        .box {
            width: 100%;
            min-height: 666px;
            padding: 10px 26px;
        }
        .ydc-tabPanel .ydc-tabPanel-title {
            background-color: #eaeaea;
            border-bottom: 1px solid #d0d0d0;
        }
        .ydc-tabPanel .ydc-tabPanel-title ul li {
            width:111px !important;
        }
    </style>
</head>
<body>

<header class="ydc-header">
    <div class="ydc-entered">
        <div class="ydc-header-content ydc-flex">
            <div class="ydc-column">
                <h1>小创答疑</h1>
            </div>
            <div class="ydc-column">
                <div class="ydc-column-user">
                    <div class="ydc-user-photo">
                        <a href="javascript:;">
                            <img src="/tp/Public/xcdy/static/back/picture/x2.png" title="" about="" alt="">
                        </a>
                    </div>
                    <div class="ydc-admin-info">
                        <span class="ydc-user-info-admin"><?php echo (session('admin')); ?></span>
                        <span class="ydc-user-logout ydc-flex"><a href="<?php echo U('Index/logout');?>">退出</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="ydc-content-slide ydc-body">
        <div class="ydc-flex">
            <!-- left begin -->
            <div class="ydc-column ydc-column-2">
                <div class="ydc-menu">
                    <ul>
                        <li class="ydc-menu-item">
                            <a href="<?php echo U('/back');?>"  class="active"><i class="ydc-icon ydc-icon-home fl"></i>首页</a>
                        </li>
                        <li class="ydc-menu-item">
                            <a href="<?php echo U('/back/Index/create');?>"><i class="ydc-icon ydc-icon-find fl"></i>发布</a>
                        </li>
                        <li class="ydc-menu-item">
                                <span class="ydc-menu-sub-title">
                                    <i class="ydc-icon ydc-icon-file fl"></i>管理
                                </span>
                            <ul>
                            </ul>
                        </li>
                        <li class="ydc-menu-item">
                                <span class="ydc-menu-sub-title">
                                    <i class="ydc-icon ydc-icon-record fl"></i>数据
                                </span>
                            <ul>
                            </ul>
                        </li>
                        <li class="ydc-menu-item">
                                <span class="ydc-menu-sub-title">
                                    <i class="ydc-icon ydc-icon-set fl"></i>设置
                                </span>
                            <ul>
                            </ul>
                        </li>
                        <li class="ydc-menu-item">
                                <span class="ydc-menu-sub-title">
                                    <i class="ydc-icon ydc-icon-customer fl"></i>其它
                                </span>
                            <ul>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- left end -->
            <!-- right begin -->
            <div class="ydc-column ydc-column-8">
                <div class="ydc-entered-box">
                    <div class="ydc-content-right">
                        <div class="ydc-loading-box">
                            <div class="ydc-tabPanel">
                                <div class="ydc-tabPanel-title">
                                    <ul>
                                        <li>
    问题详情
</li>
                                    </ul>
                                </div>
                                
    <div class="box">
        <h2 class="title"><?php echo ($ques["title"]); ?></h2>

        <p class="other">
            <span>发布时间：<?php echo ($ques["created_at"]); ?></span>
            <a href="<?php echo U('Index/edit');?>?id=<?php echo ($ques["id"]); ?>" class="update">修改</a>
            <a href="<?php echo U('Index/destroy');?>?id=<?php echo ($ques["id"]); ?>" onclick="return(window.confirm('你确定要删除这条问题记录吗？'))" class="delete">删除</a>
            <!--<a href="javascript:;" onclick="del(window.confirm('你确定要删除这条问题记录吗？'))" class="delete">删除</a>-->
        </p>

        <p class="content"><?php echo ($ques["content"]); ?></p>
    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ydc-footer">
        <div>
            <p>©2018 北京昌平人力资源公共服务中心</p>
        </div>
    </div>
</section>

</body>

    <script src="/tp/Public/xcdy/static/js/jquery-3.2.1.min.js"></script>
    <script>
        function del(bool) {
            if (bool) {
                $.get("<?php echo U('Index/destroy');?>?id=<?php echo ($ques["id"]); ?>", {}, function (res) {
                    console.log(res);
                });
            }
        }
    </script>

</html>