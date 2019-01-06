#!/usr/bin/php
<?PHP
function ft_split($str)
{
	$words = explode(" ", $str);
	$sort_words = array_values(array_filter($words));
	sort($sort_words);
	return ($sort_words);
}
?>
