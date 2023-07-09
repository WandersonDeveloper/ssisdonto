<!-- modal para cadastrar novo cliente  -->
<?php 
@include_once '../dependencias.php';
@session_start(); 
// verifica se o usuario logado tem acesso a pagina MOntagem se não admin ou usuario montagem não acessa Pagina
if($_SESSION['nivel_usuario'] != 'Admin' && $_SESSION['nivel_usuario'] != 'Montador'){
    echo "<script language='javascript'>window.location='index.php'; </script>";
}
?>

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
	
	if ($client['Ativada']  == "SIM") {
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
							<!-- verifica se usuario é admin ou montador para direcionar para caminho correto  -->
						<?php 	
						if($_SESSION["nivel_usuario"] == 'Admin' ){

						echo '<form method="POST" action="controller/insert_montagem.php" >';
						}

						if($_SESSION["nivel_usuario"] == 'Montador' ){

						echo '<form method="POST" action="../controller/insert_montagem.php" >';
							}
								?>
				
							<input type="text" hidden name="id" value="<?=$client['ID']?>">

							<!-- Para registrar ação do usuario caso altere informações como excluir o dados databela -->
							<div class="col-md-12">
							  <input hidden type="datetime"   name="DT_alteracao"  value="<?php  date_default_timezone_set('America/Cuiaba');$date = date('Y-m-d H:i');echo $date; ?>" class="form-control">
							</div>
							<!-- cor de status  -->
							<div class="col-md-12">
							  <input type="text" hidden  name="Status_cor" value="#b7d5ac" class="form-control" >
							</div>

							<!-- Para add informação que dado da tabela não foi excluido dela add a informação NÂO para fins de selects de relatorios  -->
							<div class="col-md-12">
							  <input type="text" hidden  name="Excluido" value="NAO" class="form-control" >
							</div>
                            <!-- se a motocicleta for não for ativada   -->
                            <div class="col-md-12">
							  <input type="text" hidden  name="Ativada" value="SIM" class="form-control" >
							</div>

							<button class="btn btn-success"  onclick="return confirm('Deseja finalizar o chamado para esta Motocicleta?');" ><i class="fa fa-thumbs-up"></i> </bu>

					   </form>

					</td >
					<td <?php echo $estiloDisplay;?> >
				
					
					

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





