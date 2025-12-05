<?php
	function getTeam(){
		$data = json_decode(file_get_contents("../../data/Team.json"), true);
		return $data["team"];
	}
	function getMember($id){
		$team = getTeam();
		return $team[$id];
	}
	function addMember($name, $position, $description, $image){
		$data = json_decode(file_get_contents("../../data/Team.json"), true);

		$data["team"][] = [
			"name" => $name,
			"position" => $position,
			"description" => $description,
			"image" => $image
		];
		file_put_contents("../../data/Team.json", json_encode($data));
	}

	function editMember($id, $name, $position, $description, $image){
		$data = json_decode(file_get_contents("../../data/Team.json"), true);

		$data["team"][$id] = [
			"name" => $name,
			"position" => $position,
			"description" => $description,
			"image" => $image
		];
		file_put_contents("../../data/Team.json", json_encode($data));
	}

	function deleteMember($id){
		$data = json_decode(file_get_contents("../../data/Team.json"), true);
		array_splice($data["team"], $id, 1);
		file_put_contents("../../data/Team.json", json_encode($data));
	}
?>
