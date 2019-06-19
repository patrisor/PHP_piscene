<?php
function ft_is_sort($arr)
{
	$i = -1;
	$flag = true;
	if (count($arr) == 1 || count($arr) == 0)
		return $flag;
	while (++$i < count($arr) - 1)
		if ($arr[$i] > $arr[$i + 1])
			$flag = false;
	return $flag;
}
?>
