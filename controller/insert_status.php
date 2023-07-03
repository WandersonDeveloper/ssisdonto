<?php  

include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';

$manager = new Manager();
$update_client = $_POST;
$id = $_POST['id'];


if(isset($id) && !empty($id)) {


	$manager->updateClient("agendarapida", $update_client, $id);

	$manager->updateClient("registro_agenda", $update_client, $id);
	
	$manager->deleteClient("agendarapida", $id);

	// header("Location: ../principal.php?client_add_success");
	header("Location: ../principal.php?acao=pages/lista_de_espera");
}

?>