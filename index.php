<?php
date_default_timezone_set('America/Chicago');
set_include_path(
	dirname(__FILE__) . PATH_SEPARATOR .
	get_include_path()
);

function render($file, $args = array(), $use_cache = true) {
	static $cache;
	
	if (!isset($cache)) $cache = array();
	
	if (!$use_cache || !isset($cache[$file])) {
		if (!file_exists($file))
			return "";
		
		extract($GLOBALS);
		extract($args);
		
		ob_start();
		include $file;
		
		if ($use_cache)
			$cache[$file] = ob_get_clean();
	}
	
	return $cache[$file];
}

global $header;
$header = render("templates/header.php");


include 'data.php';

echo render('templates/layout.php');