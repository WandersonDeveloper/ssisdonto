

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!--Inicio do contenner-->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="sticky-top mb-3">
          <div class="card-body">
            <div id="external-events">
            </div>
          </div>
          <!-- Inicio do cadastro rapido do paciente  -->
          <div style="margin-top: -35px; width: 100%;" class="card">
            <div class="card-header">
              <h3 class="card-title"> Agendar Motos  | </h3> <img style="margin-left: 5px; width: 25px; height: 25px;" src="dist/img/vista-lateral-da-motocicleta.png" alt="">
            </div>
            <div  class="card-body">
              <div class="btn-group" style="width: 100%; ">

              </div>

            <form method="POST" action="controller/insert_client.php">
                  <!-- campo para add paciente no dia -->
                  <div class="col-md-12">
                    <input id="new-event"name="Nome" type="text"  class="form-control" placeholder="Nome" required>
                  </div>
                  <br>
                  <div class="col-md-12">
                    <!-- <input id="Modelo" name="Modelo" type="text"  class="form-control" placeholder="Modelo" required> -->
                      
                    <select class="form-control" name="Modelo" id="" >
                      <option   disabled selected hidden>  Selecione um modelo                                                                 </option>
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
                  <br>
                  <div class="col-md-12">
                    <input id="Cor" name="Cor" type="text" class="form-control" placeholder="Cor" required>
                  </div>
                  <br>
                  <div class="col-md-12">
                    <input id="Chassi" name="Chassi" type="text" class="form-control" placeholder="Chassi" required>
                  </div>
                  <br>


                  <div class="col-md-12">
                  <h6 > Tem emplacamento ?<h6>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Emplacada" id="01" value="Sim" checked>
                    <label class="form-check-label" for="01">
                     Sim 
                    
                    <input  style="margin-left: 5px;" class="form-check-input" type="radio" name="Emplacada" id="02" value="Não">
                    <label  style="margin-left: 25px;"class="form-check-label" for="02">
                     Não
                    </label>
                </div>
                <br>
              </div>

                <div class="col-md-12">
                    <input id="new-event" name="start" type="datetime-local" class="form-control" placeholder="Dt do Agendamento"required>
                </div>
                <br> 

                  <!-- <div class="col-md-12">
                    <input id="new-event" name="start" type="time" class="form-control" placeholder="Hora do Agendamento"required>
                  </div>
                  <br> -->

              
                  
                  <div class="col-md-12" >
                      <select class="form-control" name="Tipo_venda" id="">

                       <option value="A vista">A vista</option>
                       <option value="Cartão">Cartão</option>
                       <option value="Consórcio">Consórcio</option>
                       <option value="Financiamento">Financiamento</option>

                       </select>
                    </div>
                   
                    <div class="col-md-12" hidden>
                      <input id="new-event"name="Responsavel" type="text"  class="form-control" placeholder="Responsável"  value="<?php echo $_SESSION['nome_usuario'] ?>"  hidden>
                   
                    </div>
                    <br>
                    <div class="col-md-12">
                      <!-- <input id="new-event"name="Vendedor" type="text"  class="form-control" placeholder="Vendedor" required> -->
                     
                      <select class="form-control" name="Vendedor" id="" >
                      <option value="*"> selecione um Vendedor                                                                     </option>
                       <option value="*">  * Não há Vendedor *                                                  </option>
                       <option value="Alan Carlos Vieira de Jesus">       Alan Carlos Vieira de Jesus           </option>
                       <option value="Bruna Santos ">                     Bruna Santos                          </option>
                       <option value="Claudinei Macedo Coelho">           Claudinei Macedo Coelho               </option>
                       <option value="Delcio Gomes da Silva">             Delcio Gomes da Silva                 </option>
                       <option value="Eduardo Kovalhuk de Macedo">        Eduardo Kovalhuk de Macedo            </option>
                       <option value="Guimaraes de Almeida Gonçalves">    Guimaraes de Almeida Gonçalves        </option>
                       <option value="Guilherme Sampaio Haut">            Guilherme Sampaio Haut                </option>
                       <option value="Jonathan Paulo Moura ">             Jonathan Paulo Moura                  </option>
                       <option value="Marcos	Eugenio de Oliveira">       Marcos	Eugenio de Oliveira           </option>
                       <option value="Paulo Braido">                      Paulo Braido                          </option>
                       <option value="Luiz Pereira Rezende">              Luiz Pereira Rezende                  </option>
                       <option value="Ronaldo Adriano Oliveira Coutinho"> Ronaldo Adriano Oliveira Coutinho     </option>
                       <option value="Saulo Xavier de Oliveira Silva">    Saulo Xavier de Oliveira Silva        </option>
                       <option value="Vilmar Silva do Carmo">             Vilmar Silva do Carmo                 </option>

                       </select>
                    
                    
                    </div>
                    <br>
                

                  <br>

                    <div class="btnbtn-primary col-md-12">
                    <button class="btn btn-primary col-md-12">Salvar</button>
                  </div>

                     
              </form>
              <!-- /input-group -->
            </div>
          </div>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card card-primary">
          <div class="card-body p-0">
            <!-- THE CALENDAR -->
            <div id="calendar"></div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
</section>

<!-- /. fim do conetiner  -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' />
        <link href='css/core/main.min.css' rel='stylesheet' />
        <link href='css/daygrid/main.min.css' rel='stylesheet' />
        <script src='js/core/main.min.js'></script>
        <script src='js/interaction/main.min.js'></script>
        <script src='js/daygrid/main.min.js'></script>
        <script src='js/core/locales/pt-br.js'></script>
        
        
        

        <script >
              

                

                document.addEventListener('DOMContentLoaded', function () {

                  
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                           
                    locale: 'pt-br',
                    plugins: ['interaction', 'dayGrid'],
                    editable: false,
                    eventLimit:true,
                    
                    eventClick: function(events) {
                     
                      const swalWithBootstrapButtons = Swal.mixin({
                              customClass: {
                                confirmButton: 'btn btn-warning ml-5',
                                cancelButton: 'btn btn-danger '
                              },
                              buttonsStyling: false
                            })

                            swalWithBootstrapButtons.fire({
                              title: 'Entregar moto para : ' +   events.event.title,
                              text: ' Data e Hora da  Entrega : ' +  events.event.start.toLocaleString().substr(0, 10) +
                             '  ' +  events.event.start.getHours() + ':' + String(events.event.start.getMinutes()).padStart(2, "0") +':'+ String(events.event.start.getSeconds()).padStart(2, "0") +'h',
                             imageUrl: 'dist/img/vista-lateral-da-motocicletapequeno.png'
                                                            
                             
      
                          
                            })
                      },
                    events: 'model/list_eventos.php',
                     extraParams: function () {
                        return {
                            cachebuster: new Date().valueOf()
                        };
                    }
                });

                calendar.render();
            });

        </script>
        <style>

            body {
                margin: 40px 10px;
                padding: 0;
                font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
                font-size: 14px;
              
            }

            #calendar {
           
                max-width: 900px;
                margin: 0 auto;
            }

        </style>
    </head>
    <body>

        <div  id='calendar'>



        </div>

    </body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$("#Chassi").mask("AAAAAAAAAAAAAAAAA");
		
	});
</script>