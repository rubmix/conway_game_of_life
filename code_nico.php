<?php

$row = array();

while (true)
{
	echo "saisi du tableau de départ";

	$i = (int) 0;

	$input = explode (" ",trim (fgets(STDIN)));
    $col = $input;

    array_push($row,$col); // push col in array
    var_dump($row);
    $i++;
}



