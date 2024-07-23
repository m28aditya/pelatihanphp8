<?php
$status = 1;

//Menggunakan match expression
$result = match($status) {
	0 => "zero",
	1 => "one",
	default => "unknown"
};

echo $result; //Output one
?>
