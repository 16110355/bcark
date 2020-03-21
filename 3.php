<?php  
function triangle($angka)
{	
	if(!preg_match("/^[0-9\-]$/", $angka)) {
	  echo 'Paramemeter harus angka dan positif!';
	} 
	else
	{
		for($i=0;$i<=$angka;$i++){  
			for($j=1;$j<=$i;$j++){  
			echo "#";  
			}  
			echo "<br>";  
		}  
	}
}
echo triangle('tiga');
?>  