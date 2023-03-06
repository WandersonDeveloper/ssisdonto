<?php
// Metodo responsável por fazer a conxão com o vanvo e apresentar  o evento 

include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';

$manager = new Manager();

$query_events = "SELECT Id, Nome, Cpf, Cor, Telefone, Start, End FROM agendarapida";
$resultado_events = $conn->prepare($query_events);
$resultado_events->execute();
$eventos = [];

// chama o evento Id nome cpf cor data e hora  
while($row_events = $resultado_events->fetch(PDO::FETCH_ASSOC)){
    $id = $row_events['Id'];
    $Nome = $row_events['Nome'];
    $telefone = $row_events['Telefone'];
    $cpf = $row_events['Cpf'];
    $color = $row_events['Cor'];
    $start = $row_events['Start'];
    $end = $row_events['End'];
    
    $eventos[] = [
        'id' => $id, 
        'title' => $Nome,
        'Telefone' => $telefone,
        'cpf' => $cpf, 
        'color' => $color, 
        'start' => $start, 
        'end' => $end, 
        ];
}

echo json_encode($eventos);