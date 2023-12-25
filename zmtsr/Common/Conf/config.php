<?php
return [
    /* 数据库设置 */
    'DB_TYPE'   => 'mysql',     // 数据库类型
    'DB_HOST'   => '127.0.0.1', // 服务器地址
    'DB_NAME'   => 'zmtsr',     // 数据库名
    'DB_USER'   => 'root',      // 用户名
    'DB_PWD'    => '',          // 密码
    'DB_PORT'   => '3306',      // 端口
    'DB_PREFIX' => '',    // 数据库表前缀
    'DB_PARAMS' => [],    // 数据库连接参数

    'TMPL_L_DELIM' => '{{',            // 模板引擎普通标签开始标记
    'TMPL_R_DELIM' => '}}',            // 模板引擎普通标签结束标记
    // 'SHOW_PAGE_TRACE' => true,      // 开启页面跟踪

    'WEBSITE'      => 'http://wx.bjcpn.com/tp/zmtsr.php',
    'APPID'        => 'wx9b1b317a85c2a74c',
    'APPSECRET'    => '9de1b98de21efbac6f5830b47b183120',
    'REDIRECT_URL' => 'http://wx.bjcpn.com/tp/zmtsr.wx.php',
    // 'SCOPE'        => 'snsapi_userinfo',
    'SCOPE'        => 'snsapi_base',
    'STATE'        => ''
];