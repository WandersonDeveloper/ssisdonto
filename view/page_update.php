<?php 
include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';
include_once '../dependencias.php'; 

$manager = new Manager();

$id = $_POST['id'];

?>
<br><br>
<h2 class="text-center">
	ALTERAR DADOS DA MOTOCICLETA  <i class="fa fa-motorcycle"></i>
</h2><hr>

<form method="POST" action="../controller/update_client.php">
	
<div class="container">
<div class="card">
	<div class="card-body">
	<div  class="form-row ">
		
		<?php foreach($manager->getInfo("agendarapida", $id) as $client_info): ?>
		

		<div class="col-md-4">
			Nome: <i class="fa fa-user"></i>
			<input class="form-control" type="text" name="Nome" required autofocus value="<?=$client_info['Nome']?>"><br>
		</div>

		<div class="col-md-4">
		Modelo: <i class="fa fa-motorcycle"></i>
			<input class="form-control" type="text" name="Modelo" required value="<?=$client_info['Modelo']?>"><br>
		</div>

		<div class="col-md-4">
		 Cor: <i class="fa fa-eyedropper"></i>	
			<input class="form-control" type="text" name="Cor" required id="Cor" value="<?=$client_info['Cor']?>"><br>
		</div>

		<div class="col-md-4">
			chassi: <i class="fa fa-tags "></i>
			<input class="form-control" type="text" id="Chassi" name="Chassi" required value="<?=$client_info['Chassi']?>"><br>
		</div>
	
		<div class="col-md-4" >
	 É EMPLACADA ?:<b style="color: red;"> <?=$client_info['Emplacada']?></b>   
                    <select class="form-control" name="Emplacada" id="">

                       <option name="Emplacada" <?=$client_info['Emplacada']?>value=" Sim">SIM </option>
                       <option name="Emplacada"<?=$client_info['Emplacada']?> value="Não"> NÂO</option>

                    </select>
        </div>
                  

		<div class="col-md-4">
			Data e hora  <i class="fa fa-calendar"></i>
			<input class="form-control" type="datetime-local" name="start" required value="<?=$client_info['start']; ?>"><br>
		</div>

		

		<div class="col-md-4">
			
			<input type="hidden" name="id" value="<?=$client_info['ID']?>">

			<?php endforeach; ?>

			<button class="btn btn-warning btn-lg">
				
				Alterar dados <i class="fa fa-user-edit"></i>

			</button><br><br>

			<a class="btn btn-danger "  href="../principal.php?acao=pages/lista_de_espera">
				Voltar
			</a>

		</div>

	</div>
</div>
</div>
</div>
</form>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 

<script type="text/javascript">
	$(document).ready(function(){
		$("#Chassi").mask("AAAAAAAAAAAAAAAAA");
		
	});
</script>