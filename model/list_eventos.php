<?php
// Metodo responsável por fazer a conxão com o vanvo e apresentar  o evento 

include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';

$manager = new Manager();

$query_events = "SELECT ID, Nome, Modelo, Status_cor, Chassi,  start  FROM agendarapida";
$resultado_events = $conn->prepare($query_events);
$resultado_events->execute();
$eventos = [];

// chama o evento 
while($row_events = $resultado_events->fetch(PDO::FETCH_ASSOC)){

    $id     =  $row_events['ID'];
    $title  =  $row_events['Nome'];
    $start  =  $row_events['start'];
    $Cor  =  $row_events['Status_cor'];
    
    $eventos[] = [
        
        'ID'    =>      $id, 
        'title' =>      $title,
        'start' =>      $start, 
        'color' =>        $Cor, 

        ];
}

echo json_encode($eventos);