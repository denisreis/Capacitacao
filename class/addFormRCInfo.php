<?php
class FormRCInfo {
private $base;

function __construct() {
	include "..\class\connection\connection.php";
	$this->base = mysql_connect($url,$usr,$pass);
	mysql_select_db($db,$this->base);} // fim do construtor de classe

function addFormRCInfo($name,$surname,$career,$occupation,$workload,$institution_name,$type_instituition,$level_of_education,$level_incomplete_education,$knowledge_area,$finality,$modality,$relationship_with_objectives,$observation){
	$sql = "insert into capacitacao(name,surname,career,occupation,workload,institution_name,type_instituition,level_of_education,level_incomplete_education,knowledge_area,finality,modality,relationship_with_objectives,observation)"
	$sql .= "values ('$name','$surname','$career','$occupation','$workload','$institution_name','$type_instituition','$level_of_education','$level_incomplete_education','$knowledge_area','$finality','$modality','$relationship_with_objectives','$observation')";
	$result = mysql_query($sql,$this->base);
	return $result;}
	}
	?>