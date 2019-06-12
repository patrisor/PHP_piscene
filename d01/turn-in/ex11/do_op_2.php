#!/usr/bin/php
<?php
if ($argc == 2)
{
	$i = -1;
	$arr = str_split(trim(preg_replace('!\s+!', '', $argv[1])));
	while (++$i < count($arr))
		if ($arr[$i] == "+" || $arr[$i] == "-" || $arr[$i] == "*" || $arr[$i] == "/" || $arr[$i] == "%")
			$anchor = $i;
	/*
	if (trim($argv[2]) == "+")
		echo strval((int)trim($argv[1]) + (int)trim($argv[3]))."\n";
	elseif (trim($argv[2]) == "-")
		echo strval((int)trim($argv[1]) - (int)trim($argv[3]))."\n";
	elseif (trim($argv[2]) == "*")
		echo strval((int)trim($argv[1]) * (int)trim($argv[3]))."\n";
	elseif (trim($argv[2]) == "/")
		echo strval((int)trim($argv[1]) / (int)trim($argv[3]))."\n";
	elseif (trim($argv[2]) == "%")
		echo strval((int)trim($argv[1]) % (int)trim($argv[3]))."\n";
	 */
}
else
	echo "Syntax Error\n";
?>
