<?php
error_reporting(0);
$string = "Halo Arkademian";

$PecahStr = explode(" ", $string);

for ( $i = 0; $i < count( $PecahStr ); $i++ ) {
	
	$hitungStr = strlen($PecahStr[$i]);
	echo $hitungStr[$i];
}
?>