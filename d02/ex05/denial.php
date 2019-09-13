#!/usr/bin/php
<?php
if ($argc != 3 || !file_exists($argv[1]))
	exit();
$read = fopen($argv[1], 'r');
while ($read && !feof($read))
	$array[] = explode(";", fgets($read));
$header = $array[0];
unset($array[0]);
foreach ($header as $k => $v)
	$header[$k] = trim($v);
$index = array_search($argv[2], $header);
if ($index === false)
	exit();
foreach ($header as $header_k => $header_v){
	$tmp = array();
	foreach ($array as $v)
		if (isset($v[$index]))
			$tmp[trim($v[$index])] = trim($v[$header_k]);
	$$header_v = $tmp;
}
while (1) {
	echo "Enter your command: ";
	$order = fgets(STDIN);
	if ($order)
		eval($order);
}
echo "\n";
?>
