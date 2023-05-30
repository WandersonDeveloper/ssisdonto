<!-- modal para cadastrar novo cliente  -->

<?php @session_start(); ?>

<div class="card col-md-12">
  <br>

  <div class="table-responsive">
		<table class="table table-hover">
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
					<td>
						
					<td>
						<!-- Btn Entregue  -->
						<form method="POST" action="controller/insert_status.php">

								<input type="" name="id" hidden value="<?=$client['ID']?>">

							<div class="col-md-12">
								<input id="new-event"name="Status_entrega" type="text" value="SIM"hidden class="form-control" placeholder="Status_entrega" >
							</div>

							<button class="btn btn-success btn-xd">
								<i class="fa fa-thumbs-up"></i>
							</button>

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
					
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

</div>


</div>

</form>