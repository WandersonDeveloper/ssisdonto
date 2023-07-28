<!-- modal para cadastrar novo cliente  -->
<?php 
@include_once '../dependencias.php';
@session_start(); 
// Verifica se a sessão específica existe e se o usuário não está logado
if (!isset($_SESSION['session_start']) && !isset($_SESSION['nivel_usuario'])) {
    // Redireciona o usuário para a página de login
	echo "<script language='javascript'>window.location='../index.php'; </script>";

    exit(); // Encerra o processamento
}

// verifica se o usuario logado tem acesso a pagina MOntagem se não admin ou usuario montagem não acessa Pagina
if($_SESSION['nivel_usuario'] != 'Admin' && $_SESSION['nivel_usuario'] != 'Montador'&& $_SESSION['nivel_usuario'] != 'Seguros' ){
    echo "<script language='javascript'>window.location='index.php'; </script>";
}
if($_SESSION["nivel_usuario"] == 'Admin'  ){
	$oculta_btn = "";
	$oculta_btnalterar = "";
}
 if($_SESSION["nivel_usuario"] == 'Seguros'  ){
	$oculta_btn = "hidden";
	$oculta_btnalterar = "";
}
	if($_SESSION["nivel_usuario"] == 'Montador'  ){
		$oculta_btn = "";
		$oculta_btnalterar = "hidden";}

		if($_SESSION["nivel_usuario"] == 'Vendedor'  ){
			$oculta_btn = "hidden";
			$oculta_btnalterar = "hidden";}

				
			
		if($_SESSION["nivel_usuario"] == 'Montador'  ){
	
			echo "
			<nav class='navbar bg-dark border-bottom border-bottom-dark' data-bs-theme='dark'>
				<b style='color:white;'>Seja Bem-Vindoª " . $_SESSION["nome_usuario"] . ".</b> 
				<div class='container-fluid'>
					<a href='../view/logout.php' class='navbar-brand'>Sair</a>
				</div>
			</nav>";

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
					<th <?php echo "$oculta_btn";?> colspan="2">Ações</th>
					
					
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
				
				
						

						<td  <?php echo "$oculta_btn";  echo $estiloDisplay;?> >
							<!-- verifica se usuario é admin ou montador para direcionar para caminho correto  -->
						<?php 	
						if($_SESSION["nivel_usuario"] == 'Admin' ){

						echo '<form method="POST" action="controller/insert_montagem.php" >';
						}

						if($_SESSION["nivel_usuario"] == 'Montador' ){

						echo '<form method="POST" action="../controller/insert_montagem.php" >';
							}
						if($_SESSION["nivel_usuario"] == 'Seguros' ){

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
							<div>
								<!-- add a cor na tabela status cor -->
							<input type="text" hidden  name="Status_cor" value="#ffe600" class="form-control" >
							<!-- add na tabela statusentregafinal  informação ativada  -->
							<input type="text" hidden  name="status_entrega_final" value="Ativada" class="form-control" >
							</div>
                            <!-- se a motocicleta for não for ativada   -->
                            <div class="col-md-12">
							  <input type="text" hidden  name="Ativada" value="SIM" class="form-control" >
							</div>
							<button class="btn btn-success" <?php echo" $oculta_btn "; ?>  onclick="return confirm('Deseja finalizar o chamado para esta Motocicleta?');" ><i class="fa fa-thumbs-up"></i> </button>
					   </form>

					</td >

					<td
					
					<?php echo $estiloDisplay;?> <?php echo $oculta_btnalterar;?> >
						<!-- Btn Alterar -->
						
							<form method="POST" action="view/page_update.php">
								
								<input type="hidden" name="id" value="<?=$client['ID']?>">
	
								<button class="btn btn-warning btn-xd" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
									<i class="fa fa-user-edit"></i>
								</button>
	
							</form>
									
							
											
						</td>


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





