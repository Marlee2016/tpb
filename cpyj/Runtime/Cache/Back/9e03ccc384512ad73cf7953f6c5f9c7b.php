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
    .ydc-btn {
        padding:0;
    }
    .ydc-btn button {
        margin-left:0;
        width: 100px;
        border-radius: 4px;
        font-size: 14px;
        padding: 5px 20px;
    }
    .content-tip {
        margin-top: 5px;
        color: red;
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
发布问题
</li>
                                    </ul>
                                </div>
                                
<div class="box">
    <?php if(count($errors) > 0): ?><div class="alert alert-danger">
            <ul>
                <?php if(is_array($errors)): foreach($errors as $key=>$error): ?><li><?php echo ($error); ?></li><?php endforeach; endif; ?>
            </ul>
        </div><?php endif; ?>

    <br>
    <form action="<?php echo U('Index/store');?>" method="post">
        <input type="text" class="ydc-form-control" name="title" placeholder="请输入标题，为了更好的展示效果，建议标题字数在20个汉字以内">

        <br>
        <br>

        <!-- 加载编辑器的容器 -->
        <div class="content-tip">
            为了前台页面的美观，内容部分建议字号为：18；字体为：黑体；表格居中；单元格内容居中...
        </div>
        <script id="container" name="content" type="text/plain"></script>

        <div class="ydc-btn" style="margin-top:20px;">
            <button class="btn">发布</button>
        </div>
    </form>
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

<!-- 配置文件 -->
<script type="text/javascript" src="/tp/Public/xcdy/static/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/tp/Public/xcdy/static/ueditor/ueditor.all.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container', {
        toolbars: [
            [
                'undo', //撤销
                'redo', //重做
                'bold', //加粗
                'indent', //首行缩进
                'italic', //斜体
                'underline', //下划线
                'strikethrough', //删除线
                'subscript', //下标
                'fontborder', //字符边框
                'superscript', //上标
                'blockquote', //引用
                'pasteplain', //纯文本粘贴模式
                'selectall', //全选
                'preview', //预览
                'horizontal', //分隔线
                'removeformat', //清除格式
                'time', //时间
                'date', //日期
                'unlink', //取消链接
                'insertrow', //前插入行
                'insertcol', //前插入列
                'mergeright', //右合并单元格
                'mergedown', //下合并单元格
                'deleterow', //删除行
                'deletecol', //删除列
                'splittorows', //拆分成行
                'splittocols', //拆分成列
                'splittocells', //完全拆分单元格
                'deletecaption', //删除表格标题
                'inserttitle', //插入标题
                'mergecells', //合并多个单元格
                'deletetable', //删除表格
                'cleardoc', //清空文档
                'insertparagraphbeforetable', //"表格前插入行"
                'fontfamily', //字体
                'fontsize', //字号
                'paragraph', //段落格式
                'edittable', //表格属性
                'edittd', //单元格属性
                'link', //超链接
                'justifyleft', //居左对齐
                'justifyright', //居右对齐
                'justifycenter', //居中对齐
                'justifyjustify', //两端对齐
                'forecolor', //字体颜色
                'backcolor', //背景色
                'insertorderedlist', //有序列表
                'insertunorderedlist', //无序列表
                'fullscreen', //全屏
                'directionalityltr', //从左向右输入
                'directionalityrtl', //从右向左输入
                'rowspacingtop', //段前距
                'rowspacingbottom', //段后距
                'pagebreak', //分页
                'imagenone', //默认
                'imageleft', //左浮动
                'imageright', //右浮动
                'imagecenter', //居中
                'lineheight', //行间距
                'edittip ', //编辑提示
                'autotypeset', //自动排版
                'touppercase', //字母大写
                'tolowercase', //字母小写
                'background', //背景
                'inserttable', //插入表格
                'charts' // 图表
            ]
        ],
        initialFrameHeight: 444,
        elementPathEnabled: false
    });

</script>

</html>