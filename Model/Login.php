<?php

require '../Controller/conexao.php';

class Login{
    private $login;
    private $senha;
    

    public function setlogin($login){
        $this->login = $login;
    }
    public function getlogin(){
        return $this->login;
    }

    public function setsenha($senha){
        $this->senha = $senha;
    }
    public function getsenha(){
        return $this->senha;
    }

    public function Logando($log){
        

        $sql = 'SELECT login, senha FROM administrador WHERE login = (?) AND senha = (?)';

        $result = Conectar::conectado()->prepare($sql);
        
        $result->bindvalue(1, $log->getlogin());
        $result->bindvalue(2, $log->getsenha());
        $result->execute();

        if($result->rowCount() > 0){

            echo "<script>alert('Login efetuado com sucesso!');window.location.href='../Views/Dashboard.html'</script>";
        }else{

            echo "<script>alert('Login ou Senha Invalidos!');window.location.href='../Views/login.html'</script>";
        }


    }


}


 
?>