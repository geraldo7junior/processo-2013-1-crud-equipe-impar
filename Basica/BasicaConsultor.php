<?php
include("BasicaEnderecoConsultor.php");
include("BasicaAutenticacaoConsultor.php");
 
	class Consultor{
		private $nome;
		private $cpf;
		private $sigla;
		private $cor;
		private $telefone;
		private $celular;
		private $email;
		private $cargo;
		private $status;
		private $endereco;
		
		//setters
		public function setNome($nome){
          $this->nome = ($nome);
        }
        
        public function setCpf($cpf){
          $this->cpf = ($cpf);
        }
        
        public function setSigla($sigla){
          $this->sigla = ($sigla);
        }
        
        public function setCor($cor){
          $this->cor = ($cor);
        }
        
        public function setTelefone($telefone){
          $this->telefone = ($telefone);
        }
        
        public function setCelular($celular){
          $this->celular = ($celular);
        }
        
        public function setEmail($email){
          $this->email = ($email);
        }
		
		public function setCargo($cargo){
          $this->cargo = ($cargo);
        }
        
        public function setStatus($status){
          $this->status = ($status);
        }
        
        public function setEndereco($endereco){
          $this->endereco = ($endereco);
        }
        
        //getters
        public function getNome(){
          return $this->nome;
        }
        
        public function getCpf(){
          return $this->cpf;
        }
        
        public function getSigla(){
          return $this->sigla;
        }
        
        public function getCor(){
          return $this->cor;
        }
        
        public function getTelefone(){
          return $this->telefone;
        }
        
        public function getCelular(){
          return $this->celular;
        }
        
        public function getEmail(){
          return $this->email;
        }
        
        public function getCargo(){
          return $this->cargo;
        }
        
        public function getStatus(){
          return $this->status;
        }
        
        public function getEndereco(){
          return $this->endereco;
        }
	}

?>