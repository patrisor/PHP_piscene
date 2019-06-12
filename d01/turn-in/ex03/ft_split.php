<?PHP
function ft_split($str)
{
	$ret = explode(' ', preg_replace('!\s+!', ' ', $str));
	sort($ret);
	return $ret;
}
?>
