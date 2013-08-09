<?php
//echo "data";
//return;
if(!defined('THINK_PATH')) exit();

return $array = array(
	'DB_TYPE'		=>	'mysql',// 数据库类型	
	'DB_HOST'		=>	'localhost',// 数据库服务器地址
	'DB_NAME'		=>	'robotdata',// 数据库名称
	'DB_USER'		=>	'root',// 数据库用户名
	'DB_PWD'		=>	'123456',// 数据库密码
	'DB_PORT'		=>	'3306',// 数据库端口
    'DB_PREFIX'		=>	'robot_',// 数据表前缀
    'DB_BACKUP'     =>'../Data/backup',
    'RBAC_ROLE_TABLE' =>'robot_role',
    'RBAC_USER_TABLE' =>'robot_user',
    'RBAC_ACCESS_TABLE' =>'robot_access',
    'RBAC_NODE_TABLE'   =>'robot_node',
    'URL_CASE_INSENSITIVE'=>true,
    'SITE_NAME' => '网站系统',
    'SITE_TITLE' => '网站系统',
    'SITE_KEYWORDS' => '',
    'SITE_DESCRIPTION' => '',
    'URL_MODEL' => 0,
    //'DEFAULT_THEME' => 'default',
    //'WX_QRCODE' => '/2013/07/21/51eb610e47e59.jpg',
);

?>