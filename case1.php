<?php
function foo(int|float $x): int|float {
	return $x;
}

echo foo(5); //output 5
echo "\n";
echo foo(5.5); //output 5.5
echo "\n";
echo foo(10); //output 5.5
echo "\n";
?>
 