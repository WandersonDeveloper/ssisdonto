<?php @session_start();
// Verifica se a sessão específica existe e se o usuário não está logado
if (!isset($_SESSION['session_start']) && !isset($_SESSION['nivel_usuario'])) {
    // Redireciona o usuário para a página de login
	echo "<script language='javascript'>window.location='../index.php'; </script>";

    exit(); // Encerra o processamento
}

include_once 'dependencias.php';

if ($_SESSION['nivel_usuario'] != 'Admin' && $_SESSION['nivel_usuario'] != 'CNH' &&  $_SESSION['nivel_usuario'] != 'Seguros'  )  {
   
    echo "<script language='javascript'>window.location='index.php'; </script>";
}





//VERIFICAR SE EXISTE UM USUÁRIO ADMINISTRADOR, CASO NÃO EXISTA, CRIAR.
$senha = '123';
$res_usuarios = $conn->query("SELECT * from user where Nivel = 'Admin'");
$dados_usuarios = $res_usuarios->fetchAll(PDO::FETCH_ASSOC);
$total_usuarios = count($dados_usuarios);

if($total_usuarios == 0){
  $res_insert = $conn->query("INSERT INTO `user`(`id`, `Nome`, `Email`, `Cpf`, `Senha`, `Dicasenha`, `Nivel`, `Usuario`) 
  VALUES ('','Administrador','admin@admin.com','00000000000','123456','padrao','Admin','admin')");
}


//ESTRUTURA DO MENU
$item1 = 'pages/calendar';
$item2 = 'pages/lista_de_espera';
$item3 = 'pages/Montagem';


//CLASSE PARA OS ITENS ATIVOS
if(@$_GET['acao'] == $item1){
          $item1ativo = 'active';
        }else if(@$_GET['acao'] == $item2){
          $item2ativo = 'active';
        }else if(@$_GET['acao'] == $item3){
          $item3ativo = 'active';
        }

        
 ?>

</head>
<?php if($_SESSION["nivel_usuario"] == 'CNH'  ){
                    
		$oculta_btn = "hidden";
           $oculta_btn2 = "";                 

         }  if($_SESSION["nivel_usuario"] == 'Seguros'  ){
             $oculta_btn = "";
                $oculta_btn2 = "";                                                      
        }if($_SESSION["nivel_usuario"] == 'Admin' ){
                $oculta_btn = "";
                $oculta_btn2 = "";
                                
		}if($_SESSION["nivel_usuario"] == 'Vendedor' ){
                $oculta_btn = "";
                $oculta_btn2 = "hidden";
            }					
						
?>					

                            
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li <?php echo $oculta_btn2  ?>class="nav-item">
                    <a <?php echo $oculta_btn2  ?> class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li <?php echo $oculta_btn2  ?> class="nav-item  d-none d-sm-inline-block">
                    <a href="principal.php?acao=<?php echo $item1 ?>" class="nav-link <?php echo $item1ativo ?>">Agenda</a>
                </li>
                <li <?php echo $oculta_btn2  ?> class="nav-item d-none d-sm-inline-block">
                    <a <?php echo $oculta_btn2  ?> href="principal.php?acao=<?php echo $item2 ?>"
                        class="nav-link <?php echo $item2ativo ?>">Lista de espera</a>
                </li>

                

                <li   class="nav-item d-none d-sm-inline-block" <?php echo" $oculta_btn "; ?>>
                    <a <?php echo" $oculta_btn $ "; ?>  href="principal.php?acao=<?php echo $item3 ?>"
                        class="nav-link <?php echo $item3ativo ?>">Motos para Ativar</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- Notifications Dropdown Menu -->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-6">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="dist/img/vista-lateral-da-motocicletabranca.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: 0.8">
                <span class="brand-text font-weight-light">Agenda Motos</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                       <H6 style="color: white;">Seja bem vindoª </H6>
                    
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $_SESSION['nome_usuario'] ?> </a>   
                        <a href="view/logout.php"  ><img src="./dist/img/ligar.png" style="width: 12px;height: 12px; " alt=""> Sair</a>
                    </div>
                </div>
                </div>

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <iconify-icon class="align-content-center" icon="bi:calendar-date" style="color: white; "
                            width="32" height="32" ></iconify-icon>
                    </div>

                    <a class="nav-item d-sm-inline-block " >
                        <a href="principal.php?acao=<?php echo $item1 ?>"
                            class="nav-link <?php echo $item1ativo ?>">Agendar</a>
                        </a>


                </div>

                <div <?php echo $oculta_btn2 ?> class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <iconify-icon <?php echo $oculta_btn2  ?> class="align-content-center" icon="bi:person-bounding-box" style="color: white;  margin-top: 5px;"
                            width="32" height="32"></iconify-icon>
                    </div>

                    <a <?php echo $oculta_btn2  ?> class="nav-item  d-sm-inline-block">
                        <a <?php echo $oculta_btn2  ?> href="principal.php?acao=<?php echo $item2 ?>"
                            class="nav-link <?php echo $item2ativo ?>">Lista de espera</a>
                        </a>


                </div>
                <div  class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div <?php echo"   $oculta_btn "; ?> class="image">
                        <iconify-icon icon="healthicons:finance-dept-outline" style="color: white; margin-top: 5px;" width="32"
                            height="32"></iconify-icon>

                    </div>

                    <a  <?php echo"   $oculta_btn "; ?> class="nav-item  d-sm-inline-block">
                        <a <?php echo"  $oculta_btn "; ?> href="principal.php?acao=<?php echo $item3 ?>"
                            class="nav-link <?php  echo $item3ativo ?>">Motos para Ativar</a>
                        </a>


                </div>

            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- inclui a agenda no painel  -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">

                <div class="container-fluid">

                </div><!-- /.container-fluid -->

                <!-- /.Chamadas dos Includes das páginas -->
                <?php 
        if(@$_GET['acao'] == $item1){
          include_once($item1.'.php');
        }else if(@$_GET['acao'] == $item2){
          include_once($item2.'.php');
        }else if(@$_GET['acao'] == $item3){
          include_once($item3 .'.php');
        }


        else{
          include_once($item1.'.php');
        }
        ?>

            </div>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="plugins/moment/moment.min.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <!-- para icones  -->
        <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

        <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

        <script type="text/javascript">
        $(document).ready(function() {
            $("#cpf").mask("000.000.000-00");
            $("#buscacpf").mask("000.000.000-00");
            $("#phone").mask("(00) 0000-0000");
        });
        </script>


        <!-- Adicionando Javascript -->
        <script>
        function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value = ("");
            document.getElementById('bairro').value = ("");
            document.getElementById('cidade').value = ("");
            document.getElementById('uf').value = ("");
            document.getElementById('ibge').value = ("");
        }

        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.
                document.getElementById('rua').value = (conteudo.logradouro);
                document.getElementById('bairro').value = (conteudo.bairro);
                document.getElementById('cidade').value = (conteudo.localidade);
                document.getElementById('uf').value = (conteudo.uf);
                document.getElementById('ibge').value = (conteudo.ibge);
            } //end if.
            else {
                //CEP não Encontrado.
                limpa_formulário_cep();
                alert("CEP não encontrado.");
            }
        }

        function pesquisacep(valor) {

            //Nova variável "cep" somente com dígitos.
            var cep = valor.replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    document.getElementById('rua').value = "...";
                    document.getElementById('bairro').value = "...";
                    document.getElementById('cidade').value = "...";
                    document.getElementById('uf').value = "...";
                    document.getElementById('ibge').value = "...";

                    //Cria um elemento javascript.
                    var script = document.createElement('script');

                    //Sincroniza com o callback.
                    script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                    //Insere script no documento e carrega o conteúdo.
                    document.body.appendChild(script);

                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        };
        </script>

</body>

</html>