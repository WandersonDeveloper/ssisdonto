<?php  

include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';
session_start();
$manager = new Manager();
$update_client = $_POST;
$id = $_POST['id'];


if(isset($id) && !empty($id)) {


	$manager->updateClient("agendarapida", $update_client, $id);

	$manager->updateClient("registro_agenda", $update_client, $id);
	
	

	// // header("Location: ../principal.php?client_add_success");



	if($_SESSION["nivel_usuario"] == 'Admin' ){
	header("Location: ../principal.php?acao=pages/Montagem");
	}
	if($_SESSION["nivel_usuario"] == 'Montador' ){
		header("Location: ../pages/Montagem.php");
		}
}

?>