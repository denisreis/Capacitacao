<?php
// INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA BAIANO
// NGTI - CAMPUS SANTA INÊS
// DOC N SC001/Ver Beta 0.1 
// Seção de conexão com a base de dados.
// Campos relativos aos cadastros

	$name = $_post['name']; // nome
	$surname = $_POST['surname']; // sobrenome
	$career = $_POST['career']; // Carreira
	$occupation = $_POST['occupation']; // Ocupação
	$workload = $_POST['workload']; // Carga Horária
	$institution_name = $_POST['institution_name']; // Nome da instituição
	$type_instituition = $_POST['type_instituition']; // Tipo da instituição
	$level_of_education = $_POST['level_of_education']; // Nível de escolaridade
	$level_incomplete_education = $_POST['level_incomplete_education']; // Nível de escolaridade em andamento
	$knowledge_area = $_POST['knowledge_area']; // Área de conhecimento
	$finality = $_POST['finality']; // Finalidade (motivo)
	$modality = $_POST['modality']; // Modalidade
	$relationship_with_objectives =  $_POST['relationship_with_objectives']; //Relação com os objetivos estratégicos
	$observation = $_POST['observation']; // Observações
	
/* As informações específicas para cadastros nos campos estão
guardadas em base de dados e são configuradas pelo gestor
da aplicação! */
 /*
	$interface_confirm = "$name, $surname, $career, $occupation, $workload, $institution_name, $type_instituition, $level_of_education,";
	$interface_confirm .= "$level_incomplete_education, $knowledge_area, $finality, $modality, $relationship_with_objectives, $observation";
*/
	include "../classes/addFormRCInfo.php"
	
	$objAddInfo = new FormRCInfo.php();
	$condition =  $objAddInfo->addFormRCInfo($name,$surname,$career,$occupation,$workload,$institution_name,$type_instituition,$level_of_education,$level_incomplete_education,$knowledge_area,$finality,$modality,$relationship_with_objectives,$observation);
?>

