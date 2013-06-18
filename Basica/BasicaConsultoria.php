<?php

	class Consultoria{
		private $inicio;
		private $fim;
		private $data;
		
		public function getInicio(){
		 return $this->inicio;
		}
		
		public function setInicio($inicio){
		 $this->inicio = $inicio;
		}
		
		public function getFim(){
		 return $this->fim;
		}
		
		public function setFim($fim){
		 $this->fim = $fim;
		}
		
		public function getData(){
		 return $this->data;
		}
		
		public function setData($data){
		 $this->data = $data;
		}
	}

?>