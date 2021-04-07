<?php
require 'Cadastro.php';

$cad = new Cadastrar();

$cad->setnome($_POST["Nome"]);
$cad->setcpf($_POST["CPF"]);
$cad->setdata($_POST["Data"]);
$cad->setsexo($_POST["Sexo"]);
$cad->setcidade($_POST["Cidade"]);
$cad->setestado($_POST["Estado"]);
$cad->setsangue($_POST["Sangue"]);
$cad->settestecovid($_POST['Teste-covid']);
$cad->settesterealizado($_POST['Teste-realizado']);
$cad->setvezescovid($_POST['Vezes-covid']);
$cad->setsintoma($_POST['Primeiro-sintoma']);
$cad->setvacina($_POST['Vacina']);
$cad->setqvacina($_POST['Qualvacina']);
$cad->setcontraiuv($_POST['Contraiuvirus']);
$cad->setdoenca($_POST['Doenca']);
$cad->setfumabebe($_POST['Fumabebe']);

$cad->UpPesquisa($cad);


?>