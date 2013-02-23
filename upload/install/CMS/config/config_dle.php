<?php 
$bd_users = array (

/* Valid DLE fields */

	'login'		=> 'name',
	'id'		=> 'user_id',  
	'email'		=> 'email',

	'ctime' 	=> 'reg_date',
	'password' 	=> 'password',   
	
/* Required MCR fields */  

	'female'	=> 'mcr_gender',
	'ip' 		=> 'mcr_ip',  
	'group' 	=> 'mcr_group',
	'tmp' 		=> 'mcr_tmp',
	'session'	=> 'mcr_session',
	'server' 	=> 'mcr_server',
);

$bd_names = array (

/* Exists DLE fields */

	'users' 			=> 'dle_users',
	
	'files'				=> 'mcr_files',
	'ip_banning' 		=> 'mcr_ip_banning',
	'news'				=> 'mcr_news',
	'news_categorys' 	=> 'mcr_news_categorys',
	'groups' 			=> 'mcr_groups',
	'data' 				=> 'mcr_data',
	'comments' 			=> 'mcr_comments', 
	'servers' 			=> 'mcr_servers',
	'iconomy' 			=> false,
);

$config['db_name'] 	= 'dle';
$config['p_logic'] 	= 'dle';
$config['p_sync'] 	= false;
$config['s_name'] 	= 'DLE patch';
 
$site_ways['main_cms'] = false; 