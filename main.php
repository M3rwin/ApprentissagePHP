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
	echo "<td><b>", 0, "</b>";
	for($t=1; $t<11; $t++){
		echo "<td><b>", $t, "</b>";
	}


	//remplissage du tableau
	for($i=1; $i<11; $i++){
		echo "<tr><td><b>", $i, "</b>";
		for($j=1; $j<11; $j++){
			echo "<td>", $i*$j;
		}
	}
