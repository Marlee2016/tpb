<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <link type="text/css" rel="stylesheet" href="/tp/Public/xcdy/static/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <style>
        html, body {
            width: 100%;
            height: 100%;
            font-family: "SimSun", "Microsoft Yahei", "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
        html, body, div, p, ul, li {
            margin: 0;
            padding: 0;
        }
        .box {
            width: 100%;
            height: 100%;
        }
        .out-box {
            width: 100%;
            height: 139px;
            background: url("/tp/Public/xcdy/static/img/shang.png") 0 0 no-repeat;
            background-size: 100% 100%;
        }
        .search-box, .hot-word {
            border: none;
            position: absolute;
        }
        .search-box {
            width: 77%;
            top: 61px;
            left: 15.5%;
            height: 40px;
        }
        .hot-word {
            width: 69%;
            height: 25px;
            top: 150px;
            left: 13%;
            font-size: 1.5rem;
            overflow: hidden;
        }
        .search-box form {
            height: 98%;
        }
        .search-box form input {
            display: inline-block;
            width: 74%;
            height: 98%;
            margin-top: 1px;
            border: none;
        }
        .search-box form .go {
            width: 11%;
            height: 87%;
            font-size: 1rem;
            position: absolute;
            top: 8%;
            left: 85%;
            /* color: #fff; */
            background: none;
            border: none;
            border-radius: 10px;
        }
        .search-box input:focus {
            outline: none;
        }
        .hot-word span {
            color: #FFF;
            margin-right: 5px;
            padding: 2px 5px;
            cursor: pointer;
            display: inline-block;
            background: #05BDFD;
            border-radius: 6px;
        }
        .result-box {
            width: 100%;
            /* height: 363px; */
            padding: 0 20px;
            margin: 0 auto;
            overflow-x: hidden;
            background: url("/tp/Public/xcdy/static/img/xia.png") 0 0 no-repeat;
            background-size: 100% 100%;
        }
        .result-box .list {
            display: block;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #AAA;
            background: #FFF;
        }
        .result-box table {
            width: 100%;
            margin: 10px 0 20px 0;
            text-align: center;
            border: 1px solid #CCC;
        }
        .result-box table * {
            font-size: 13px !important;
        }
        .result-box table caption {
            text-align: center;
        }
        .result-box table td {
            border: 1px solid #CCC;
        }
        .result-title {
            font-size: 17px;
            font-weight: bold;
            color: #696969;
        }
        .result-content {
            font-size: 13px;
            color: #8E8E8E;
            text-indent: 2rem;
            padding-top:5px;
        }
        .close-btn {
            width: 13%;
            height: 5%;
            position: absolute;
            top: 0;
            right: 0;
            cursor: pointer;
        }
        .true-title, .true-content {
            display:none;
        }
        .shadow-box {
            width:100%;
            height:100%;
            z-index: 9;
            top:0;
            left:0;
            display: none;
            position: absolute;
        }
    </style>
</head>
<body>
<div class="box">
    <div class="out-box">
        <!-- <div class="close-btn" onclick="window.history.go(-1)">返回</div> -->

        <div class="search-box">
            <form>
                <input type="text" name="keyword" value="<?php echo ($keyword); ?>" id="keyword" required/>
                <div class="go" onclick="goSearch()"></div>
            </form>
        </div>
    </div>

    <div class="result-box">
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "暂无相关数据，请换个关键词搜索..." ;else: foreach($__LIST__ as $key=>$dat): $mod = ($i % 2 );++$i; if(is_array($dat)): $i = 0; $__LIST__ = $dat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$da): $mod = ($i % 2 );++$i;?><a class="list" href="/tp/xcdy.php/Home/Index/detail/id/<?php echo ($da["id"]); ?>">
                    <div class="result-title"><?php echo ($da["title"]); ?></div>
                    <div class="result-content"><?php echo ($da["content"]); ?></div>
                    <div class="true-title"><?php echo ($da["title"]); ?></div>
                    <div class="true-content"><?php echo ($da["content"]); ?></div>
                </a><?php endforeach; endif; else: echo "暂无相关数据，请换个关键词搜索..." ;endif; endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<!--<div class="shadow-box">
    <div class="detail-box">
        <div class="close-btn"></div>
        <div class="detail-title"></div>
        <div class="detail-content"></div>
    </div>
</div>-->
</body>
<script src="/tp/Public/xcdy/static/js/jquery-3.2.1.min.js"></script>
<script>
    $(function () {

        var resBox = $('.result-box'); 
        resBox.height($(window).height() - 139);
        var lists = $('.list');
        var detailBox = $('.detail-box');

        lists.each(function () {
            $(this).children('.result-title').text(filterHTML($(this).children('.result-title').text()).slice(0, 16) + '...');
            $(this).children('.result-content').text(filterHTML($(this).children('.result-content').text()).slice(0, 55) + '...');
        });

        /*lists.each(function () {
            $(this).click(function () {
                detailBox.children('.detail-title').html($(this).children('.true-title').html());
                detailBox.children('.detail-content').html($(this).children('.true-content').html());
                $('.shadow-box').fadeIn(888);
            });
        });*/

        function filterHTML(msg) {
            var str = msg.replace(/<\/?[^>]*>/g, ''); //去除HTML Tag
            str = str.replace(/[|]*\n/, ''); //去除行尾空格
            str = str.replace(/&npsp;/ig, ''); //去掉npsp
            return str;
        }

        $('.close-btn').click(function () {
            location.reload();
        });
    });
    function goToSearch() {
        $('form').submit();
    }
    function goSearch() {
        document.activeElement.blur();
        $('.result-box').height($(window).height() - 139);
        setTimeout(goToSearch, 500);
    }
</script>
</html>