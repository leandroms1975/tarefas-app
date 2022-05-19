<?php

class Conexao {

	private $host = 'ec2-54-86-224-85.compute-1.amazonaws.com';
	private $dbname = 'd1k8538h05gssp';
	private $user = 'omfywlgyiklbiv';
	private $pass = '26557b14ed64e6f7643b196bcd58020a30889349cbb5c5fcdcc194a2e1346e6b';

	public function conectar() {
		try {

			$conexao = new PDO(
				"pgsql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);

			return $conexao;


		} catch (PDOException $e) {
			echo '<p>'.$e->getMessege().'</p>';
		}
	}
}

?>