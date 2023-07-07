<?php 

require_once("../model/Conexao.class.php");
@session_start();

if(empty($_POST['username']) || empty($_POST['pass'])){
		echo "<script language='javascript'>window.location='./login.php'; </script>";
}

$usuario = $_POST['username'];
$senha = $_POST['pass'];


$res = $conn->prepare("SELECT * from user where Email = :usuario and Senha = :senha ");

$res->bindValue(":usuario", $usuario);
$res->bindValue(":senha", $senha);
$res->execute();

$dados = $res->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($dados);



if($linhas > 0){
	$_SESSION['nome_usuario'] = $dados[0]['Nome'];
	$_SESSION['email_usuario'] = $dados[0]['Usuario'];
	$_SESSION['nivel_usuario'] = $dados[0]['Nivel'];
	$_SESSION['cpf_usuario'] = $dados[0]['Cpf'];

	if($_SESSION['nivel_usuario'] == 'Admin'){
		echo "<script language='javascript'>window.location='../principal.php'; </script>";
		exit();
	}

	if($_SESSION['nivel_usuario'] == 'Montador'){
		echo "<script language='javascript'>window.location='Montagem.php'; </script>";
		
		exit();
	}

	if($_SESSION['nivel_usuario'] == 'Cnh'){
		echo "<script language='javascript'>window.location='../principal.php'; </script>";
		exit();
	}

	
	
}else{
	echo "<script language='javascript'>window.alert('Dados Incorretos!!'); </script>";
	echo "<script language='javascript'>window.location='../index.php'; </script>";
	
}


 ?>