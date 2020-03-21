<?php

function cariterpanjang($huruf)
{	

	$pecahString = explode(" ", $huruf);
	$longestWordLength = 0;
	$longestWord = '';

	for ($i = 0; $i < count($pecahString); $i++) 
	{
		if (strlen($pecahString[$i]) >$longestWordLength) {
	      $longestWordLength = strlen($pecahString[$i]);
	      $longestWord = $pecahString[$i];

	   }
		
	}

	echo $longestWord;

}
echo cariterpanjang("Halo Arkademian!");


?>