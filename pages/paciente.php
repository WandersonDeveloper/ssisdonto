<!-- modal para cadastrar novo cliente  -->
<div class="col-md-12  ">
  <button class="btn btn-success btn-md float-right" data-toggle="modal" data-target="#exampleModal">
    cadastrar cliente <i class="fa fa-user-plus"></i>
  </button> <br>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel"><i class="fa fa-user-plus"></i>  Novo Cliente 

      </div>
      <!--formulario modal para cadastrar novo cliente   -->
      <form method="POST" action="">


<!-- Inicio do formulario -->
<form method="post" action="">
    
  <input hidden name="ibge" type="text" id="ibge" size="8" /></label><br />
</form>


        <div class="modal-body">
          <div class="container">
            <div class="form-row">

              <div class="col-md-8">
                Nome: <i class="fa fa-user"></i>
                <input class="form-control" type="text" name="name" required autofocus><br>
              </div>

              <div class="col-md-4" style="margin-top:0;">
                Sexo <i class="fa fa-venus-mars"></i>
                <select class="custom-select ">
                  <option value="">Selecione</option>
                  <option value="Masculino">Masculino</option>
                  <option value="Feminino">Feminino</option>
                </select>
              </div>

              <div class="col-md-12">
                E-mail: <i class="fa fa-envelope"></i>
                <input class="form-control" type="email" name="email" required><br>
              </div>

              <div class="col-md-6">
                CPF: <i class="fa fa-address-card"></i>
                <input id="cpf" class="form-control" type="text" name="cpf" required ><br>

              </div>
              <div class="col-md-6">
                RG: <i class="fa fa-address-book"></i>
                <input class="form-control" type="text" name="RG" required><br>
              </div>

              <div class="col-md-5">
                Dt-Nasci: <i class="fa fa-calendar"></i>
                <input class="form-control" type="date" name="date" required><br>
              </div>

              <div class="col-md-7">
                Telefone: <i class="fab fa-whatsapp"></i>
                <input class="form-control" type="text" name="tel" required id="phone"><br>
              </div>
              <div class="col-md-6">
                Naturalidade: <i class="fa fa-map"></i>
                <input class="form-control" type="text" name="Naturalidade" required><br>
              </div>
              <div class="col-md-6">
                Nacionalidade: <i class="fa fa-map-marker"></i>
                <input class="form-control" type="text" name="Nacionalidade" required><br>
              </div>

              <div class="col-md-8">
                CEP: <i class="fa fa-map"></i>
                <input id="cep" class="form-control" value="" type="text" name="cep" required  onblur="pesquisacep(this.value);"><br>
              </div>
              <div class="col-md-4">
                UF: <i class="fa fa-map"></i>
                <input name="uf" type="text" id="uf" size="2" class="form-control" required ><br>
              </div>

              <div class="col-md-6">
                Bairro: <i class="fa fa-map"></i>
                <input name="bairro" type="text" id="bairro" size="40" class="form-control" required><br>
              </div>
              <div class="col-md-6">
                Cidade: <i class="fa fa-map"></i>
                <input name="cidade" type="text" id="cidade" size="40" class="form-control" required><br>
              </div>

              <div class="col-md-10">
                Endereço: <i class="fa fa-map"></i>
                <input class="form-control"  name="rua" type="text" id="rua" size="60"  required><br>
              </div>
              <div class="col-md-2">
                Nº: <i class="fa fa-map-marker"></i>
                <input id="numero" class="form-control" type="text" name="numero" required><br>
              </div>

              <div class="col-md-12">
                Profissão: <i class="fa fa-briefcase"></i>
                <input class="form-control" type="text" name="proficao" required><br>
              </div>
              <div class="col-md-12">
                Nome Empresa : <i class="fa fa-building"></i>
                <input class="form-control" type="text" name="nempresa" required><br>
              </div>

             
            </div>


          </div>
        </div>
        <!-- btn modal para salvar e cancelar  -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

          <button type="button" class="btn btn-primary">Salvar</button>

        </div>
    </div>
  </div>
</div>

</form>
<br><br>

<form  action="" method="post">


  <div class="  form-row">

        <div class="col-sm-10"> 
          <input  style="width:100%;height: 75px; font-size: 25px;"  class="form-control" type="search"  name="cpf" placeholder="Procurar ..." autofocus required> 

        </div>
        <div class="col-sm-2">

        <button style="width:100%; height: 75px;" type="button" class="align-itemsalign-content-md-center btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
<br><br>
  </div>

<div class="card col-md-12">
  <br>

  
<table id="buscacliente" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011-04-25</td>
            <td>$320,800</td>
        </tr>
        <tr>
            <td>Garrett Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>63</td>
            <td>2011-07-25</td>
            <td>$170,750</td>
        </tr>
    </tbody>
</table>

</div>

</form>