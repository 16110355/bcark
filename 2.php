<?php
function validasi($ambilUsername,$ambilPassword)
{	
	$username = $ambilUsername;
	$password = $ambilPassword;

	if(preg_match("/[a-z]{5,7}$/", $username)) {
	  echo 'username valid';
	} else {
	  echo 'username tidak valid';
	}

	if(preg_match("/^[A-z0-9@]{9}$/", $password)) {
	  echo 'password valid';
	} else {
	  echo 'password tidak valid';
	}
}

echo validasi("diandra","Kint4m@ni");
?>