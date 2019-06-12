#!/usr/bin/php
<?php
if ($argc == 4)
{
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
}
else
	echo "Incorrect Parameters\n";
?>
