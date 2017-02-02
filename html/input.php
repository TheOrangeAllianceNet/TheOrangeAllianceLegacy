<?php
	
	function PlaceID($placeFullAddress, $dataValidation){
		$m = new MongoClient();
		$c = $m->selectDB('TheOrangeAllianceTest')->selectCollection('Places');
		$cursor = $c->find(['MetaData.MetaData' => 'Places', 'MetaData.InputID' => $dataValidation]);
		$placeID = 'ERROR';
		foreach($cursor as $document){
			if($document['PlaceInformation']['PlaceFullAddress'] == $placeFullAddress){
				$placeID = strval($document['PlaceInformation']['PlaceID']);
				break;
			}
		}
		return $placeID;
	}
	function TimeTime($time){
		$timeFinal = 0;
		$timeDay = 0;
		$timeMonth = 0;
		$timeYear = 0;
		$timeBad = explode('/',$time);
		$timeDay = $timeBad[1];
		$timeMonth = $timeBad[0];
		$timeYear = $timeBad[2];
		$timeFinal = '20' . $timeYear . $timeMonth . $timeDay;
		return $timeFinal;
	}
	function CreateDBLog($datePlace, $data, $timeStamp, $inputID, $inputType, $dataValidation){
		$m = new MongoClient();
		$c = $m->selectDB('TheOrangeAllianceTest')->selectCollection('Log');
		$document = array(
			"MetaData" => array(
				"MetaData" => "LogInput",
				"TimeStamp" => "WOOT",
				"InputID" => "rainbow",
				"InputType" => "LogInput"
			),
			"Log" => array(
				"DatePlace" => $datePlace,
				"Data" => $data,
				"TimeStamp" => $timeStamp,
				"InputID" => $inputID,
				"InputType" => $inputType,
				"ArchiveFlag" => False
			)
		);
		if($datePlace != '20ERROR'){
			$c->insert($document);
		}
	}
?>