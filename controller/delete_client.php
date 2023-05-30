<?php  

include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';

$manager = new Manager();

$id = $_POST['id'];

if(isset($id) && !empty($id)) {
	$manager->deleteClient("agendarapida", $id);

	header("Location: ../principal.php?acao=pages/lista_de_espera");
}

?>