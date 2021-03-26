<?php
$baris = 4;
$kolom = 5;
$nomer = 1;
echo "<table border='1'>";
for ($i=0; $i <$baris; $i++) { 
	echo "<tr>";
	for ($j=0; $j <$kolom; $j++) { 
		if($i % 2 == 0){
			echo "<td style=color:white;background-color:red;>$nomer</td>";
		} else{
			echo "<td style=color:red;background-color:white;>$nomer</td>";
		} 
		$nomer++;
	}
	echo "</tr>";
}
echo "</table>";
?>