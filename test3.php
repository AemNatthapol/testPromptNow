 <?php 

	for ($i=0; $i <= 4; $i++) { 
		for ($j=4; $j >= 0; $j--) { 
			if ($i<$j) {
				echo "0";
			}else{
				echo "X";
			}
		}
		for ($k=0; $k < $i; $k++) { 
			if ($k < $j) {
				echo "0";
			}else{
				echo "X";
			}
		}
		for ($l=4; $l > 0 ; $l--) { 
			echo "0";
		}
		echo "<br>";
	}
 ?>