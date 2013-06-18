<?php

	class PatrocinadorEmpresa{
		private $nome;
		private $telefone;
		private $celular;
		
		public function getNome(){
		 return $this->nome;
		}
		
		public function setNome($nome){
		 $this->nome = $nome;
		}
		
		public function getTelefone(){
		 return $this->telefone;
		}
		
		public function setTelefone($telefone){
		 $this->telefone = $telefone;
		}
		
		public function getCelular(){
		 return $this->celular;
		}
		
		public function setCelular($celular){
		 $this->celular = $celular;
		}
	}

?>