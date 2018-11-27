<?php

class db{
	
	//host
	private $host = 'localhost';

	//usuario
	private $user = 'root';

	//senha
	private $pass = '';

	//banco
	private $database = 'pprog';

	public function conecta_mysql(){

		$con = mysqli_connect($this->host,$this->user,$this->pass,$this->database);

		mysqli_set_charset($con, 'utf8');

		if(mysqli_connect_errno()){
			echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();
		}

		return $con;
	}
}

?>
