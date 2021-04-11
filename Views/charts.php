<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADM - Relatórios</title>
    <link rel="icon" type="image/jpg" href="../img/icone.png">

    <!--google charts-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <!-- Custom fonts for this template-->
    <link href="../fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Dashboard.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-virus"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Search Coronavírus</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="Dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Relatórios</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tabela Pesquisa</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">ADM</span>
                                <img class="img-profile rounded-circle"
                                    src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 mb-5">Relatórios</h1>
                    
                    <!-- Content Row -->
                    <div class="row">

                        <div>

                            <!-- relatorios-->
                            <div id="Sangue" style="height: 500px;"></div>
                            <div class= "row" style="height: 500px;">
                                <div id="Sexo" ></div>
                                <div id="TesteCovid" ></div>
                            </div>
                            <div id="Teste" style="height: 500px;"></div>
                            <div id="Sintomas" style="height: 500px;"></div>
                            <div class= "row" style="height: 500px;">
                                <div id="Contraiu" ></div>
                                <div id="Vacina" ></div>
                            </div>
                            <div id="TipoVacina" style="height: 500px;"></div>
                            <div class= "row" style="height: 500px;">
                                <div id="Vacinaantesodepois" ></div>
                                <div id="Fumabebe" ></div>
                            </div>
                            <div id="Doenças" style="height: 500px;"></div>
                            

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Search Coronavírus 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deseja realmente sair?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecione "Logout" para sair.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../jquery/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    


    <!--Script de relatorio sangue-->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Sangue', 'Quantidade'],
          <?php
            include '../Controller/Crud.php';
            $rel = new Crud();

            $dadosAp = $rel->Ap();
            $dadosAn = $rel->An();
            $dadosBp = $rel->Bp();
            $dadosBn = $rel->Bn();
            $dadosABp = $rel->ABp();
            $dadosABn = $rel->ABn();
            $dadosOp = $rel->Op();
            $dadosOn = $rel->On();
            
          ?>
          ["A+", <?php echo $dadosAp ?>],
          ["A-", <?php echo $dadosAn ?>],
          ["B+", <?php echo $dadosBp ?>],
          ["B-", <?php echo $dadosBn ?>],
          ["AB+", <?php echo $dadosABp ?>],
          ["AB-", <?php echo $dadosABn ?>],
          ["O+", <?php echo $dadosOp ?>],
          ["O-", <?php echo $dadosOn ?>],

          
        ]);

        var options = {
          width: 1200,
          legend: { position: '' },
          chart: {
            title: 'Tipo Sanguineo que mais contraiu Covid-19',
            subtitle: 'Relatório dos tipos sanguineos A+, A-, B+, B-, AB+, AB-, O+, O-' },
          axes: {
            x: {
              0: { side: 'top', label: 'Quantidade'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('Sangue'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>

<!--Script de relatorio de Sexo que contraiu mais o Covid-->
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Sexo', 'Quantidade'],
          <?php
            $rel = new Crud();

            $dadosSm = $rel->Masculino();
            $dadosSf = $rel->Feminino();
          ?>
          ['Masculino',  <?php echo $dadosSm ?>],
          ['Feminino',  <?php echo $dadosSf ?>]
        ]);

        var options = {
          width: 612,
          title: 'Sexo que mais contraiu Covid-19'
        };

        var chart = new google.visualization.PieChart(document.getElementById('Sexo'));

        chart.draw(data, options);
      }
    </script>

    <!--Script de relatorio de quantos realizaram o teste do Covid-19-->
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Realizaram ou Não', 'Quantidade'],
          <?php
            $rel = new Crud();

            $dadosTCs = $rel->TesteCovids();
            $dadosTCn= $rel->TesteCovidn();
          ?>
          ['Realizaram o Teste',  <?php echo $dadosTCs ?>],
          ['Não Realizaram o Teste',  <?php echo $dadosTCn ?>]
        ]);

        var options = {
          width: 600,
          title: 'Quantidade de Pessoas que realizaram o Teste do Covid'
        };

        var chart = new google.visualization.PieChart(document.getElementById('TesteCovid'));

        chart.draw(data, options);
      }
    </script>

<!--Script de relatorio de qual teste foi mais utilizado-->
<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Tipo de Teste', 'Quantidade'],
          <?php
            $rel = new Crud();

            $dadosTn = $rel->Testen();
            $dadosTs = $rel->Testes();
            $dadosTa = $rel->Testea();
            $dadosTo = $rel->Testeo();

          ?>
          ["RT-PCR SWAB Nasofaringe", <?php echo $dadosTn ?>],
          ["RT-PCR Saliva", <?php echo $dadosTs ?>],
          ["Antígeno", <?php echo $dadosTa ?>],
          ["Outros", <?php echo $dadosTo ?>],
        ]);

        var options = {
          width: 1200,
          legend: { position: '' },
          chart: {
            title: 'Teste mais realizado para investigação da infecção pelo SARS-CoV-2 (Coronavírus)',
            subtitle: 'Testes para COVID-19' },
          axes: {
            x: {
              0: { side: 'top', label: 'Teste rápido de Covid-19'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('Teste'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>

    <!--Script de relatorio de Primeiro sintomas Apresentados-->
<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Sintoma', 'Quantidade'],
          <?php
            $rel = new Crud();

            $dadosTosse = $rel->Tosse();
            $dadosFebre= $rel->Febre();
            $dadosCoriza = $rel->Coriza();
            $dadosGarganta = $rel->Garganta();
            $dadosRespirar = $rel->respirar();
            $dadosOP= $rel->OlfatoPaladar();
            $dadosDG = $rel->gastrintestinais();
            $dadosCansaco = $rel->Cansaço();
            $dadosAD= $rel->Dispnéia();

          ?>
          ["Tosse", <?php echo $dadosTosse ?>],
          ["Febre", <?php echo $dadosFebre ?>],
          ["Coriza", <?php echo $dadosCoriza?>],
          ["Dor de Garganta", <?php echo $dadosGarganta ?>],
          ["Dificuldade de respirar", <?php echo $dadosRespirar ?>],
          ["Perda de Olfato e Paladar", <?php echo $dadosOP ?>],
          ["Distúrbios gastrintestinais", <?php echo $dadosDG ?>],
          ["Cansaço", <?php echo $dadosCansaco ?>],
          ["Apetite e Dispnéia", <?php echo $dadosAD ?>],
        ]);

        var options = {
          width: 1200,
          legend: { position: '' },
          chart: {
            title: 'Realatório de qual o primeiro Sintoma apresentado na contaminação do Covid-19',
            subtitle: 'Sintoma mais Apresentado' },
          axes: {
            x: {
              0: { side: 'top', label: 'Sintomas'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('Sintomas'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>

      <!--Script de relatorio de quantos vezes contraiu o virus Covid-19-->
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Quantidade de Vezes', 'Quantidade'],
          <?php
            $rel = new Crud();

            $dados1 = $rel->Contraiu1();
            $dados2= $rel->Contraiu2();
            $dadosM2= $rel->ContraiuM2();
          ?>
          ['1 Vez',  <?php echo $dados1 ?>],
          ['2 Vezes',  <?php echo $dados2 ?>],
          ['Mais 2 Vezes',  <?php echo $dadosM2 ?>]
        ]);

        var options = {
          width: 600,
          title: 'Quantidades de vezes que uma pessoa Contraiu o Vírus do Covid-19'
        };

        var chart = new google.visualization.PieChart(document.getElementById('Contraiu'));

        chart.draw(data, options);
      }
    </script>

    <!--Script de relatorio se tomou a vacina-->
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Vacinado', 'Quantidade'],
          <?php
            $rel = new Crud();

            $dadosVSim = $rel->Vacinasim();
            $dadosVNao= $rel->Vacinanao();
          ?>
          ['Sim',  <?php echo $dadosVSim ?>],
          ['Não',  <?php echo $dadosVNao ?>],
        ]);

        var options = {
          width: 612,
          title: 'Quantidade de pessoas que Tomaram a Vacina'
        };

        var chart = new google.visualization.PieChart(document.getElementById('Vacina'));

        chart.draw(data, options);
      }
    </script>

     <!--Script de relatorio de Primeiro sintomas Apresentados-->
<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Sintoma', 'Quantidade'],
          <?php
            $rel = new Crud();

            $dadosCvac = $rel->CoronaVac();
            $dadosOford= $rel->Oxford();
            $dadosPfizer = $rel->Pfizer();
            $dadosModerna = $rel->Moderna();
            $dadosSV = $rel->Sputinik();

          ?>
          ["CoronaVac", <?php echo $dadosCvac ?>],
          ["Oxford", <?php echo $dadosOford ?>],
          ["Pfizer", <?php echo $dadosPfizer ?>],
          ["Moderna", <?php echo $dadosModerna ?>],
          ["Sputinik V", <?php echo $dadosSV ?>],
        ]);

        var options = {
          width: 1200,
          legend: { position: '' },
          chart: {
            title: 'Realatório da Vacina contra o Covid-19 mais aplicada',
            subtitle: 'Vacinas aplicadas no Brasil' },
          axes: {
            x: {
              0: { side: 'top', label: 'Vacinas'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('TipoVacina'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>

    <!--Script de relatorio que contraiu o virus antes ou depois de tomar a vacina-->
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Contraiu o vírus', 'Quantidade'],
          <?php
            $rel = new Crud();

            $dadosCantes = $rel->ContraiuAntes();
            $dadosCdepois= $rel->ContraiuDepois();
          ?>
          ['Antes',  <?php echo $dadosCantes ?>],
          ['Depois',  <?php echo $dadosCdepois ?>],
        ]);

        var options = {
          width: 612,
          title: 'Relatório de pessoas que contrairam o vírus antes ou depois de tomarem a vacina'
        };

        var chart = new google.visualization.PieChart(document.getElementById('Vacinaantesodepois'));

        chart.draw(data, options);
      }
    </script>

        <!--Script de relatorio que fuma bebe-->
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Fuma ou bebe', 'Quantidade'],
          <?php
            $rel = new Crud();

            $dadosFUMAs = $rel->Fumas();
            $dadosFUMAn= $rel->Fuman();
          ?>
          ['Sim Fumam ou bebe',  <?php echo $dadosFUMAs ?>],
          ['Não Fumam e nem bebe',  <?php echo $dadosFUMAn ?>],
        ]);

        var options = {
          width: 600,
          title: 'Relatório de pessoas que contrairam o vírus quee Fumam ou bebe alguma bebida Alcoolica'
        };

        var chart = new google.visualization.PieChart(document.getElementById('Fumabebe'));

        chart.draw(data, options);
      }
    </script>

    <!--Script de relatorio de doenças-->
<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Doenças', 'Quantidade'],
          <?php
            $rel = new Crud();

            $dadosdiabete = $rel->Diabete();
            $dadosHipertensao= $rel->Hipertensao();
            $dadosRenais = $rel->renais();
            $dadosrespiratoria = $rel->respiratoria();
            $dadoscardio = $rel->cardiovasculares();
            $dadosnaodoencas = $rel->Naodoencas();

          ?>
          ["Diabete", <?php echo $dadosdiabete ?>],
          ["Hipertensão", <?php echo $dadosHipertensao ?>],
          ["Doenças renais", <?php echo $dadosRenais ?>],
          ["Doenças respiratória", <?php echo $dadosrespiratoria ?>],
          ["Doenças cardiovasculares", <?php echo $dadoscardio?>],
          ["Não possui doenças", <?php echo $dadosnaodoencas?>],

        ]);

        var options = {
          width: 1200,
          legend: { position: '' },
          chart: {
            title: 'Realatório de pessoas que tem doenças e contrairam o vírus',
            subtitle: 'Doenças Crônicas' },
          axes: {
            x: {
              0: { side: 'top', label: 'Doenças'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('Doenças'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>



</body>

</html>