
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
		<div class="col-md-12">
                    <!-- <input id="Modelo" name="Modelo" type="text"  class="form-control" placeholder="Modelo" required> -->
                      
                    <select class="form-control" name="Modelo" id="" >
					<option onselectstart=”return false” style="background-color: olivedrab; color: white;" value="<?=$client_info['Modelo']?>"> <b style="background-color: red;"> <?=$client_info['Modelo']?>  </b>   </option>
					<option disabled value="*">      							 					            </option>
                      <option type="text"name="Modelo" value="CG 160 Start ">                           CG 160 Start                                     </option>
                      <option type="text"name="Modelo" value="CG 160 Fan   ">                           CG 160 Fan                                       </option>
                      <option type="text"name="Modelo" value="CG 160 Titan ">                           CG 160 Titan                                     </option>
                      <option type="text"name="Modelo" value="CG 160 Cargo">                            CG 160 Cargo                                     </option>
                      <option type="text"name="Modelo" value=" Pop 110i">                               Pop 110i                                         </option>
                      <option type="text"name="Modelo"value=" Biz 110i">                               Biz 110i                                          </option>
                      <option type="text"name="Modelo"value="Biz 125">                                 Biz 125                                           </option>
                      <option type="text"name="Modelo"value="  Elite 125 ">                            Elite 125                                         </option>
                      <option type="text"name="Modelo"value="PCX ">                                    PCX                                               </option>
                      <option type="text"name="Modelo"value="Forza 350">                               Forza 350                                         </option>
                      <option type="text"name="Modelo"value="Honda ADV">                               Honda ADV                                         </option>
                      <option type="text"name="Modelo"value="X-ADV">                                   X-ADV                                             </option>
                      <option type="text"name="Modelo"value="CB 300F Twister">                         CB 300F Twister                                   </option>
                      <option type="text"name="Modelo"value="CB 500F">                                 CB 500F                                           </option>
                      <option type="text"name="Modelo"value="CB 650R ">                                CB 650R                                           </option>
                      <option type="text"name="Modelo"value=" CB 1000R">                               CB 1000R                                          </option>
                      <option type="text"name="Modelo"value=" CB 1000R Black Edition">                 CB 1000R Black Edition                            </option>
                      <option type="text"name="Modelo"value="NXR 160 Bros ESDD  ">                     NXR 160 Bros ESDD                                 </option>
                      <option type="text"name="Modelo"value=" XRE 190 ">                               XRE 190                                           </option>
                      <option type="text"name="Modelo"value="XRE 300">                                 XRE 300                                           </option>
                      <option type="text"name="Modelo"value="CB 500X ">                                CB 500X                                           </option>
                      <option type="text"name="Modelo"value="NC 750X">                                 NC 750X                                           </option>
                      <option type="text"name="Modelo"value="CRF 1100L Africa Twin ">                  CRF 1100L Africa Twin                             </option>
                      <option type="text"name="Modelo"value="CRF 1100L Africa Twin Adventure Sports">  CRF 1100L Africa Twin Adventure Sports            </option>
                      <option type="text"name="Modelo"value="X-ADV">                                   X-ADV                                              </option>
                      <option type="text"name="Modelo"value="CRF 250F">                                CRF 250F                                           </option>
                      <option type="text"name="Modelo"value="Linha CRF 250">                           Linha CRF 250                                      </option>
                      <option type="text"name="Modelo"value="Linha CRF 450">                           Linha CRF 450                                      </option>
                      <option type="text"name="Modelo"value="TRX 420 FourTrax">                        TRX 420 FourTrax                                   </option>
                      <option type="text"name="Modelo"value="CBR 650R">                                CBR 650R                                           </option>
                      <option type="text"name="Modelo"value="CBR 1000RR-R FIREBLADE SP ">              CBR 1000RR-R FIREBLADE SP                          </option>


                      </select>

                  </div>
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

