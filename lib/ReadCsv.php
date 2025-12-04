<?php
function readCsvFile($file) {
    $rows = [];
	
	if (($csv_file = fopen($file, "r")) !== false){
		while (($read_data = fgetcsv($csv_file)) !== false){
			$rows[] = $read_data;
		}
		fclose($csv_file);
	}
	return $rows;
}
?>
