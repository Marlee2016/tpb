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
    <base href="/tp/Public/cpws/Home/">
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
            height: 17rem;
           
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

    .wrapper02 {position:relative;height: 4rem;width: 100%;overflow: hidden;margin:0 auto;background:#ddd;margin-top: 0px;letter-spacing:-1px;}
    .wrapper02 .scroller {position:absolute;width:100%} 
    .wrapper02 .scroller li {height: 4rem;width:50%;color:#333;float: left;line-height: 4rem;font-size:17px;text-align: center}
    .wrapper02 .scroller li a{color:#333;display:block;margin:0 1.2rem}
    .wrapper02 .scroller li.cur{background:#1492FF}
    .wrapper02 .scroller li.cur a{color:#fff;}
/*    .bord{
        margin-top: 20px;
    }*/
        .bord1{
        /*margin-top: 10px;*/
        margin: 5px auto;
    }
    </style>
</head>
<body>
<div class="container">
    <div class="banner">

    </div>
    <div class="wrapper wrapper02" id="wrapper02">
        <div class="scroller" id="trans">
            <ul class="clearfix">
                <li style="display: none;"><a href="javascript:void(0)"></a></li>
                 <li><a href="/tp/cpws.php/home/index/lists?cat=qyfw">企业服务</a></li>
                <li><a href="/tp/cpws.php/home/index/lists?cat=bmfw">便民服务</a></li>

            </ul>
        </div>
     </div>
    <div class="tab-content">

        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><!-- <a  href="<?php echo ($new["link"]); ?>"> -->
            <!-- <a class="list_item" href="<?php echo ($new["link"]); ?>?id=<?php echo ($new["id"]); ?>&cid=<?php echo ($cid); ?>&sta=<?php echo ($new["status"]); ?>"> -->
            <a class="list_item" id ="/tp/cpws.php/home/index/news?id=<?php echo ($new["id"]); ?>&cid=<?php echo ($new["cid"]); ?>&sta=<?php echo ($new["status"]); ?>" href="<?php echo ($new["link"]); ?>">
                <div class="cont">
                    <h2 class="title"><?php echo ($new["title"]); ?></h2>
                    <p class="desc"><?php echo ($new["desc"]); ?></p>
                </div>
                <div class="cover">
                    <img class="img" src="upload/<?php echo ($new["pic"]); ?>" alt="">
                </div>
                    <!-- <p class="tim"><?php echo ($new["addtime"]); ?></p> -->
            </a>
            <!-- </a> -->
            <HR align='center' width='94%' color='#C0C0C0' SIZE=1 class="bord1"><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
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
        // console.log(hrefURL);
             
    // var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
    // var disName ='开心一族漂亮家园';
// var disLength = disName.length;
// var shortName = disName.substring(disLength-2,disLength);
    // var r = hrefURL.substring(hrefURL.length-2)
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

// var hrefArr = document.getElementsByTagName('a'); //获取这个页面的所有A标签
//     for( var i=0; i<hrefArr.length; i++ ){
//         hrefURL = hrefArr[i].href;
//         console.log(hrefURL);
// var st= getQueryVariable("sta") ;
// console.log(st);

jQuery(document).ready(function(){
　　var menuitem = jQuery(".clearfix > li");
　　var menulength = menuitem.length;
// 　　for( i = 0 ; i< menulength; i++ ){
// 　　　　menuitem.eq(i).addClass("menu");

// 　　}
// console.log(menuitem.eq(3));
     menuitem.eq(3).addClass("cur");
    if (cat =='qyfw') {menuitem.eq(1).css('background-color', '#1492FF'); menuitem.eq(1).children().css('color','#fff');}
    if (cat =='bmfw') {menuitem.eq(2).css('background-color', '#1492FF'); menuitem.eq(2).children().css('color','#fff');}
    // if (cat =='wybs') {menuitem.eq(3).css('background-color', '#1492FF'); menuitem.eq(3).children().css('color','#fff');}
    // if (cat =='yyj') {menuitem.eq(4).css('background-color', '#1492FF'); menuitem.eq(4).children().css('color','#fff');}
    // if (cat =='dbg') {menuitem.eq(5).css('background-color', 'red'); menuitem.eq(5).children().css('color','#fff');}
    // if (cat =='lz') {menuitem.eq(6).css('background-color', 'red'); menuitem.eq(6).children().css('color','#fff');}
 //    if (cat =='hg') {menuitem.eq(7).css('background-color', 'red'); menuitem.eq(7).children().css('color','#fff');
 //     // $(trans).find('ul').css("transform", "translate(206px,0px)");
 // }
 //    if (cat =='zw') {menuitem.eq(8).css('background-color', 'red'); menuitem.eq(8).children().css('color','#fff');
 //     // $(trans).find('ul').css("transform", "translate(-276px,0px)");
 // }
 //    if (cat =='ht') {menuitem.eq(9).css('background-color', 'red'); menuitem.eq(9).children().css('color','#fff');
 //     // $(trans).find('ul').css("transform", "translate(-276px,0px)");
 // }
 //    if (cat =='hd') {menuitem.eq(10).css('background-color', 'red'); menuitem.eq(10).children().css('color','#fff');
 //     // $(trans).find('ul').css("transform", "translate(-276px,0px)");
 // }
 //    if (cat =='jrp') {menuitem.eq(11).css('background-color', 'red'); menuitem.eq(11).children().css('color','#fff');
 //     // $(trans).find('ul').css("transform", "translate(-276px,0px)");
 // }
  
});
// for (var i = 0; i < $('#wrapper02 li').length; i++) {
// menuitem.eq(5).addClass("cur");
// }
// $(scroller).css("transform","translate(-102px,0px)");
// $('scroller').css("transform","translate(-102px,0px)");
 // console.log()
 // trans.style.transform =“ translateX（” + tx +“）”;
        // var trans = document.getElementById("trans");
       // $(trans).find('ul').css("transform", "translate(-276px,0px)");
        // console.log(trans.style.transform);
             
      // trans.style.transform="scale(-"+ 100 +")";
      // trans.style.WebkitTransform="translate(-100px, 0px) translateZ(0px)";
// console.log($('scroller').css("transform"););
// $(function(){

// $('.clearfix li a').click(function(){
//         $('.clearfix li').removeClass('cur');
//         $(this).parent().addClass('cur');
//    })

// })

// $('#wrapper02').navbarscroll({
 
//     defaultSelect: numb,
//     scrollerWidth: 6,
//     fingerClick: 1,
//     endClickScroll: function(obj) {
//         // console.log(obj);
//         obj.className = 'cur';
//     }
// });

$(function(){

    //demo示例一到四 通过lass调取，一句可以搞定，用于页面中可能有多个导航的情况
    // $('.wrapper').navbarscroll();

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