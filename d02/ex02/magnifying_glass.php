#!/usr/bin/php
<?php
function detect_and_replace() {
	$f1 = $f2 = 0;
	for ($i = 0; $i < count($arr) - 1; $i++){
		if ($arr[$i] == '"') {
			if($f1) {
				$f2 = $i;
				break;
			}
			$f1 = $i;
		}
	}
}
if (count($argv) == 2)
{
	//$ret = "";
	$file = fopen($argv[1], "r");
	if ($file) {
		while (($line = fgets($file)) !== false) {
			if (strpos($line, "<a"))
			{
				//$tmp = "";
				$arr = str_split($line);	
				
				foreach (range($f1 + 1, $f2 - 1) as $a)
					$arr[$a] = strtoupper($arr[$a]);
				echo implode("", $arr);
				
				//$line = $tmp;
			}
			//$ret .= $line;
		}
		fclose($file);
	} else
		echo "error: could not open the file\n";
	
	#echo $ret;
}
?>
