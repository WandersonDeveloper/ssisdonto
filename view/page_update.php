<?php 
include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';
include_once '../dependencias.php'; 

$manager = new Manager();

$id = $_POST['id'];

?>
<br><br>
<h2 class="text-center">
	EDITAR DADOS  <i class="fa fa-motorcycle"></i>
</h2><hr>

<form method="POST" action="../controller/update_client.php">
	
<div class="container">
<div class="card">
	<div class="card-body">
	<div  class="form-row ">
		
		<?php foreach($manager->getInfo("agendarapida", $id) as $client_info): ?>
		

		<div class="col-md-4">
			Nome: <i class="fa fa-user"></i>
			<input class="form-control"  type="text" name="Nome" required autofocus value="<?=$client_info['Nome']?>"><br>
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
			Vendedor: <i class="fa fa-tags "></i>
			<div class="">
                      <!-- <input id="new-event"name="Vendedor" type="text"  class="form-control" placeholder="Vendedor" required> -->
                     
                      <select class="form-control" name="Vendedor" id="" >
						
						<option onselectstart=”return false” style="background-color: olivedrab; color: white;" value="<?=$client_info['Vendedor']?>"> <b style="background-color: red;"> <?=$client_info['Vendedor']?>  </b>                               </option>
                      <!-- crie uma condição aonde se existir vendedor ele mostra o mesmo caso contrario mostra a mensagem vendedornão selecionado -->							                                       </option>
					  <option disabled value="*">      							 					            </option>
					  <option value="*">      							  Não há Vendedor                      </option>	
                       <option value="Alan Carlos Vieira de Jesus">       Alan Carlos Vieira de Jesus           </option>
                       <option value="Bruna Santos ">                     Bruna Santos                          </option>
                       <option value="Claudinei Macedo Coelho">           Claudinei Macedo Coelho               </option>
                       <option value="Delcio Gomes da Silva">             Delcio Gomes da Silva                 </option>
                       <option value="Eduardo Kovalhuk de Macedo">        Eduardo Kovalhuk de Macedo            </option>
                       <option value="Guimaraes de Almeida Gonçalves">    Guimaraes de Almeida Gonçalves        </option>
                       <option value="Guilherme Sampaio Haut">            Guilherme Sampaio Haut                </option>
                       <option value="Jonathan Paulo Moura ">             Jonathan Paulo Moura                  </option>
					   <option value="Joao vitor ferreira marsom ">       João vitor ferreira marsom            </option>
                       <option value="Marcos	Eugenio de Oliveira">     Marcos Eugenio de Oliveira            </option>
                       <option value="Paulo Braido">                      Paulo Braido                          </option>
                       <option value="Luiz Pereira Rezende">              Luiz Pereira Rezende                  </option>
                       <option value="Ronaldo Adriano Oliveira Coutinho"> Ronaldo Adriano Oliveira Coutinho     </option>
                       <option value="Saulo Xavier de Oliveira Silva">    Saulo Xavier de Oliveira Silva        </option>
                       <option value="Vilmar Silva do Carmo">             Vilmar Silva do Carmo                 </option>
					   

                       </select>
                    
                    
                    </div>

		</div>

		<div class="col-md-2">
			chassi: <i class="fa fa-tags "></i>
			<input   class="form-control" type="text" id="Chassi" name="Chassi" required value="<?=$client_info['Chassi']?>"><br>
		</div>
	
		<div class="col-md-2" >
	 É EMPLACADA ?:<b style="color: red;"> <?=$client_info['Emplacada']?></b>   
                    <select class="form-control" name="Emplacada" id="">

                       <option name="Emplacada" <?=$client_info['Emplacada']?>value=" SIM">SIM </option>
                       <option name="Emplacada"<?=$client_info['Emplacada']?> value="NAO"> NÂO</option>

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

			<div class="col-md-12">
				<input type="text" hidden  name="Status_cor" value="#FFA500" class="form-control" >
			</div>

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