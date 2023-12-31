<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" >
<title>新建</title>
    <base href="/tp/Public/cpws/Back/">
<link rel="stylesheet" type="text/css" href="Assets/css/reset.css"/>
<link rel="stylesheet" type="text/css" href="Assets/css/common.css"/>
<link rel="stylesheet" type="text/css" href="Assets/css/thems.css">
<link rel="stylesheet" type="text/css" href="Assets/plugins/easyUpload.js/easy-upload.css">
    <style>
        .easy_upload-container {
            padding:0!important;
            width:90%!important;
        }
        .easy_upload_progress, .easy_upload_file2 {
            display:none!important;;
        }
        .easy_upload-head {
            width:20%;
            display:inline-block;
        }
        .easy_upload_queue {
            width:79%;
            height:20px;
            display:inline-block;
        }
        .easy_upload_filename, .easy_upload_btn .btn, .easy_upload_status .status {
            margin-left: 15px!important;
        }
        .easy_upload_status .status {
            line-height: 73% !important;
        }
        .easy_upload_btn .btn {
            display: inline-block;
            height: 25px !important;
            line-height: 25px!important;
            margin-bottom: 23px!important;
        }
        .easy_upload_delbtn {
            display: none!important;
        }
        .cat-name, .cat-id {
            display: none;
        }
    </style>
<script type="text/javascript" src="Assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="Assets/plugins/easyUpload.js/easyUpload.js"></script>
<script type="text/javascript">
$(function(){
	//自适应屏幕宽度
	window.onresize=function(){ location=location }; 
	
	var main_h = $(window).height();
	$('.hy_list').css('height',main_h-45+'px');
});
</script>
</head>

<body onLoad="Resize();">
<div id="right_ctn">
	<div class="right_m">
		<!--会议列表-->
        <div class="hy_list">
        	<div class="box_t">
                <!--当前位置-->
                <div class="position">
                	<a href=""><img src="Assets/images/icon5.png" alt=""/></a>
                    <a href="">首页</a>
                    <span><img src="Assets/images/icon3.png" alt=""/></span>
                    <a href=""><?php echo ($cname); ?>列表</a>
                    <span><img src="Assets/images/icon3.png" alt=""/></span>
                    <a href="">添加<?php echo ($cname); ?></a>
                </div>
                <!--当前位置-->
            </div>
            <div class="space_hx">&nbsp;</div>
            <form enctype="multipart/form-data" method="post">
            <div class="xjhy" style="padding:0;">
                <ul class="hypz">
                    <li class="clearfix">
                        <span class="title">标题：</span>
                        <div class="li_r">
                            <input name="title" type="text" value="<?php echo ($defaultName); ?>">
                            <i>*</i>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span class="title">简要描述：</span>
                        <div class="li_r">
                            <input name="desc" type="text" value="<?php echo ($defaultName); ?>">
                            <i>*</i>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span class="title">链接：</span>
                        <div class="li_r">
                            <input name="link" type="text">
                            <i>*</i>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span class="title">是否为大图：（0是1否）</span>
                        <div class="li_r">
                            <input name="status" type="text">
                            <i>*</i>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span class="title">封面图片：</span>
                        <div class="li_r">
                            <div id="easyContainer"></div>
                        </div>
                    </li>
                    <li class="tj_btn">
                        <a href="javascript:void(0);">添　加</a>
                    </li>
                </ul>
            </div>
                <div class="cat-name"><?php echo ($cat); ?></div>
                <div class="cat-id"><?php echo ($cid); ?></div>
            </form>
        </div>
    </div>
</div>
</body>
<script>
    $(function () {
        $('.tj_btn a').click(function (e) {
            e.preventDefault();
            var title = $.trim($('input[name=title]').val());
            var desc = $.trim($('input[name=desc]').val());
            var link = $.trim($('input[name=link]').val());
            var status = $.trim($('input[name=status]').val());
            var cid=$('.cat-id').text();
            if (!title || !link) {
                alert('请输入完整添加项信息！');
            } else {
                $.post("/tp/cpws.php/back/total/newsAdd", {title:title,desc:desc, link:link, status:status,cid:cid}, function (res) {
                    if (res.code == 1) {
                        location.href = "<?php echo U('Total/lists');?>?cid="+cid;
                    } else if (res.code == 2) {
                        alert('添加失败！');
                    } else if (res.code == 3) {
                        alert(res.msg + '！');
                    }
                })
            }
        })
    })
</script>
<script>
    $('#easyContainer').easyUpload({
        allowFileTypes: '*.jpg;*.png;*.jpeg',//允许上传文件类型
        allowFileSize: 100000,//允许上传文件大小(KB)
        selectText: '选择文件',//选择文件按钮文案
        multi: false,//是否允许多文件上传
        multiNum: 1,//多文件上传时允许的文件数
        showNote: false,//是否展示文件上传说明
        showPreview: false,//是否显示文件预览
        url: "/tp/cpws.php/back/total/newsAdd",//上传文件地址
        fileName: 'file',//文件filename配置参数
        formParam: {
            catName: $('.cat-name').text()
        },//文件filename以外的配置参数，格式：{key1:value1,key2:value2}
        timeout: 30000,//请求超时时间
        okCode: 200,//与后端返回数据code值一致时执行成功回调，不配置默认200
        successFunc: function(res) {
            console.log('成功回调', res);
        },//上传成功回调函数
        errorFunc: function(res) {
            console.log('失败回调', res);
        },//上传失败回调函数
        deleteFunc: function(res) {
            console.log('删除回调', res);
        }//删除文件回调函数
    });
</script>

</html>