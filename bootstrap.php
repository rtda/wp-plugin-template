<?php

// @codingStandardsIgnoreFile

spl_autoload_register(function($class_name)
{
	$dir = 'src/';
	$prefix = 'class-';
	$chunks = explode('\\', $class_name);
	$size = count($chunks);
	$chunks[$size-1] = $prefix . str_replace( '_', '-', strtolower($chunks[$size-1]) ) . '.php';
	$class_path = $dir . implode('/', $chunks);
	include $class_path;
});
