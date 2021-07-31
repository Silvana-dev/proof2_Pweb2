<?php
	class Usuario{
		private $nome;
		private $user;
		private $email;
		private $senha;
		
		function __construct($nome, $user, $email, $senha){
			$this->nome = $nome;
			$this->user = $user;
			$this->email = $email;
			$this->senha = $senha;
		}
		
		public function getNome(){
			return $this->nome;
		}
		public function getUsuario(){
			return $this->user;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getSenha(){
			return $this->senha;
		}

		public function setUsuario($new){
			$this->user = $mew;
		}
		public function setEmail($new){
			$this->email = $new;
		}
		public function setSenha($new){
			$this->senha = $new;
		}
		public function setNome($new){
			$this->name = $new;
		}
		
	}
?>