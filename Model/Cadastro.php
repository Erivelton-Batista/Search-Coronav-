<?php

require '../Controller/conexao.php';

class Cadastrar{

    private $Nome;
    private $CPF;
    private $Data;
    private $Sexo;
    private $Cidade;
    private $Estado;
    private $Sangue;
    private $Testecovid;
    private $Testerealizado;
    private $Vezescovid;
    private $Sintoma;
    private $Vacina;
    private $Qvacina;
    private $Contraiuv;
    private $Doenca;
    private $Fumabebe;

    //get e set de nome
    public function setnome($Nome){
        $this->Nome = $Nome;
    }
    public function getnome(){
        return $this->Nome;
    }

    //get e set de CPF
    public function setcpf($CPF){
        $this->CPF = $CPF;
    }
    public function getcpf(){
        return $this->CPF;
    }

    //get e set de Data
    public function setdata($Data){
        $this->Data = $Data;
    }
    public function getdata(){
        return $this->Data;
    }

    //get e set de Sexo 
    public function setsexo($Sexo){
        $this->Sexo = $Sexo;
    }
    public function getsexo(){
        return $this->Sexo;
    }

    //get e set Cidade
    public function setcidade($Cidade){
        $this->Cidade = $Cidade;
    }
    public function getcidade(){
        return $this->Cidade;
    }

    //get e set Estado 
    public function setestado($Estado){
        $this->Estado = $Estado;
    }
    public function getestado(){
        return $this->Estado;
    }

    //get e set Sangue
    public function setsangue($Sangue){
        $this->Sangue = $Sangue;
    }
    public function getsangue(){
        return $this->Sangue;
    }

    //get e set Testecovid
    public function settestecovid($Testecovid){
        $this->Testecovid = $Testecovid;
    }
    public function gettestecovid(){
        return $this->Testecovid;
    }

    //get e set Testerealizado
    public function settesterealizado($Testerealizado){
        $this->Testerealizado = $Testerealizado;
    }
    public function gettesterealizado(){
        return $this->Testerealizado;
    }

    //get e set Vezescovid
    public function setvezescovid($Vezescovid){
        $this->Vezescovid = $Vezescovid;
    }
    public function getvezescovid(){
        return $this->Vezescovid;
    }

    //get e set de Sintoma
    public function setsintoma($Sintoma){
        $this->Sintoma = $Sintoma;
    }
    public function getsintoma(){
        return $this->Sintoma;
    }

    //get e set Vacina
    public function setvacina($Vacina){
        $this->Vacina = $Vacina;
    }
    public function getvacina(){
        return $this->Vacina;
    }

    // get e set Qvacina
    public function setqvacina($Qvacina){
        $this->Qvacina = $Qvacina;
    }
    public function getqvacina(){
        return $this->Qvacina;
    }

    //get e set Contraiuv
    public function setcontraiuv($Contraiuv){
        $this->Contraiuv = $Contraiuv;
    }
    public function getcontraiuv(){
        return $this->Contraiuv;
    }

    //get set Diabete
    public function setdoenca($Doenca){
        $this->Doenca = $Doenca;
    }
    public function getdoenca(){
        return $this->Doenca;
    }

    //get e set Fumabebe
    public function setfumabebe($Fumabebe){
        $this->Fumabebe = $Fumabebe;
    }
    public function getfumabebe(){
        return $this->Fumabebe;
    }



    public function UpPesquisa($cad){

        $sql = 'INSERT INTO pesquisa(Nome, CPF, Data, Sexo, Cidade, Estado, Sangue, Testecovid, Testerealizado, Vezescovid, Sintoma, Vacina, Qualvacina, Contraiuvirus, Doenca, Fumabebe) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';

        $result = Conectar::conectado()->prepare($sql);

        $result->bindvalue(1, $cad->getnome());
        $result->bindValue(2, $cad->getcpf());
        $result->bindValue(3, $cad->getdata());
        $result->bindValue(4, $cad->getsexo());
        $result->bindValue(5, $cad->getcidade());
        $result->bindValue(6, $cad->getestado());
        $result->bindValue(7, $cad->getsangue());
        $result->bindValue(8, $cad->gettestecovid());
        $result->bindValue(9, $cad->gettesterealizado());
        $result->bindValue(10, $cad->getvezescovid());
        $result->bindValue(11, $cad->getsintoma());
        $result->bindValue(12, $cad->getvacina());
        $result->bindValue(13, $cad->getqvacina());
        $result->bindValue(14, $cad->getcontraiuv());
        $result->bindValue(15, $cad->getdoenca());
        $result->bindValue(16, $cad->getfumabebe());

        if($result->execute()){

            echo "<script>alert('Pesquisa realizada com sucesso, Obrigado!');window.location.href='../Views/index.html'</script>";
        }


    }





}



?>