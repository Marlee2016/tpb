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
    <base href="/tp/Public/2022sessions/Home/">
<!--     <script>
        // 对浏览器的UserAgent进行正则匹配，不含有微信独有标识的则为其他浏览器
        var useragent = navigator.userAgent;
        if (useragent.match(/MicroMessenger/i) != 'MicroMessenger') {
            // 这里警告框会阻塞当前页面继续加载
            alert('已禁止本次访问：您必须使用微信内置浏览器访问本页面！');
            // 以下代码是用javascript强行关闭当前页面
            var opened = window.open('about:blank', '_self');
            opened.opener = null;
            opened.close();
        }
    </script> -->
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
            height: 23rem;
            /*height: 100%;*/
            background: url(img/bg.jpg) no-repeat center center /100% 100%;
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
    table{border-collapse:collapse;border-spacing:0}
    fieldset,img{border:0}
    abbr,acronym{border:0;font-variant:normal}
    del{text-decoration:line-through}
    address,caption,cite,code,dfn,em,th,var{font-style:normal;font-weight:normal}
    ol,ul{list-style:none}
    caption,th{text-align:left}
    h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal}
    q:before,q:after{content:''}
    button{outline:0;border:none;}
    a:hover{text-decoration:none}
    ins,a{text-decoration:none}
    textarea {resize: none;}
    iframe,img {border:0;}
    img{display:block;width:100%;}
    ul,ol {list-style:none;}
    input,select,textarea {outline: 0;-webkit-user-modify: read-write-plaintext-only;}
    input {-webkit-appearance: none;}
    .pr{position:relative;}
    .abs{position: absolute}
    .fl{float:left;display:inline-block;}
    .fr{float:right;display:inline-block;}
    .clearfix:after{content:".";display:block;height:0;clear: both;visibility:hidden;}
    .clearfix{*zoom:1;}

    .wrapper02 {position:relative;height: 4rem;width: 100%;overflow: hidden;margin:0 auto;background:#ddd;
        /*margin-top: 8px;*/
        letter-spacing:2px;}
    .wrapper02 .scroller {position:absolute}
    .wrapper02 .scroller li {height: 4rem;color:#333;float: left;line-height: 4rem;font-size:17px;text-align: center}
    .wrapper02 .scroller li a{color:#333;display:block;margin:0 1.2rem}
    .wrapper02 .scroller li.cur{background:#FE0000}
    .wrapper02 .scroller li.cur a{color:#fff;}

        .bord1{
        /*margin-top: 10px;*/
        margin: 5px auto;
    }
        footer {
            font-size: 12px;
            text-align: center;
            color: #000;
            background-color: #fff;
            width: 100%;
            height: 25px;
            line-height: 28px;
            position: fixed;
            left: 0;
            bottom: 0;
        }
    </style>
</head>
<body>
    <div class="container">

    <div class="banner">
<!--         <div class="tab-container">
    北京昌平app
    <div class="cp-app active"><a href="/tpa/2022sessions.php/home/index/lists?cat=app"></a></div>
    昌广传媒
    <div class="cgcm"><a href="/tpa/2022sessions.php/home/index/lists?cat=cgcm"></a></div>
    昌平电视台
    <div class="cp-tv"><a href="/tpa/2022sessions.php/home/index/lists?cat=tv"></a></div>
    昌平广播电台
    <div class="cp-radio"><a href="/tpa/2022sessions.php/home/index/lists?cat=radio"></a></div>
    昌平报
    <div class="cp-papers"><a href="/tpa/2022sessions.php/home/index/lists?cat=papers"></a></div>
</div> -->
    </div>

    <div class="wrapper wrapper02" id="wrapper02">
        <div class="scroller">
            <ul class="clearfix">
                <li style="display: none;"><a href="javascript:void(0)"></a></li>
                <li><a href="/tpa/2022sessions.php/home/index/lists?cat=sm">初心·使命</a></li>
                <li><a href="/tpa/2022sessions.php/home/index/lists?cat=jj">聚焦·两会</a></li>
                <li><a href="/tpa/2022sessions.php/home/index/lists?cat=zb">现场·直播</a></li>
                <li><a href="/tpa/2022sessions.php/home/index/lists?cat=dbg">读报告</a></li>
                <li><a href="/tpa/2022sessions.php/home/index/lists?cat=rkt">融看台</a></li>
                <li><a href="/tpa/2022sessions.php/home/index/lists?cat=lz">说履职</a></li>
                <li><a href="/tpa/2022sessions.php/home/index/lists?cat=tgs">谈感受</a></li>
                <li><a href="/tpa/2022sessions.php/home/index/lists?cat=hcj">话成绩</a></li>
                <li><a href="/tpa/2022sessions.php/home/index/lists?cat=jrp">今日评</a></li>
            </ul>
        </div>
     </div>

    <div class="tab-content">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><a class="list_item" id ="/tpa/2022sessions.php/home/index/news?id=<?php echo ($new["id"]); ?>&cid=<?php echo ($new["cid"]); ?>&sta=<?php echo ($new["status"]); ?>" href="<?php echo ($new["link"]); ?>">
            <!-- <a class="list_item" id ="/tpa/2022sessions.php/home/index/news?id=<?php echo ($new["id"]); ?>&cid=<?php echo ($new["cid"]); ?>&sta=<?php echo ($new["status"]); ?>" href="<?php echo ($new["link"]); ?>?id=<?php echo ($new["id"]); ?>&cid=<?php echo ($cid); ?>&sta=<?php echo ($new["status"]); ?>"> -->
            <!-- <a class="list_item" href="/tpa/2022sessions.php/home/index/news?id=<?php echo ($new["id"]); ?>&cid=<?php echo ($new["cid"]); ?>&sta=<?php echo ($new["status"]); ?>"> -->
                <div class="cont">
                    <h2 class="title"><?php echo ($new["title"]); ?></h2>
                    <p class="desc"><?php echo ($new["desc"]); ?></p>
                </div>
                <div class="cover">
                    <img class="img" src="upload/<?php echo ($new["pic"]); ?>" alt="">
                </div>
            <p class="tim"><?php echo ($new["addtime"]); ?></p>
            </a>
            <HR align='center' width='94%' color='#C0C0C0' SIZE=1 class="bord1"><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <!-- <footer>北京市昌平区传媒中心出品</footer> -->
</div>
<script src="js/jquery-1.10.2.js"></script>
<!-- <script type="text/javascript" src="js/flexible.js"></script> -->
<script type="text/javascript" src="js/iscroll.js"></script>
<script type="text/javascript" src="js/navbarscroll.js"></script>
<script type="text/javascript">

function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}
var cat=getQueryVariable("cat") ;


var hrefArr = document.getElementsByTagName('a'); //获取这个页面的所有A标签
    for( var i=0; i<hrefArr.length; i++ ){
        hrefURL = hrefArr[i].href;
        aid = hrefArr[i].id;
        // console.log(aid);
             
    // var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
    // var disName ='开心一族漂亮家园';
// var disLength = disName.length;
// var shortName = disName.substring(disLength-2,disLength);
    var r = aid.substring(aid.length-2)
    // console.log(hrefArr[i].getElementsByTagName("p"));

         if (r=="=0"){
            // hrefArr[i].lastChild
            // getElementsByClassName('desc')
           // hrefArr[i].getElementsByTagName("p").style.visibility = "hidden";
            hrefArr[i].className = 'list_item1';
         }
    // if (r!=null) return unescape(r[2]); return null;
        // console.log(hrefURL);

}

$(function(){

    //demo示例一到四 通过lass调取，一句可以搞定，用于页面中可能有多个导航的情况
    $('.wrapper').navbarscroll();

    //demo示例五 通过id调取
    $('#demo05').navbarscroll({
        defaultSelect:6,
        endClickScroll:function(obj){
            console.log(obj.text())
        }
    });
    
    //demo示例六 通过id调取
    $('#demo06').navbarscroll({
        defaultSelect:3,
        scrollerWidth:6,
        fingerClick:1,
        endClickScroll:function(obj){
            console.log(obj.text())
        }
    });
});
</script>
</body>
</html>