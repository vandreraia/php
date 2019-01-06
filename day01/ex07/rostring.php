#!/usr/bin/php
<?PHP
$str = array_values(array_filter(explode(" ", $argv[1])));
$i = 1;
$max = count($str);
while ($i < $max)
{
	echo $str[$i]." ";
	$i++;
}
echo $str[0];
?>
