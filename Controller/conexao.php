<?php

class Conectar{

    private $instace;

    public static function conectado(){

        try{
            $instace = new PDO('mysql:host=localhost;dbname=search_coronavirus;', 'root', '');
            
        
        }catch(PDOException $e){
            die("Erro ao conectar com Banco de dados".$e->getMessage());       
        }
    
        return $instace;
    }

    
}



?>