<?php
	include_once "../../lib/readCsv.php";
	function getAwards() {
		$lines = readCsvFile("../../data/Awards.csv");
		
		#doesn't return blank rows
		$array = [];
		foreach ($lines as $award){
			if (count($award) < 3) continue;
			$array[] = array_slice($award, 0, 3);
			
		}
		return $array;
	}
	
	function getAward($x) {
		$awards = readCsvFile("../../data/Awards.csv");
		return $awards[$x];
	}
		
	function addAward($year, $name, $description){
		$file = fopen("../../data/Awards.csv", "a");
		
		##stupid newline bug fix
		$lastChar = file_get_contents("../../data/Awards.csv");
		
		#thought substr would delete new line from being created, but it didn't matter anyway because it didnt even break the detail page so i wasted my time
		if ($lastChar !== "" && substr($lastChar, -1) !== "\n"){
			fwrite($file, "\n");
		}
		fputcsv($file, [$year, $name, $description]);
		
		fclose($file);
	}

	function editAward($id, $year, $name, $description){
		$awards = readCsvFile("../../data/Awards.csv");
		$awards[$id] = [$year, $name, $description];
		
		$file = fopen("../../data/Awards.csv", "w");
		foreach ($awards as $line){
			fputcsv($file, $line);
		}
		fclose($file);
	}
	
	function deleteAward($id){
		$awards = readCsvFile("../../data/Awards.csv");
		$newAwards = [];
		
		##skips entry
		for ($x = 0; $x < count($awards); $x++){
			if ($x != $id){
				$newAwards[] = $awards[$x];
			}
		}
		
		$file = fopen("../../data/Awards.csv", "w");
		foreach ($newAwards as $line){
			fputcsv($file, $line);
		}
		fclose($file);
	}
?>
