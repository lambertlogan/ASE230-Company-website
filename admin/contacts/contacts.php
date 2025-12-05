<?php
	include_once "../../lib/readCsv.php";
	function getContacts(){
		return readCsvFile("../../data/Contacts.csv");
	}
	
	function getContact($x){
		$contacts = readCsvFile("../../data/Contacts.csv");
		return $contacts[$x];
	}

?>
