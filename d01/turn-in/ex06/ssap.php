#!/usr/bin/php
<?php
$i = 0;
$string = '';
if ($argc > 1)
	while (++$i < (int)$argc)
		$string = $string.$argv[$i]." ";
$arr = explode(' ', trim(preg_replace('!\s+!', ' ', $string)));
sort($arr);
foreach($arr as $word)
	echo $word."\n";
?>
