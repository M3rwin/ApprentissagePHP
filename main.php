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
	
	$matrice = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

// Affichage de la matrice
foreach ($matrice as $row) {
    foreach ($row as $value) {
        echo $value . " ";
    }
    echo "<br>";
}