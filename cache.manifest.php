<?php
header("Content-Type: text/cache-manifest");
$version = file_get_contents('site.version');
echo str_ireplace('[[version]]', $version, file_get_contents(dirname(__FILE__) . '/cache.manifest'));