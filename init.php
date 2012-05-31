<?php defined('SYSPATH') or die('No direct script access.');

$vendor     = __DIR__.'/vendor';
$autoloader = "$vendor/mustache/Mustache.php";

if (file_exists($autoloader))
{
	require $autoloader;
}
