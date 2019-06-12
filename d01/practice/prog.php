#!/usr/bin/php
<?PHP
function add($p1, $p2)
{
	return $p1 + $p2;
}
$var = 42;
echo "Hello, World!\n";
print("Hello, World!\n");
$my_array = array("Hello,", " World!");
$my_hash = array("key1" => "Hello, World!", "key2" => "val2");
echo implode($my_array)."\n";
echo $my_hash["key1"]."\n";
print_r($my_array);
print_r($my_hash);
$add_1 = add("21", "21");
if ($add_1 == "41")
	echo $add_1."\n";
else
	echo "fuck off\n";
echo "Number of Arguments: "."$argc\n";
print_r($argv);
foreach ($argv as $elem)
	echo $elem."\n";
?>
