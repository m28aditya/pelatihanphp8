<?php
try {
	//contoh kode yang menyebabkan eror
	$value = 1/0; 
} catch (DivisionByZero $e) {
	echo "Division By Zero error: {$e->getMessage()}";
} catch (Error $e) {
	echo "Error: {$e->getMessage()}";
}
?>
