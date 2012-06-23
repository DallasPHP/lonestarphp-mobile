<?php
header("Content-Type: text/cache-manifest");
echo file_get_contents(dirname(__FILE__) . '/cache.manifest');