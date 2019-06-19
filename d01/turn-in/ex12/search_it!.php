#!/usr/bin/php
<?php
if ($argc > 1)
{
	$i = 1;
	$arr = array();
	while (++$i < $argc)
		$arr = array_merge($arr, array(explode(":", $argv[$i])[0]=>explode(":", $argv[$i])[1]));	
	if ((isset($arr[$argv[1]]) ? $arr[$argv[1]] : null) == null)
		exit();
	echo strval($arr[$argv[1]])."\n";
}
?>
