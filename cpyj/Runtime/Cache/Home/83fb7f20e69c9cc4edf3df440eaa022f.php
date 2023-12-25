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
            height: 205px;
            background: url("/tp/Public/xcdy/static/img/top.png") 0 0 no-repeat;
            background-size: 100% 100%;
        }

        .search-box, .hot-word {
            border: none;
            position: absolute;
        }

        .search-box {
            width: 77%;
            top: 90px;
            left: 15.5%;
            height: 40px;
        }
        .hot-word {
            width: 69%;
            height:25px;
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
            border:none;
        }
        .search-box form .go {
            width: 16%;
            height: 100%;
            font-size: 2rem;
            font-weight: bold;
            position: absolute;
            top: -59%;
            left: 85%;
            color: #fff;
            background: none;
            border: none;
            text-align: center;
        }
        .search-box input:focus {
            outline: none;
        }
        .hot-word span {
        color: #fff;
        margin-right: 5px;
        padding: 2px 5px;
        cursor: pointer;
        display: inline-block;
        background: #05bdfd;
        border-radius: 6px;
        }

        /*.search-box::-webkit-scrollbar {*/
            /*width: 0;*/
            /*height: 0;*/
        /*}*/

        .result-box {
            width: 100%;
            height: 363px;
            padding:0 20px;
            margin: 0 auto;
            overflow-x: hidden;
            background: url("/tp/Public/xcdy/static/img/box.png") 0 0 no-repeat;
            background-size: 100% 100%;
        }
    </style>
</head>
<body>
<div class="box">
    <div class="out-box">
        <div class="search-box">
            <form action="/tp/xcdy.php/Home/Index/search" method="get">
                <input type="text" name="keyword" id="keyword" placeholder="请输入关键词" required/>
                <div class="go" onclick="goSearch()">GO</div>
            </form>
        </div>
        <div class="hot-word">
            <span class="hot-word-ylbz">医疗保障</span>
            <span class="hot-word-sbzc">积分落户</span>
            <span class="hot-word-sbzc">社保政策</span>
            <span class="hot-word-jycy">就业创业</span>
        </div>
    </div>

    <div class="result-box"></div>
</div>
</body>
<script src="/tp/Public/xcdy/static/js/jquery-3.2.1.min.js"></script>
<script>
    $(function () {

        var resBox = $('.result-box');
        var myInput = $('#keyword');

        resBox.height($(window).height() - 205);

        $('.hot-word span').each(function () {
            $(this).click(function () {
                myInput.val($(this).text());
                document.activeElement.blur();
                $('form').submit();
            });
        });

        function goSearch() {
            document.activeElement.blur();
            resBox.height($(window).height() - 139);
            $('form').submit();
        }

        /*myInput.bind("input propertychange change", function () {
            var keyword = $(this).val();
            search(keyword);
        });*/
    });
    function goToSearch() {
        $('form').submit();
    }
    function goSearch() {
        document.activeElement.blur();
        $('.result-box').height($(window).height() - 205);
        setTimeout(goToSearch, 500);
    }
</script>
</html>