#!/usr/bin/php
<?PHP
$str = array();
unset($argv[0]);
foreach($argv as $v)
{
	$tmp = array_filter(explode(" ", $v));
	foreach ($tmp as $v)
		$str[] = $v;
}
sort($str);
$i = 0;
foreach($str as $v)
{
	if (($v[$i] >= 'a' && $v[$i] <= 'z') || ($v[$i] >= 'A' && $v[$i] <= 'Z'))
		echo $v[$i]."\n";
}
?>
