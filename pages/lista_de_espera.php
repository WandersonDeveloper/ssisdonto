<!-- modal para cadastrar novo cliente  -->
<link rel="stylesheet" type="text/css" href="desabilita.css">
<?php @session_start(); ?>

<div class="card col-md-12">
  <br>

  <div class="table-responsive">
		<table id="lista" class="table table-hover">
			<thead class="thead">
				<tr>  
          			<th>Data entrega</th>
					<th>Nome</th>
					<th>Modelo</th>
					<th>Cor</th>
					<th>Chassi</th>
          			<th>Emplacada</th>
					<th>venda</th>
          			<th>Vendedor</th>
					<th>Entrega</th>
					<th colspan="2">Ações</th>
					
					
				</tr>
			</thead>
			<tbody>

				<!-- fazer comparação se existir Status_entrega  então não exiba  na lista de entrega  -->


				<?php foreach($manager->listClient("agendarapida") as $client): ?>
				<tr>

        
          <td hidden><?php 
          echo $client['ID']; ?></td>
        <td> 
              <?php  
                  $a = strtotime($client['start']);
                  $b = date('d/m/Y  H:i:s', $a);
                    echo '<b>'. $b .'</b>'; 

              ?>
          
  		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		</td>
        			<td><?php echo $client['Nome']; ?></td>
					<td><?php echo $client['Modelo']; ?></td>
         		    <td><?php echo $client['Cor']; ?></td>
					<td><?php echo $client['Chassi']; ?></td>
         			<td><?php echo $client['Emplacada']; ?></td>
          			<td><?php echo $client['Tipo_venda']; ?></td>
					<td><?php echo $client['Vendedor']; ?></td>
					<td><?php echo $client['Status_entrega']; ?></td>
					<td>
						

						<td>
						<form method="POST" action="controller/insert_status.php" >
							<input type="text" hidden name="id" value="<?=$client['ID']?>">
							<div class="col-md-12">

							  <input type="text" hidden  name="Status_entrega" value="SIM" class="form-control" placeholder="Status_entrega">
							</div>

							<button class="btn btn-success"  onclick="return confirm('Deseja confirmar a entrega?');" ><i class="fa fa-thumbs-up"></i> </bu>

					   </form>

					</td>
					<td>
					<!-- Btn Alterar -->
						<form method="POST" action="view/page_update.php">
							
							<input type="hidden" name="id" value="<?=$client['ID']?>">

							<button class="btn btn-warning btn-xd">
								<i class="fa fa-user-edit"></i>
							</button>

						</form>
					</td>
					<td>
						<!-- btn excluir -->
						<form method="POST" action="controller/delete_client.php" onclick="return confirm('Você tem certeza que deseja excluir ?');">
							
							<input type="hidden" name="id" value="<?=$client['ID']?>">

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

	function evento(){
	const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Deseja confirmar a entrega?',
  text: "Para confirmar click no botão sim, desejo!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'SIM, Desejo Realizar a entrega! ',
  cancelButtonText: 'Não, Cancelar ',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    swalWithBootstrapButtons.fire(
      'Confirmado!',
      'Seus dados foram salvos e sua moto entregue parabéns',
      'success'
    )
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelado',
      'suas ações foram canceladas :)',
      'error'
    )
  }
})
	}
</script>