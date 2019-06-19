#!/usr/bin/php
<?php
if ($argc == 2)
{
	$i = -1;
	$op = trim(preg_replace('!\s+!', '', $argv[1]));
	if (preg_match('/[a-zA-Z]/', $op) == 1)
	{
		echo "Syntax Error\n";
		exit();
	}
	$arr = str_split($op);
	while (++$i < count($arr))
		if ($arr[$i] == "+" || $arr[$i] == "-" || $arr[$i] == "*" || $arr[$i] == "/" || $arr[$i] == "%")
			$anchor = $i;
	if ($op[$anchor] == "+")
		echo strval((int)substr($op, 0, $anchor) + (int)substr($op, $anchor + 1))."\n";
	elseif ($op[$anchor] == "-")
		echo strval((int)substr($op, 0, $anchor) - (int)substr($op, $anchor + 1))."\n";
	elseif ($op[$anchor] == "*")
		echo strval((int)substr($op, 0, $anchor) * (int)substr($op, $anchor + 1))."\n";
	elseif ($op[$anchor] == "/")
		echo strval((int)substr($op, 0, $anchor) / (int)substr($op, $anchor + 1))."\n";
	elseif ($op[$anchor] == "%")
		echo strval((int)substr($op, 0, $anchor) % (int)substr($op, $anchor + 1))."\n";
}
else
	echo "Incorrect Parameters\n";
?>
