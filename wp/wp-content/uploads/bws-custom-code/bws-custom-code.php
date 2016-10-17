<?php
if ( ! defined( 'ABSPATH' ) ) exit;
if ( ! defined( 'BWS_GLOBAL' ) ) exit;

/* Start your code here */

$parts=parse_url("http://domain.com/user/100");
$path_parts=explode('/', $parts['path']);
$lang = $path_parts[count($path_parts)-2];