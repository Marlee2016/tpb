<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=8">
    <title></title>
    <base href="/tp/Public/cpws/Back/">
    <link rel="stylesheet" type="text/css" href="Assets/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="Assets/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="Assets/css/thems.css">
    <script type="text/javascript" src="Assets/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript">
        $(function () {
            //自适应屏幕宽度
            window.onresize = function () {
                location = location
            };

            var main_h = $(window).height();
            $('.hy_list').css('height', main_h - 45 + 'px');

            var search_w = $(window).width() - 40;
            $('.search').css('width', search_w + 'px');
            //$('.list_hy').css('width',search_w+'px');
        });
    </script>
    <!--框架高度设置-->
</head>

<body onLoad="Resize();">
<div id="right_ctn">
    <div class="right_m">
        <!--会议列表-->
        <div class="hy_list">
            <div class="box_t">
                <!--<span class="name">会议列表</span>-->
                <!--当前位置-->
                <div class="position">
                    <a href="javascript:;"><img src="Assets/images/icon5.png" alt=""/></a>
                    <a href="javascript:;">首页</a>
                    <span><img src="Assets/images/icon3.png" alt=""/></span>
                    <a href="javascript:;"><?php echo ($cname); ?></a>
                    <span><img src="Assets/images/icon3.png" alt=""/></span>
                    <a href="javascript:;"><?php echo ($cname); ?>列表</a>
                </div>
                <!--当前位置-->
            </div>
            <div class="space_hx">&nbsp;</div>
            <!--列表-->
            <table cellpadding="0" cellspacing="0" class="list_hy">
                <tr>
                    <th scope="col">标题</th>
                    <th scope="col">链接</th>
                    <th scope="col">发布人</th>
                    <th scope="col">发布时间</th>
                    <th scope="col">修改/编辑</th>
                    <!-- <th scope="col">删除</th> -->
                    <th scope="col">删除</th>
                </tr>
                <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($new["title"]); ?></td>
                        <td><?php echo ($new["link"]); ?></td>
                        <td><?php echo ($new["author"]); ?></td>
                        <td><?php echo ($new["addtime"]); ?></td>
                        <td style="text-align: center"><a href="/tp/cpws.php/back/total/newsEdit/id/<?php echo ($new["id"]); ?>/cat/<?php echo ($cat); ?>" class="a-normal">编辑</a></td>
                        <td style="text-align: center"><a href="/tp/cpws.php/back/total/newsDel/id/<?php echo ($new["id"]); ?>/cat/<?php echo ($cat); ?>" class="a-normal">删除</a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                <tr>
                    <td colspan="6" style="height:55px;background:#E9E9E9;border:none;">
                        <!--右边底部-->
                        <div class="r_foot">
                            <div class="r_foot_m">
                                <!--分页-->
                                <div class="page"><?php echo ($nav); ?></div>
                                <!--分页-->
                            </div>
                        </div>
                        <!--右边底部-->
                    </td>
                </tr>
            </table>
            <!--列表-->
        </div>
        <!--会议列表-->
    </div>
</div>
</body>
</html>