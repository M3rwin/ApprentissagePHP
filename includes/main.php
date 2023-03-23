<?php
	/*
	for($i=1; $i<10000; $i+=2){
		echo $i;
		echo '<br>';
	}
	*/
	
	/*
	for($i=0; $i<100; $i++){
		echo 'je dois apprendre mon cours';
		echo '<br>';
	}
	*/
	
	/*
	$rep=1;
	for($i=30; $i>0; $i--){
		$rep*=$i;
	}
	echo $rep;
	*/
	
	/*
	for($i=1; $i<11; $i++){
		echo $i, " x 13 = ", $i*13, "<br>";
	}
	*/
	
	/*
	echo '<span style="padding-left: 12px;"></span>| 1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10 |', "<br>";
	for($i=1; $i<14; $i++){
		echo $i, " | ";
		for($j=1; $j<11; $j++){
			echo $i*$j, " , ";
		}
		echo "<br>";
	}
	*/
	
	//début tableau html
	echo "<table border='1'>";
	
	//première ligne
	echo "<td id=\"zero\"><b>", "X", "</b>";
	for($t=1; $t<14; $t++){
		echo "<td class=\"rouge\"><b>", $t, "</b></td>";
	}


	//remplissage du tableau
	for($i=1; $i<11; $i++){
		echo "<tr><td class=\"rouge\"><b>", $i, "</b></td>";
		for($j=1; $j<14; $j++){
			echo "<td class=\"bleue\">", $i*$j, "</td>";
		}
	}

	echo "</tr>";