<?php  

include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';

$manager = new Manager();

$data = $_POST;

if(isset($data) && !empty($data)) {
	$manager->insertClient("agendarapida",$data);
}

if (isset($data) && !empty($data)) {

	$manager->insertClient("registro_agenda",$data);
	
	header("Location: ../principal.php?client_add_success");
}

?>