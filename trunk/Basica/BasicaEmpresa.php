<?php
include("BasicaEnderecoEmpresa.php");
include("BasicaPatrocinadorEmpresa.php");

	class Empresa{
		private $nome;
		private $cnpj;
		private $sigla;
		private $telefone1;
		private $telefone2;
		
		public function getNome(){
		 return $this->nome;
		}
		
		public function setNome($nome){
		 $this->nome = $nome;
		}
		
		public function getCnpj(){
		 return $this->cnpj;
		}
		
		public function setCnpj($cnpj){
		 $this->cnpj = $cnpj;
		}
		
		public function getSigla(){
		 return $this->sigla;
		}
		
		public function setSigla($sigla){
		 $this->sigla = $sigla;
		}
		
		public function getTelefone1(){
		 return $this->telefone1;
		}
		
		public function setTelefone1($telefone1){
		 $this->telefone1 = $telefone1;
		}
		
		public function getTelefone2(){
		 return $this->telefone2;
		}
		
		public function setTelefone2($telefone2){
		 $this->telefone2 = $telefone2;
		}
	}

?>