<?php

	class AutenticacaoConsultor{
		private $login;
		private $senha;
		private $tipo;
		
		public function getLogin(){
		 return $this->login;
		}
		
		public function setLogin($login){
		 $this->login = $login;
		}
		
		public function getSenha(){
		 return $this->senha;
		}
		
		public function setSenha($senha){
		 $this->senha = $senha;
		}
		
		public function getTipo(){
		 return $this->tipo;
		}
		
		public function setTipo($tipo){
		 $this->tipo = $tipo;
		}
	}
	
	

?>