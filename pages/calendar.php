

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
              <h3 class="card-title">Agendar Paciente</h3>
            </div>
            <div  class="card-body">
              <div class="btn-group" style="width: 100%; ">

              </div>

            <form method="POST" action="./controller/insert_client.php">
                  <!-- campo para add paciente no dia -->
                  <div class="col-md-12">
                    <input id="new-event"name="Nome" type="text"  class="form-control" placeholder="Nome" required>
                  </div>
                  <br>
                  <div class="col-md-12">
                    <input id="cpf" name="Cpf" type="text"  class="form-control" placeholder="CPF" required>
                  </div>
                  <br>
                  <div class="col-md-12">
                    <input id="phone" name="Telefone" type="tel" class="form-control" placeholder="Telefone" required>
                  </div>
                  <br>
                  <div class="col-md-12">
                    <input id="new-event" name="start" type="date" class="form-control" placeholder="data inicio"required>
                  </div>
                  <br>

                  <div class="col-md-12">
                    <input id="new-event" name="End" type="time" class="form-control" placeholder=""required>
                  </div>
                  <br>



                      <div class="col-md-12" >
                    <select class="form-control" name="Info" id="">

                       <option value="Novo cliente">Novo cliente</option>
                       <option value="Orçamento">Orçamento</option>
                       <option value="Remarcação">Remarcação</option>

                       </select>
                    </div>
                    <br>

                  <br>

                    <div class="btnbtn-primary col-md-12">
                    <button class="btn btn-primary col-md-12">Add</button>
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
        <link href='./css/core/main.min.css' rel='stylesheet' />
        <link href='./css/daygrid/main.min.css' rel='stylesheet' />
        <script src='./js/core/main.min.js'></script>
        <script src='./js/interaction/main.min.js'></script>
        <script src='./js/daygrid/main.min.js'></script>
        <script src='./js/core/locales/pt-br.js'></script>
        <script>

            document.addEventListener('DOMContentLoaded', function () {
                var calendarEl = document.getElementById('calendar');

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    locale: 'pt-br',
                    plugins: ['interaction', 'dayGrid'],
                    //defaultDate: '2019-04-12',
                    editable: false,
                    eventClick: function(events) {
                      
                      const swalWithBootstrapButtons = Swal.mixin({
                              customClass: {
                                confirmButton: 'btn btn-warning ml-5',
                                cancelButton: 'btn btn-danger '
                              },
                              buttonsStyling: false
                            })

                            swalWithBootstrapButtons.fire({
                              title: 'Paciente: ' + events.event.title,
                              text: "Deseja editar os dados deste usuário",
                              icon: 'warning',
                              showCancelButton: true,
                              confirmButtonText: 'Sim, edidar!',
                              cancelButtonText: 'Não',
                              reverseButtons: true
                            }).then((result) => {
                              if (result.isConfirmed) {
                                swalWithBootstrapButtons.fire(
                                  'Você tem certeza?',
                                  'Deseja alterar os dados do seu paciente? Isso afetará sua agenda!',
                                  'question'
                                )
                              } else if (
                                /* Read more about handling dismissals below */
                                result.dismiss === Swal.DismissReason.cancel
                              ) {
                              
                                  
                                
                              }
                            })      

                           
                          },
                    events: './model/list_eventos.php',
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
