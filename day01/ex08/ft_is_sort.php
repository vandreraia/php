#!/usr/bin/php
<?PHP
function ft_is_sort($str)
{
	$sort = $str;
	sort($sort);
	if (array_diff_assoc($sort, $str) == null)
		return true;
	return false;
}
?>
