<?php @session_start();
// Verifica se a sessão específica existe e se o usuário não está logado
if (!isset($_SESSION['session_start']) && !isset($_SESSION['nivel_usuario'])) {
    // Redireciona o usuário para a página de login
	echo "<script language='javascript'>window.location='../index.php'; </script>";

    exit(); // Encerra o processamento
}

include_once 'dependencias.php';

if ($_SESSION['nivel_usuario'] != 'Admin' && $_SESSION['nivel_usuario'] != 'CNH' &&  $_SESSION['nivel_usuario'] != 'Seguros'  &&  $_SESSION['nivel_usuario'] != 'Montador' )  {
   
    echo "<script language='javascript'>window.location='index.php'; </script>";
}

//VERIFICAR SE EXISTE UM USUÁRIO ADMINISTRADOR, CASO NÃO EXISTA, CRIAR.
$senha = '123';
$res_usuarios = $conn->query("SELECT * from user where Nivel = 'Nontador'");
$dados_usuarios = $res_usuarios->fetchAll(PDO::FETCH_ASSOC);
$total_usuarios = count($dados_usuarios);

if($total_usuarios == 0){
  $res_insert = $conn->query("INSERT INTO `user`(`id`, `Nome`, `Email`, `Cpf`, `Senha`, `Dicasenha`, `Nivel`, `Usuario`) 
  VALUES ('','Montador','montador@montador.com','00000000000','123456','padrao','Montador','Montador')");
}

//ESTRUTURA DO MENU
$item1 = 'pages/lista_Espera_Montagem_por_cidade/Ariquemes';

$pgAriquemesmontagem1 = 'pages/lista_Espera_Montagem_por_cidade/Ariquemes';
$pgAriquemesmontagem2 = 'pages/lista_Espera_Montagem_por_cidade/Cujubim';
$pgAriquemesmontagem3 = 'pages/lista_Espera_Montagem_por_cidade/MonteNegro';

//CLASSE PARA OS ITENS ATIVOS
if(@$_GET['acao'] == $item1){
          $item1ativo = 'active';

          }else if(@$_GET['acao'] == $pgAriquemesmontagem1){
            $item3ativo = 'active';
          }else if(@$_GET['acao'] == $pgAriquemesmontagem2){
            $item3ativo = 'active';
          }else if(@$_GET['acao'] == $pgAriquemesmontagem3){
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

            }if($_SESSION["nivel_usuario"] == 'Montador' ){
                $oculta_btn = "";
                $oculta_btn2 = "hidden";}					
						
?>					

                            
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li <?php echo $oculta_btn2  ?>class="nav-item">
                    <a  class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            
                <li   class="nav-item d-none d-sm-inline-block" <?php echo" $oculta_btn "; ?>>
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"  role="button" aria-expanded="false"  href="painelmontagem.php?acao=<?php echo $item3 ?>" <?php echo @$item3ativo ?> >Motos para Ativar</a>

                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="painelmontagem.php?acao=<?php echo $pgAriquemesmontagem1 ?>">Ariquemes</a></li>
                        <li><a class="dropdown-item" href="painelmontagem.php?acao=<?php echo $pgAriquemesmontagem2 ?>">Cujubim</a></li>
                        <li><a class="dropdown-item" href="painelmontagem.php?acao=<?php echo $pgAriquemesmontagem3 ?>">Monte Negro</a></li>
                        
                        </ul>
                    </li>
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
                <div  class="user-panel mt-4 pb-4 mb-4 d-flex">
                    <div <?php echo"   $oculta_btn "; ?> class="image">
                        <img src="dist/img/avatar5.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">

                    </div>
                    <br>
                    <a  style="margin-top:24%;" href="view/logout.php"  ><img src="./dist/img/ligar.png" style="width: 12px;height: 12px; " alt=""> Sair</a>
                    <a   class="nav-item  d-sm-inline-block">
                       <p> <H6 style="color: white;">Seja bem vindoª  <br><?php echo $_SESSION['nome_usuario'] ?> </H6 ></p>

                 </div>
                    
              

               
                <div  class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div <?php echo"   $oculta_btn "; ?> class="image">
                        <iconify-icon icon="healthicons:finance-dept-outline" style="color: white; margin-top: 5px;" width="32"
                            height="32"></iconify-icon>

                    </div>

                    <a   class="nav-item  d-sm-inline-block">
                        <a <?php echo"  $oculta_btn "; ?> href="painelmontagem.php?acao=<?php echo $item3 ?>"
                            class="nav-link <?php  echo $item3ativo ?>">Motos para Ativar Geral</a>
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
        }else if(@$_GET['acao'] == $pgAriquemesmontagem1){
            include_once($pgAriquemesmontagem1 .'.php');
          }else if(@$_GET['acao'] == $pgAriquemesmontagem2){
            include_once($pgAriquemesmontagem2 .'.php');
          }else if(@$_GET['acao'] == $pgAriquemesmontagem3){
            include_once($pgAriquemesmontagem3 .'.php');
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



</body>

</html>

<script>
        // Função para atualizar a página a cada 5 minutos (300.000 milissegundos)
        setTimeout(function() {
            location.reload();
        }, 300000);
    </script>



