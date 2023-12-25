<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <base href="/tp/Public/2018SecondMeeting/Home/">
    <link rel="shortcut icon" type="image/x-icon" href="img/wx_logo.ico">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <link rel="stylesheet" type="text/css" href="css/ext.css">
    <!-- <title>2018两会专题</title> -->
    <style>
        .box {
            position: relative;
            padding: 20px 15px 15px;
            background-color: #fff;
        }
        .n-title {
            margin-bottom: 10px;
            line-height: 1.4;
            font-weight: 400;
            font-size: 24px;
        }
        .intro {
            font-size: 17px;
            color: #8c8c8c;
        }
        .dingyue {
            padding-top: 50px;
            position: relative;
        }
        .dingyue .dingyue-text {
            padding: 15px 0 5px;
            text-align: center;
            font-size: 18px;
            border-top: 2px solid;
            border-bottom: 2px solid;
            border-color: rgb(77, 119, 199);
        }
        .red {
            color: red;
        }
        .dingyue .dingyue-box-one, .dingyue .dingyue-box-two, .dingyue .dingyue-box-three {
            border-left: 2px solid rgb(77, 119, 199);
            border-bottom: 2px solid rgb(77, 119, 199);
            position: absolute;
            left: 140px;
            -webkit-transform-origin: left top;
            -moz-transform-origin: left top;
            -ms-transform-origin: left top;
            -o-transform-origin: left top;
            transform-origin: left top;
            -webkit-transform: rotate(135deg);
            -moz-transform: rotate(135deg);
            -ms-transform: rotate(135deg);
            -o-transform: rotate(135deg);
            transform: rotate(135deg);
        }
        .dingyue .dingyue-box-one {
            width: 30px;
            height: 30px;
        }
        .dingyue-box-two {
            width: 19px;
            height: 19px;
            left: 134px !important;
            border-right: 2px solid rgb(77, 119, 199);
            border-top: 2px solid rgb(77, 119, 199);
        }
        .dingyue-box-three {
            width: 13px;
            height: 13px;
            left: 128px !important;
        }
        .media {
            padding: 15px 0;
        }
        .contact {
            padding-top: 20px;
            padding-bottom: 10px;
            font-size: 17px;
        }
        .banner {
            position: relative;
            width: 100%;
            height: 20rem;
            background: url(img/<?php echo ($img); ?>) no-repeat center center /100% 100%;
        }
        .tab-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            bottom: 0.9rem;
        }
        .tab-container div {
            width: 25%;
            height: 3rem;
        }
        .tab-container div a {
            display: block;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="banner">
        <div class="tab-container">
            <!--北京昌平app-->
            <div class="cp-app active"><a href="/tp/seme.php/Home/Index/lists?cat=app"></a></div>
            <!--昌广传媒-->
            <div class="cgcm"><a href="/tp/seme.php/Home/Index/lists?cat=cgcm"></a></div>
            <!--昌平电视台-->
            <div class="cp-tv"><a href="/tp/seme.php/Home/Index/lists?cat=tv"></a></div>
            <!--昌平广播电台-->
            <div class="cp-radio"><a href="/tp/seme.php/Home/Index/lists?cat=radio"></a></div>
            <!--昌平报-->
            <div class="cp-papers"><a href="/tp/seme.php/Home/Index/lists?cat=papers"></a></div>
        </div>
    </div>
    <div class="tab-content">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><a class="list_item" href="/tp/seme.php/Home/Index/news?id=<?php echo ($new["id"]); ?>&cid=<?php echo ($cid); ?>">
                <div class="cover">
                    <img class="img" src="upload/<?php echo ($new["pic"]); ?>" alt="">
                </div>
                <div class="cont">
                    <h2 class="title"><?php echo ($new["title"]); ?></h2>
                    <p class="desc"><?php echo ($new["desc"]); ?></p>
                </div>
            </a><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
</body>
</html>