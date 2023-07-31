<!-- modal para cadastrar novo cliente  -->

<?php @session_start(); 

// Verifica se a sessão específica existe e se o usuário não está logado
if (!isset($_SESSION['session_start']) && !isset($_SESSION['nivel_usuario'])) {
    // Redireciona o usuário para a página de login
	echo "<script language='javascript'>window.location='../index.php'; </script>";

    exit(); // Encerra o processamento
}


?>
	<center><h4>  Ariquemes</h4></center>	
	<div class="table-responsive" style="max-height: 600px; overflow-y: auto;">
    <table id="lista" class="table table-hover">
        <thead class="thead" style="position: sticky; top: 0; background-color: #f9f9f9;">
				<tr >  
          			<th>Data entrega</th>
					<th>Nome</th>
					<th>Modelo</th>
					<th>Cor</th>
					<th>Chassi</th>
          			<th>Emplacada</th>
					<th>Venda</th>
          			<th>Vendedor</th>		
					<th colspan="2">Ações</th>
					
					
				</tr>
			</thead>
			<tbody>
  <br>
  
<?php foreach($manager->Ariquemes("agendarapida") as $client): 


	
	if ($client['Status_entrega']  == "SIM") {
		// Caso seja igual, a linha será ocultada
		$estiloDisplay = "hidden" ;
	} else {

		// Caso contrário, a linha será exibida normalmente
		$estiloDisplay = "";
	}
		if ($client['Ativada']  == "") {
			// Caso seja igual, a linha será ocultada
			$estiloDisplay = "hidden" ;
		} else {
			// Caso contrário, a linha será exibida normalmente
			$estiloDisplay = "";
			
	} ?>
	
	
				<tr <?php echo $estiloDisplay;?>>

        
          <td hidden><?php 
          echo $client['ID']; ?></td>
        <td <?php echo $estiloDisplay;?> > 
              <?php  
                  $a = strtotime($client['start']);
                  $b = date('d/m/Y  H:i:s', $a);
                    echo '<b>'. $b .'</b>'; 

              ?>
          
  		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		</td>
        			<td <?php echo $estiloDisplay;?> ><?php echo $client['Nome']; ?></td>
					<td <?php echo $estiloDisplay;?> ><?php echo $client['Modelo']; ?></td>
         		    <td <?php echo $estiloDisplay;?> ><?php echo $client['Cor']; ?></td>
					<td <?php echo $estiloDisplay;?> ><?php echo $client['Chassi']; ?></td>
         			<td <?php echo $estiloDisplay;?> ><?php echo $client['Emplacada']; ?></td>
          			<td <?php echo $estiloDisplay;?> ><?php echo $client['Tipo_venda']; ?></td>
					<td <?php echo $estiloDisplay;?> ><?php echo $client['Vendedor']; ?></td>
				
					
					<td>
						

						<td <?php echo $estiloDisplay;?> >

						<form method="POST" action="controller/insert_status.php" >

						<?php 	
						// verifica se o usuario é admin ou seguros para poder liberar acesso ao BTN confirmar entrega  CNH não tem liberação
						if($_SESSION["nivel_usuario"] == 'Admin' ){

						echo '<form method="POST" action="controller/insert_montagem.php" >';
						}

						if($_SESSION["nivel_usuario"] == 'CNH' ){
							$oculta_btn = "hidden";
						
							}if($_SESSION["nivel_usuario"] == 'Admin' ){
								$oculta_btn = "";
							
								}
								if($_SESSION["nivel_usuario"] == 'Seguros' ){
									$oculta_btn = "";
								
									}
								?>
							<input type="text" hidden name="id" value="<?=$client['ID']?>">
							<!-- Para registrar ação do usuario caso altere informações como excluir o dados databela -->
							<div class="col-md-12">
							  <input hidden type="datetime"   name="DT_alteracao"  value="<?php  date_default_timezone_set('America/Cuiaba');$date = date('Y-m-d H:i');echo $date; ?>" class="form-control">
							</div>
							<!-- Para registrar a entrega na base caso motocicleta seja entregue -->
							<div class="col-md-12">

							  <input type="text" hidden  name="Status_entrega" value="SIM" class="form-control" placeholder="Status_entrega">
							</div>
							<!-- Para add informação que dado da tabela não foi excluido dela add a informação NÂO para fins de selects de relatorios  -->
							<div class="col-md-12">
							  <input type="text" hidden  name="Excluido" value="NAO" class="form-control" >
							</div>
							

							<button <?php echo" $oculta_btn "; ?> class="btn btn-success"  onclick="return confirm('Deseja confirmar a entrega?');" ><i class="fa fa-thumbs-up"></i> </bu>

					   </form>

					</td >
					<td <?php echo $estiloDisplay;?> >
					<!-- Btn Alterar -->
						<form method="POST" action="view/page_update.php">
							
							<input type="hidden" name="id" value="<?=$client['ID']?>">

							<button class="btn btn-warning btn-xd" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<i class="fa fa-user-edit"></i>
							</button>

						</form>
								
						
										
					</td>
					
					<td <?php echo $estiloDisplay;?> >
						<!-- btn excluir -->
						<form method="POST" action="controller/delete_client.php" onclick="return confirm('Você tem certeza que deseja excluir ?');">
							
							<input type="hidden" name="id" value="<?=$client['ID']?>">
							<!-- Para identificar alterção do usuario colocando log data para registrar  -->
							<div class="col-md-12">

							  <input hidden type="datetime"   name="DT_alteracao"  value="<?php  date_default_timezone_set('America/Cuiaba');$date = date('Y-m-d H:i');echo $date; ?>" class="form-control">
							</div>
							<!-- para registrar que o dado foi excluido pelo usuario  -->
							<div class="col-md-12">
							  <input type="text" hidden  name="Excluido" value="SIM" class="form-control" >
							</div>
							<button class="btn btn-danger btn-xd">
								<i class="fa fa-trash"></i>
							</button>

						</form>
				</td>
						<Script>
								// Obtenha todas as linhas da tabela, exceto o cabeçalho
							var rows = document.querySelectorAll('#lista');

							// Itere sobre as linhas
							for (var i = 0; i < rows.length; i++) {
							// Obtenha o valor da segunda célula (índice 1)
							var cellValue = rows[i].getElementsByTagName('td')[8].innerText;

							// Verifique se o valor é "SIM" (ou qualquer outro valor que você deseje ocultar)
							if (cellValue.toLowerCase() === 'SIM') {
								// Oculte a linha atribuindo a classe CSS 'hide'
								rows[i].classList.add('hide');
							}
							}
						</Script>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

</div>


</div>

</form>



<script>
        // Função para atualizar a página a cada 5 minutos (300.000 milissegundos)
        setTimeout(function() {
            location.reload();
        }, 300000);
    </script>



