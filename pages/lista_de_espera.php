<!-- modal para cadastrar novo cliente  -->

<?php @session_start(); ?>

<div class="card col-md-12">
	<div  class="table-responsive">
		<table id="lista" class="table table-hover">
			<thead class="thead">
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
<?php foreach($manager->listClient("agendarapida") as $client): 
	
	if ($client['Status_entrega']  == "SIM") {
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
							<input type="text" hidden name="id" value="<?=$client['ID']?>">
							<div class="col-md-12">

							  <input type="text" hidden  name="Status_entrega" value="SIM" class="form-control" placeholder="Status_entrega">
							</div>
							
							<div class="col-md-12">
							  <input type="text" hidden  name="Excluido" value="Nao" class="form-control" >
							</div>

							<button class="btn btn-success"  onclick="return confirm('Deseja confirmar a entrega?');" ><i class="fa fa-thumbs-up"></i> </bu>

					   </form>

					</td >
					<td <?php echo $estiloDisplay;?> >
					<!-- Btn Alterar -->
						<form method="POST" action="view/page_update.php">
							
							<input type="hidden" name="id" value="<?=$client['ID']?>">

							<button class="btn btn-warning btn-xd">
								<i class="fa fa-user-edit"></i>
							</button>

						</form>
					</td>
					<td <?php echo $estiloDisplay;?> >
						<!-- btn excluir -->
						<form method="POST" action="controller/delete_client.php" onclick="return confirm('Você tem certeza que deseja excluir ?');">
							
							<input type="hidden" name="id" value="<?=$client['ID']?>">
							
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





