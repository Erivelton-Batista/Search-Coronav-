<?php
require 'conexao.php';

class Crud{

	public $nun;

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

	//buscar no DB os Sangue de TIpo A+
	public function Ap(){

		$sqlOp = "SELECT * FROM pesquisa WHERE Sangue = 'A+' ";

		$buscarAp= Conectar::conectado()->prepare($sqlOp);

		$buscarAp->execute();

		$nun = $buscarAp->rowCount();

		
		return $nun;
	}

	//buscar no DB os Sangue de Tipo A-
	public function An(){

		$sqlOp = "SELECT * FROM pesquisa WHERE Sangue = 'A-' ";

		$buscarAn= Conectar::conectado()->prepare($sqlOp);

		$buscarAn->execute();

		$nun = $buscarAn->rowCount();

		
		return $nun;
	}

	//buscar no DB os Sangue de TIpo B+
	public function Bp(){

		$sqlOp = "SELECT * FROM pesquisa WHERE Sangue = 'B+' ";

		$buscarBp= Conectar::conectado()->prepare($sqlOp);

		$buscarBp->execute();

		$nun = $buscarBp->rowCount();

		
		return $nun;
	}

	//buscar no DB os Sangue de TIpo B-
	public function Bn(){

		$sqlOp = "SELECT * FROM pesquisa WHERE Sangue = 'B-' ";

		$buscarBn= Conectar::conectado()->prepare($sqlOp);

		$buscarBn->execute();

		$nun = $buscarBn->rowCount();

		
		return $nun;
	}

	//buscar no DB os Sangue de TIpo AB+
	public function ABp(){

		$sqlOp = "SELECT * FROM pesquisa WHERE Sangue = 'AB+' ";

		$buscarABp= Conectar::conectado()->prepare($sqlOp);

		$buscarABp->execute();

		$nun = $buscarABp->rowCount();

		
		return $nun;
	}

	//buscar no DB os Sangue de TIpo AB-
	public function ABn(){

		$sqlOp = "SELECT * FROM pesquisa WHERE Sangue = 'AB-' ";

		$buscarABn= Conectar::conectado()->prepare($sqlOp);

		$buscarABn->execute();

		$nun = $buscarABn->rowCount();

		
		return $nun;
	}

	//buscar no DB os Sangue de TIpo B+
	public function Op(){

		$sqlOp = "SELECT * FROM pesquisa WHERE Sangue = 'O+' ";

		$buscarOp= Conectar::conectado()->prepare($sqlOp);

		$buscarOp->execute();

		$nun = $buscarOp->rowCount();

		
		return $nun;
	}

	//buscar no DB os Sangue de TIpo B-
	public function On(){

		$sqlOp = "SELECT * FROM pesquisa WHERE Sangue = 'O-' ";

		$buscarOn= Conectar::conectado()->prepare($sqlOp);

		$buscarOn->execute();

		$nun = $buscarOn->rowCount();

		
		return $nun;
	}

	//buscar no DB o sexo MAsculino
	public function Masculino(){

		$sqlOp = "SELECT * FROM pesquisa WHERE Sexo = 'Masculino' ";

		$buscarSm= Conectar::conectado()->prepare($sqlOp);

		$buscarSm->execute();

		$nun = $buscarSm->rowCount();

		
		return $nun;
	}

	//buscar no DB o sexo Feminino
	public function Feminino(){

		$sqlOp = "SELECT * FROM pesquisa WHERE Sexo = 'Feminino' ";

		$buscarSf= Conectar::conectado()->prepare($sqlOp);

		$buscarSf->execute();

		$nun = $buscarSf->rowCount();

		
		return $nun;
	}

	//buscar no DB teste de RT-PCR SWAB NASOFARINGE
	public function Testen(){

		$sqlOp = "SELECT * FROM pesquisa WHERE Testerealizado = 'RT-PCR SWAB Nasofaringe' ";

		$buscarTn= Conectar::conectado()->prepare($sqlOp);

		$buscarTn->execute();

		$nun = $buscarTn->rowCount();

		
		return $nun;
	}
	
	//buscar no DB teste de RT-PCR Saliva
	public function Testes(){

		$sqlOp = "SELECT * FROM pesquisa WHERE Testerealizado = 'RT-PCR Saliva' ";

		$buscarTs= Conectar::conectado()->prepare($sqlOp);

		$buscarTs->execute();

		$nun = $buscarTs->rowCount();

		
		return $nun;
	}

	//buscar no DB teste de Antígeno
	public function Testea(){

		$sqlOp = "SELECT * FROM pesquisa WHERE Testerealizado = 'Antígeno' ";

		$buscarTa= Conectar::conectado()->prepare($sqlOp);

		$buscarTa->execute();

		$nun = $buscarTa->rowCount();

		
		return $nun;
	}

	//buscar no DB teste de Outros
	public function Testeo(){

		$sqlOp = "SELECT * FROM pesquisa WHERE Testerealizado = 'Outros' ";

		$buscarTo= Conectar::conectado()->prepare($sqlOp);

		$buscarTo->execute();

		$nun = $buscarTo->rowCount();

		
		return $nun;
	}

	//buscar no DB testecovid Positivo
	public function TesteCovids(){

		$sqlOp = "SELECT * FROM pesquisa WHERE Testecovid = 'Sim' ";

		$buscar= Conectar::conectado()->prepare($sqlOp);

		$buscar->execute();

		$nun = $buscar->rowCount();

		
		return $nun;
	}

	//buscar no DB testecovid Positivo
	public function TesteCovidn(){

		$sqlOp = "SELECT * FROM pesquisa WHERE Testecovid = 'Não' ";

		$buscar= Conectar::conectado()->prepare($sqlOp);

		$buscar->execute();

		$nun = $buscar->rowCount();

		
		return $nun;
	}

	//buscar no DB Sintoma Tosse
	public function Tosse(){

		$sqlOp = "SELECT * FROM pesquisa WHERE Sintoma = 'Tosse' ";

		$buscar= Conectar::conectado()->prepare($sqlOp);

		$buscar->execute();

		$nun = $buscar->rowCount();

		
		return $nun;
	}

	//buscar no DB Sintoma Febre
	public function Febre(){

		$sqlOp = "SELECT * FROM pesquisa WHERE Sintoma = 'Febre' ";

		$buscar= Conectar::conectado()->prepare($sqlOp);

		$buscar->execute();

		$nun = $buscar->rowCount();

		
		return $nun;
	}

	
	//buscar no DB Sintoma Coriza
	public function Coriza(){

		$sqlOp = "SELECT * FROM pesquisa WHERE Sintoma = 'Coriza' ";

		$buscar= Conectar::conectado()->prepare($sqlOp);

		$buscar->execute();

		$nun = $buscar->rowCount();

		
		return $nun;
	}

		//buscar no DB Sintoma Dor de Garganta
		public function Garganta(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Sintoma = 'Dor de Garganta' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB Sintoma Dificuldade de respirar
		public function respirar(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Sintoma = 'Dificuldade de respirar' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB Sintoma Perda de Olfato(anosmia) e Paladar(ageusia)
		public function OlfatoPaladar(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Sintoma = 'Perda de Olfato(anosmia) e Paladar(ageusia)' ";
		
			$buscar= Conectar::conectado()->prepare($sqlOp);
		
			$buscar->execute();
		
			$nun = $buscar->rowCount();
		
				
			return $nun;
		}

		//buscar no DB Sintoma Distúrbios gastrintestinais (náuseas/vômitos/diarreia)
		public function gastrintestinais(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Sintoma = 'Distúrbios gastrintestinais (náuseas/vômitos/diarreia)' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB Sintoma Cansaço(astenia)
		public function Cansaço(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Sintoma = 'Cansaço(astenia)' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB Sintoma Diminuição do apetite (hiporexia) e Dispnéia ( falta de ar)
		public function Dispnéia(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Sintoma = 'Diminuição do apetite (hiporexia) e Dispnéia ( falta de ar)' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB contraiu 1 vez o virus
		public function Contraiu1(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Vezescovid = '1' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB contraiu 2 vez o virus
		public function Contraiu2(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Vezescovid = '2' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB contraiu Mais de 2 vez o virus
		public function ContraiuM2(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Vezescovid = 'Mais de 2' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB quem tomou a vacina
		public function Vacinasim(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Vacina = 'Sim' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB quem Não tomou a vacina
		public function Vacinanao(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Vacina = 'Não' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB a vacina Coronavac
		public function CoronaVac(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Qualvacina = 'CoronaVac' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB a vacina Oxford
		public function Oxford(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Qualvacina = 'Oxford' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB a vacina Pfizer
		public function Pfizer(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Qualvacina = 'Pfizer' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB a vacina Moderna
		public function Moderna(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Qualvacina = 'Moderna' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB a vacina Sputinik V
		public function Sputinik(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Qualvacina = 'Sputinik V' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB a Contraiu o virus antes
		public function ContraiuAntes(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Contraiuvirus = 'Antes' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB a Contraiu o virus depois
		public function ContraiuDepois(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Contraiuvirus = 'Depois' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB se fuma ou bebe
		public function Fumas(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Fumabebe = 'Sim' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB se nao fuma ou bebe
		public function Fuman(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Fumabebe = 'Não' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB doença diabete
		public function Diabete(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Doenca = 'Diabete' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB doença Hipertensão
		public function Hipertensao(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Doenca = 'Hipertensão' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB doença Doenças renais
		public function renais(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Doenca = 'Doenças renais' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB doença Doenças respiratória
		public function respiratoria(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Doenca = 'Doenças respiratória' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB doença Doenças cardiovasculares
		public function cardiovasculares(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Doenca = 'Doenças cardiovasculares' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}
		
		//buscar no DB doença Não possuo doenças
		public function Naodoencas(){

			$sqlOp = "SELECT * FROM pesquisa WHERE Doenca = 'Não possuo doenças' ";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}

		//buscar no DB quantidade de pessoas que fizeram a pesquisa
		public function Num(){

			$sqlOp = "SELECT * FROM pesquisa";
	
			$buscar= Conectar::conectado()->prepare($sqlOp);
	
			$buscar->execute();
	
			$nun = $buscar->rowCount();
	
			
			return $nun;
		}


		

}





?>