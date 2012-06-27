<?php
date_default_timezone_set('America/Chicago');
set_include_path(
	dirname(__FILE__) . PATH_SEPARATOR .
	get_include_path()
);

function render($file, $args = array(), $use_cache = true) {
	static $cache;
	
	if (!isset($cache)) $cache = array();
	
	$cache_key = sha1($file.serialize($args));
	
	if (!$use_cache || !isset($cache[$cache_key])) {
		if (!file_exists($file))
			return "";
		
		extract($GLOBALS);
		extract($args);
		
		ob_start();
		include $file;
		
		if ($use_cache)
			$cache[$cache_key] = ob_get_clean();
		else
			return ob_get_clean();
	}
	
	return $cache[$cache_key];
}

include 'data.php';
$GLOBALS['version'] = file_get_contents('site.version');

echo render('templates/layout.php');