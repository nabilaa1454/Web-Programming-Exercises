<!DOCTYPE html>
<html>
<head>Headings</head>
<body>
<?php
	$i=1;
	do {
		if($i % 2 == 0){
			echo "<font color= red><h".$i.">Heading ".$i."</h".$i."></font>";
		} else{
			echo "<font color= black><h".$i.">Heading ".$i."</h".$i."></font>"; 
		} 
		$i++;
	}
	while($i <=6);
?>
</body>
</html>
