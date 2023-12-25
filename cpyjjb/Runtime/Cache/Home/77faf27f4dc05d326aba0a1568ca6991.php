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
    <style>
        html, body {
            height: 100%;
        }
        .hongbao {
            width: 5rem;
            height: 6.1rem;
            background: url("/tp/Public/2018SecondMeeting/Home/img/hongbao.png") no-repeat center center /100% 100%;
        }
    </style>
</head>
<body>
<iframe src="<?php echo ($link); ?>" width="100%" height="100%" frameborder="0"></iframe>
<div class="hongbao"></div>
</body>
<script src="/tp/Public/common/jquery-3.2.1.min.js"></script>
<script src="/tp/Public/2018SecondMeeting/Home/js/jquery.bay-window.js"></script>
<script type="text/javascript">
    $('.hongbao').autoMove({angle:-Math.PI/4, speed:188}).click(function () {
        location.href = 'https://hd.faisco.cn/13583878/LRmkSpQ9oV02nuX0bs7I9w/load.html?style=79';
    });
</script>
</html>