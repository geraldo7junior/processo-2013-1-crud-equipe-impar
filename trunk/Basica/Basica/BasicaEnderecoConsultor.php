<?php

	class EnderecoConsultor{
		private $cep;
		private $logradouro;
		private $numero;
		private $complemento;
		private $bairro;
		private $cidade;
		private $uf;
		
		public function getCep(){
		 return $this->cep;
		}
		
		public function setCep($cep){
		 $this->cep = $cep;
		}
		
		public function getLogradouro(){
		 return $this->logradouro;
		}
		
		public function setLogradouro($logradouro){
		 $this->logradouro = $logradouro;
		}
		
		public function getNumero(){
		 return $this->numero;
		}
		
		public function setNumero($numero){
		 $this->numero = $numero;
		}
		
		public function getComplemento(){
		 return $this->complemento;
		}
		
		public function setComplemento($complemento){
		 $this->complemento = $complemento;
		}
		
		public function getBairro(){
		 return $this->bairro;
		}
		
		public function setBairro($bairro){
		 $this->bairro = $bairro;
		}
		
		public function getCidade(){
		 return $this->cidade;
		}
		
		public function setCidade($cidade){
		 $this->cidade = $cidade;
		}
		
		public function getUf(){
		 return $this->uf;
		}
		
		public function setUf($uf){
		 $this->uf = $uf;
		}
	}

?>