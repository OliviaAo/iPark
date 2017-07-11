<?php
return array(
	//'配置项'=>'配置值'
	'LOG_RECORD' => true, // 开启日志记录
	'LOG_LEVEL'  =>'EMERG,ALERT,CRIT,ERR',     // 只记录EMERG ALERT CRIT ERR 错误
	/* URL设置 */
      'URL_CASE_INSENSITIVE'  => true,           // 默认false 表示URL区分大小写 true则表示不区分大小写
      'URL_MODEL'             => 0,              // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
      // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式，提供最好的用户体验和SEO支持
      'URL_PATHINFO_DEPR'     => '/',	       // PATHINFO模式下，各参数之间的分割符号
      'URL_PATHINFO_FETCH'    =>   'ORIG_PATH_INFO,REDIRECT_PATH_INFO,REDIRECT_URL', // 用于兼容判断PATH_INFO 参数的SERVER替代变量列表
      'URL_HTML_SUFFIX'       => '',            // URL伪静态后缀设置
      'URL_PARAMS_BIND'       =>  true,         // URL变量绑定到Action方法参数

      /* 系统变量名称设置 */
      'VAR_GROUP'             => 'g',           // 默认分组获取变量
      'VAR_CONTROLLER'        => 'c',		// 默认模块获取变量
      'VAR_MODULE'            => 'm',		// 默认模块获取变量
      'VAR_ACTION'            => 'a',		// 默认操作获取变量
      'VAR_AJAX_SUBMIT'       => 'ajax',        // 默认的AJAX提交变量
      'VAR_PATHINFO'          => 's',	      // PATHINFO 兼容模式获取变量例如 ?s=/module/action/id/1 后面的参数取决于URL_PATHINFO_DEPR
      'VAR_URL_PARAMS'        => '_URL_',       // PATHINFO URL参数变量
      'VAR_TEMPLATE'          => 't',		// 默认模板切换变量
      'VAR_FILTERS'           =>  '',           // 全局系统变量的默认过滤方法 多个用逗号分割

	//数据库配置信息
	'DB_TYPE'   => 'mysql',                   // 数据库类型
	'DB_HOST'   => 'localhost',               // 服务器地址
	'DB_NAME'   => 'ipark',                   // 数据库名
	'DB_USER'   => 'ipark',                   // 用户名
	'DB_PWD'    => 'ipark',                   // 密码
	'DB_PORT'   => 3306,                      // 端口
	'DB_PREFIX' => '',                        // 数据库表前缀
	'DB_CHARSET'=> 'utf8',                    // 字符集
      );
