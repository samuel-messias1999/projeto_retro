<?php
	session_start();
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$conn = mysqli_connect('localhost:3306','root','') or die ("Falha na conexão!!!");
	mysqli_select_db($conn,'projeto') or die ("Sem acesso ao DB, Entre em contato com o Administrador");
	$result = mysqli_query($conn,"SELECT * FROM cliente WHERE usuario = '$user' AND senha = '$pass'");
	if(mysqli_num_rows($result)>0){
		$_SESSION['user'] = $user;
		$_SESSION['pass'] = $pass;
		$_SESSION['msg'] = "Você já está logado";
		header('location:jogo/index.php');
	}else{
		$_SESSION['msg'] = "Login/Senha inválidos!";
		unset ($_SESSION['user']);
		unset ($_SESSION['pass']);
		header('location:login.html');
	}
?>