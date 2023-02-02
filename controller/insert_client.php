<?php  

include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';

$manager = new Manager();

$data = $_POST;

if(isset($data) && !empty($data)) {
	$manager->insertClient("agendarapida",$data);
	
	header("Location: ../index.php?client_add_success");
}

?>