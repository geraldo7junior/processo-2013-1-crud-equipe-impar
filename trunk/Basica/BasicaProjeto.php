<?php

	class projeto{
		private $id;
		private $sigla;
		private $descricao;
		
		public function getId(){
		 return $this->id;
		}
		
		public function setId($id){
		 $this->id = $id;
		}
		
		public function getSigla(){
		 return $this->sigla;
		}
		
		public function setSigla($sigla){
		 $this->sigla = $sigla;
		}
		
		public function getDescricao(){
		 return $this->descricao;
		}
		
		public function setDescricao($descricao){
		 $this->descricao = $descricao;
		}
	}

?>