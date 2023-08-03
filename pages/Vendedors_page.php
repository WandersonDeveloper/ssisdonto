<?php
include_once "../dependencias.php";
@session_start();
// Verifica se a sessão específica existe e se o usuário não está logado
if (!isset($_SESSION['session_start']) && !isset($_SESSION['nivel_usuario'])) {
    // Redireciona o usuário para a página de login
	echo "<script language='javascript'>window.location='../index.php'; </script>";

    exit(); // Encerra o processamento
}

// verifica se o usuario logado tem acesso a pagina MOntagem se não admin ou usuario montagem não acessa Pagina
if($_SESSION['nivel_usuario']  != 'Vendedor' && $_SESSION['nivel_usuario'] != 'Admin' && $_SESSION['nivel_usuario'] ){
    echo "<script language='javascript'>window.location='../index.php'; </script>";
}


?>

<nav class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark"">
    <b style="color:white;">
        <h6>Seja bem vindoª <?php echo $_SESSION['nome_usuario']; ?></h6>
    </b>
    <div class="container-fluid">
        <a href="../view/logout.php" class="navbar-brand">Sair</a>
    </div>
</nav>
<div style="margin-top:10px;" class="container-fluid">
   <div class="card text-left ">
	<center> <h2>Entrega de motos  <img style="margin-left: 5px; width: 35px; height: 35px;" src="../dist/img/vista-lateral-da-motocicleta.png" alt=""></h2></center>
 
        <div class="card-body col-md-12">
			
            <div class="table-responsive">
                <table id="lista" class="table table-striped">
                    <thead class="thead">
                        <tr>
                            <th>Data e Hora da entrega</th>
                            
                            <th>Vendedor</th>
                            <th>Nome</th>
                            <th>Modelo</th>
							<th>Chassi</th>
							<th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

					<!-- Comparação de data para exibir somente o dia atual -->
                        <?php
                        foreach ($manager->listClient("agendarapida") as $client) {
							
                            $a = strtotime($client['start']);
                            $b = date('d/m/Y ', $a);
							
                            $currentDate = date('d/m/Y ');
								if (date('d/m/Y', $a) == date('d/m/Y')) {
									echo "<tr>";
									echo "<th scope='row'><b>" . $b . $h= date(' H:i:s ',$a) . "  </b></th>";
                                    echo "<td> " . $client['Vendedor'] ."</td>";
									echo "<td> " . $client['Nome'] ."</td>";
									echo "<td> " . $client['Modelo'] ."</td>";
									echo "<td> " . $client['Chassi'] ."</td>";
									
									// comparação de Status 
	
									if($client['status_entrega_final'] == "Foiparaativacao"){

										echo "<td>  <h6 style='color: rgb(255, 2, 2);' > Em ativação aguarde... </h6></td>";
									}
									if($client['status_entrega_final'] == "Ativada"){

										echo "<td>  <h6 style='color: rgb(255, 129, 2);' > Aguardando Agendamento com cliente... </h6></td>";
									}
									if($client['status_entrega_final'] == "OK"){

										echo "<td>  <h6 style='color: rgb(8, 143, 1);' > Aguardando Entrega... </h6></td>";
									}
								
									

									echo "</tr>";
								}
							                        }
                        ?>
						
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>