
<?php 

include_once("model/Conexao.class.php");
include_once("dependencias.php");

if(isset($_POST['email2']) and $_POST['email2'] != ''){
    $email_rec = $_POST['email2'];
}
 ?>

<head>
    <title></title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   
    

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/login.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="icon" href="images/favicon-nova.ico" type="image/x-icon">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>


<!------ Include the above in your HEAD tag ---------->

<!-- login start -->


<div class="container">

    <section class="login-blockcol-md-12">
        <div class="container">
            <div class="row">

                <div class=" col-md-12 login-sec" style="margin-top:9% ;"><br>
                       
                        <div class="card text-left">
                            <br>
                         <center>  <img src="dist/img/asdasd.jpg" width="300px" alt=""></center><br><br>
                         <h6 class="text-center mb-12">Entre no Sistema</h6>
                    
                        <div class="card-body ">
                            
                    
                    
                    <form class="login100-form validate-form" method="post" action="pages/autenticar.php">
                        <div class="wrap-input100 validate-input">
                            <span class="label-input100">Usuário</span><br>
                            <input class="input100 col-md-12 form-control" type="text" name="username" id="username"
                            placeholder="Insira seu Email" required>
                            <span class="focus-input100"></span>
                        </div>
                            <br>
                        <div class="wrap-input100 validate-input">
                            <span class="label-input100">Senha</span><br>
                            <input class="input100 col-md-12 form-control" type="password" id="pass" name="pass" placeholder="Insira sua Senha" required>
                            <span class="focus-input100 password"></span>
                        </div>
                            <br>


                        <div class="">
                            <div class="">
                                <button class="btn btn-primary col-md-12">
                                    Entrar
                                </button>
                            </div>
                        </div>


                    </form>

                    <!-- <div class="copy-text">Não tem Cadastro?

                        <a class="text-primary" href="" data-toggle="modal" data-target="#modal-login">Cadastre-se</a>
                    </div> -->

                    <!-- <div class="text-center p-t-8 p-b-31">
                        <a class="text-danger" href="" data-toggle="modal" data-target="#modal-rec">
                           <small> Recuperar Senha? </small>
                       </a>
                   </div> -->


               </div>
               

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <p class="d-flex justify-content-center" style="font-size: 10px; "> Desenvolvido por By-<a href="https://www.linkedin.com/in/wanderson-de-felipe-oliveira-43475115a/">  Wanderson Felipe de Oliveira </a></p>
</section>

<!-- login end -->

</div>
                        </div>
                        </div>
                

</body>






<div class="modal fade" id="modal-login" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cadastre-se</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <form method="post">

    

        <div class="form-group">
            <label class="text-dark" for="exampleInputEmail1">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome e Sobrenome" required>

        </div>

        <div class="row">
         <div class="col-md-6">
             <div class="form-group">
                <label class="text-dark" for="exampleInputEmail1">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required>

            </div>
        </div>

        <div class="col-md-6">
         <div class="form-group">
            <label class="text-dark" for="exampleInputEmail1">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required>

        </div>
    </div>
</div>



<div class="form-group">
    <label class="text-dark" for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required value="<?php echo @$email_rec ?>">

</div>




<div class="form-group">
    <label class="text-dark" for="exampleInputEmail1">Senha</label>
    <input type="text" class="form-control" id="senha" name="senha" placeholder="Senha" required>

</div>


<div align="center" class="" id="mensagem">
</div>


</div>
<div class="modal-footer">
   <button type="button" id="btn-fechar" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
   <button name="btn-cadastro" id="btn-cadastro" class="btn btn-info">Cadastrar</button>

   </form>

</div>
</div>
</div>
</div>







<div class="modal fade" id="modal-rec" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Recuperar Senha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <form method="post">
       


<div class="form-group">
    <label class="text-dark" for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="email-recuperar" name="email-recuperar" placeholder="Email" required>

</div>


</div>


</div>
<div class="modal-footer">
   <button type="button" id="btn-fechar" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
   <button name="btn-rec" id="btn-rec" class="btn btn-info">Recuperar</button>

   </form>

</div>
</div>
</div>

</div>





<?php 

if(isset($_POST['email2']) and $_POST['email2'] != ''){

 ?>

 <script> $("#modal-login").modal("show"); </script> 

<?php } ?>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<script src="js/mascaras.js"></script>




<!--AJAX PARA INSERÇÃO DOS DADOS -->
<script type="text/javascript">
    $(document).ready(function(){
        
        $('#btn-cadastro').click(function(event){
            event.preventDefault();
            
            $.ajax({
                url: "cadastrar-usuario.php",
                method: "post",
                data: $('form').serialize(),
                dataType: "text",
                success: function(mensagem){

                    $('#mensagem').removeClass()

                    if(mensagem == 'Cadastrado com Sucesso!!'){
                        
                        $('#mensagem').addClass('text-success')

                        document.getElementById('username').value = document.getElementById('email').value;

                        document.getElementById('pass').value = document.getElementById('senha').value;

                        $('#nome').val('')
                        $('#telefone').val('')
                        $('#cpf').val('')
                        $('#email').val('')
                        $('#senha').val('')

                        //$('#btn-fechar').click();
                        //location.reload();



            
           

                    }else{
                        
                        $('#mensagem').addClass('text-danger')
                    }
                    
                    $('#mensagem').text(mensagem)

                },
                
            })
        })
    })
</script>





<!--AJAX PARA RECUPERAR A SENHA -->
<script type="text/javascript">
    $(document).ready(function(){
        
        $('#btn-rec').click(function(event){
            event.preventDefault();
            
            $.ajax({
                url: "recuperar.php",
                method: "post",
                data: $('form').serialize(),
                dataType: "text",
                success: function(mensagem){

                    $('#mensagem2').removeClass()

                    if(mensagem == 'Senha enviada para o seu Email!'){
                        
                        $('#mensagem2').addClass('text-success')

                        document.getElementById('username').value = document.getElementById('email-recuperar').value;

                       
                        $('#email-recuperar').val('')
                        

                        //$('#btn-fechar').click();
                        //location.reload();



                    }else{
                        
                        $('#mensagem2').addClass('text-danger')
                    }
                    
                    $('#mensagem2').text(mensagem)

                },
                
            })
        })
    })
</script>