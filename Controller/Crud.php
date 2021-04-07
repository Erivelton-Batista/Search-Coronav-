<?php
require 'conexao.php';

class Crud{

    public function Tabela(){

		//comando sql
		$sql = "SELECT * FROM `pesquisa`";

		//preparando sql com conexao com BD
		$leitura = Conectar::conectado()->prepare($sql);
		
		$leitura->execute();
		
		//if com contagem de retonro de linhas do banco de dados
		if ($leitura->rowCount() > 0) {
			$resultado = $leitura->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		}else{
			return [];
		}
		
	}

}












?>