<?php

	session_start();

	require_once('db.class.php');


	$email = $_POST['email'];
	$senha = $_POST['senha'];


	$sql = "SELECT * FROM doador WHERE email = '$email' AND senha = '$senha' ";

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$resultado =mysqli_query($link, $sql);

	if($resultado){
		$dados_doador = mysqli_fetch_array($resultado);

		if(isset($dados_doador['email'])){

			$_SESSION['email'] = $dados_doador['email'];
			$_SESSION['nome'] = $dados_doador['nome'];
			$_SESSION['sangue'] = $dados_doador['tipo_sanguineo'];

			header('Location: home.php');
		}
		else{
			header('Location: login.php?erro=1');
		}

	}
	else{
		echo 'Erro na execução';
	}
?>