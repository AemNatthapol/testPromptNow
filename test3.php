 <?php 
 	$round = '10';
	for ($i=0; $i <= $round; $i++) { 
		for ($j=$round; $j >= 0; $j--) { 
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
		for ($l=$round; $l > $i ; $l--) { 
			echo "0";
		}
		echo "<br>";
	}
 ?>
