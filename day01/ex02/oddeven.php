#!/usr/bin/php
<?PHP
while (true)
{
	echo "Enter a number: ";
	$nbr = trim(fgets(STDIN));
	if (feof(STDIN))
	{
		echo "\n";
		exit();
	}
	if (is_numeric($nbr))
	{
		if ($nbr % 2 != 0)
			echo ("The number ".$nbr." is odd\n");
		else
			echo ("The number ".$nbr." is even\n");
	}
	else 
		echo("'".$nbr."' is not a number\n");
}
?>
