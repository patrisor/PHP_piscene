#!/usr/bin/php
<?php
if ($argc > 1)
{
	$arr = explode(' ', trim(preg_replace('!\s+!', ' ', $argv[1])));
	echo implode(' ',array_merge(array_splice($arr, 1), $arr))."\n";
}
?>
