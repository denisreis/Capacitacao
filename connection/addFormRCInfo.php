<?php
// INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA BAIANO
// NGTI - CAMPUS SANTA INÊS
// DOC N SC001/Ver Beta 0.1 
// Seção de conexão com a base de dados.
// Campos relativos aos cadastros

	$name = $_post[]; // nome
	$surname = $_POST[]; // sobrenome
	$career = $_POST[]; // Carreira
	$occupation = $_POST[]; // Ocupação
	$workload = $_POST[]; // Carga Horária
	$institution_name = $_POST[]; // Nome da instituição
	$type_instituition = $_POST[]; // Tipo da instituição
	$level_of_education = $_POST[]; // Nível de escolaridade
	$level_incomplete_education = $_POST[]; // Nível de escolaridade em andamento
	$knowledge_area = $_POST[]; // Área de conhecimento
	$finality = $_POST[]; // Finalidade (motivo)
	$modality = $_POST[]; // Modalidade
	$relationship_with_objectives =  $_POST[]; //Relação com os objetivos estratégicos
	$Observation = $_POST[]; // Observações
	
/* As informações específicas para cadastros nos campos estão
guardadas em base de dados e são configuradas pelo gestor
da aplicação! */

	$interface_confirm = "$name, $surname, $career, $occupation, $workload, $institution_name, $type_instituition, $level_of_education,";
	$interface_confirm .= "$level_incomplete_education, $knowledge_area, $finality, $modality, $relationship_with_objectives, $Observation";
	
	include "../classes/addFormRCInfo.php"
	
	$objAddInfo = new FormRCInfo.php();
	$condition =  $objAddInfo->addFormRCInfo($name,$surname,$career,$occupation,$workload,$institution_name,$type_instituition,$level_of_education,$level_incomplete_education,$knowledge_area,$finality,$modality,$relationship_with_objectives,$observation);
	
	
?>

