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
foreach($str as $v)
{
	echo $v."\n";
}
?>
