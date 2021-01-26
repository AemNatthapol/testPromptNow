 <?php 

	for ($i=0; $i <= 9; $i++) { 
		for ($j=9; $j >= 0; $j--) { 
			if ($i<$j) {
				echo "X";
			}else{
				echo "O";
			}
		}
		echo "<br>";
	}
 ?>