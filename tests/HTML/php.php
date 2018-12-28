#!/usr/bin/php
<?PHP

print("aeaeae\n");
echo "hello\n";

$var = 42;
$str = "mundo\n";
$tab  = explode(":", "zero:dos:deus");
$hash = array("key1" => "val1", "key2" => "val2");

echo $str;
echo $var."\n";

echo "\n";

$result = "1" / "6";
echo "$argc\n\n";
print_r($tab);
print("$hash[key1] + $result\n");
echo "\n";

foreach($argv as $elem)
	echo"$elem\n";
print_r($argv);
?>
