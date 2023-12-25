<?php
return array(
	//'配置项'=>'配置值'
    'TMPL_L_DELIM'          =>  '{{',            // 模板引擎普通标签开始标记
    'TMPL_R_DELIM'          =>  '}}',            // 模板引擎普通标签结束标记

    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'cpyjjb',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀

    /* SESSION设置 */
    'SESSION_AUTO_START'    =>  true,    // 是否自动开启Session
    'SESSION_OPTIONS'       =>  array('expire'=>3600*24), // session 配置数组 支持type name id path expire domain 等参数
    'SESSION_TYPE'          =>  '', // session hander类型 默认无需设置 除非扩展了session hander驱动
    'SESSION_PREFIX'        =>  '', // session 前缀
    'DEFAULT_TIMEZONE'      =>  'PRC',   // 默认时区
);