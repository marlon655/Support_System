<?php
	session_start();
	$autoload = function($class){
		include('classes/'.$class.'.php');
	};
	spl_autoload_register($autoload);

	define('INCLUDE_PATH', 'http://localhost/support_system/');
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASSWORD', '');
	define('DATABASE', 'support_system');
	define('BASE_DIR_PAINEL', __DIR__.'/painel');

	