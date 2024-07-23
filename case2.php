<?php
class test {
	public $property;
}

$obj = new test();
$obj->property = "Halo, Sandy";

//menggunakan operator nullsafe
$value = $obj?->property; //Jika $obj tidak null, $value akan menjadi "Halo, Sandy"
echo $value; // Output: Halo, Sandy

echo "\n";

$obj = null;

//Menggunakan nullsafe
$value = $obj->property; //Jika $obj null, $value akan tetap null
echo $value; //Tidak ada output karena $obj null
?>
