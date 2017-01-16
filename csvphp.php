<?php
/*
*  Работа с CSV
*/

function readCSV($filename = '') {
	if ($filename != '') {
		$f = fopen($filename, "rt") or die("Невозможно открыть файл!");
		$data = fgetcsv($f,1000,";");
		
		fclose($f);
		
		//echo '<pre>';
		//var_dump($data);
		//echo '</pre>';
		
		return $data;
	} else return false;
}

/***********************************************************/
foreach (readCSV('1.csv') as $arr){
	echo $arr;
}
?> 
