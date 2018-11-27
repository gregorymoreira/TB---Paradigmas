<?php

	require_once('db.class.php');

	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$tipo_sanguineo = $_POST['sangue'];


	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql = "insert into doador (cpf, nome, email, senha, tipo_sanguineo) values ('$cpf', '$nome', '$email', '$senha', '$tipo_sanguineo')" ;

	if(mysqli_query($link, $sql)){
		header('Location: index.php');
		//echo 'Doador registrado com sucesso!';
	}
	else{
		echo 'Erro ao registrar o doador!' ;
	}
?>