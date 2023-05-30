<?php 
include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';
include_once '../dependencias.php'; 

$manager = new Manager();
$id = $_POST['id'];

?>


<form method="POST" action="../controller/insert_status.php">
	
<div class="container">
	<div class="form-row">
		
		<?php foreach($manager->getInfo("agendarapida", $id) as $client_info): ?>

		<div class="col-md-6">
			Entrega: <i class="fa fa-user"></i>
			<input class="form-control" type="text" name="Status_entrega"  value="SIM"><br>
		</div>
		
		<div class="col-md-4">
			
			<input type="hidden" name="id" value="<?=$client_info['ID']?>">

			<?php endforeach; ?>

			<button class="btn btn-warning btn-lg">
				
				Update Client <i class="fa fa-user-edit"></i>

			</button><br><br>

			

		</div>

	</div>
</div>

