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
        .pagination {
            display: inline-block;
            padding-left: 0;
            margin: 20px 0;
            border-radius: 4px;
        }

        .ydc-pagination li {
            margin-top: 2px;
            margin-bottom: 2px;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            height: 40px;
        }

        .ydc-pagination span+a {
            margin-left: 5px;
        }
        .ydc-pagination a+span {
            margin-left: 5px;
        }

        .ydc-pagination a, .ydc-pagination span {
            position: relative;
            text-align: center;
            line-height: 1;
            cursor: pointer;
            -webkit-appearance: none;
            -webkit-transition: all .2s ease-out;
            transition: all .2s ease-out;
            border: 1px solid transparent;
            border-radius: 4px;
            margin: 0;
            background-color: #f2f2f2;
            border-color: #d7dde4;
            color: #324050;
            padding: 8px 12px;
            font-size: 13px;
            min-width: 32px;
        }

        .ydc-pagination a:hover, .ydc-pagination span:hover {
            background: #ff5f5f;
            border: 1px solid #ff5f5f;
            color: #fff;
            text-decoration: none;
        }

        .ydc-pagination .current {
            background: #ff5f5f;
            border: 1px solid #ff5f5f;
            color: #fff;
            cursor: not-allowed;
        }
        .ydc-pagination {
            padding: 0 0 0 20px;
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
                                        <li>问题列表</li>
                                    </ul>
                                </div>
                                
    <?php if(count($errors) > 0): ?><div class="alert alert-danger">
            <ul>
                <?php if(is_array($errors)): foreach($errors as $key=>$error): ?><li><?php echo ($error); ?></li><?php endforeach; endif; ?>
            </ul>
        </div><?php endif; ?>

    <div class="ydc-panes">
        <div class="ydc-pane" style="display:block;">
            <ol class="ydc-pane-list">
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "暂无相关数据" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><li>
                        <a href="<?php echo U('Index/detail');?>?id=<?php echo ($li["id"]); ?>" target="_self"><?php echo ($li["title"]); ?></a>
                        <span><?php echo ($li["created_at"]); ?></span>
                    </li><?php endforeach; endif; else: echo "暂无相关数据" ;endif; ?>
            </ol>
            <div class="ydc-pagination">
                <?php echo ($show); ?>
            </div>
        </div>
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

</html>