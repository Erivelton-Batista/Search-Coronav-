<?php
require 'Login.php';

    $log = new Login();

    $log->setlogin( $_POST['login']);
    $log->setsenha($_POST['senha']);

    $log->Logando($log);


?>