<?php include "conexao.php"; ?>
<?php
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$query = "INSERT INTO cliente (usuario, senha, email) VALUES ('$user', '$pass', '$email')";
	$ok = mysqli_query($conn,$query);
	if($ok){
		header('location:login.html');
	}else{
		header('location:cadastro.html');
	}
	mysqli_close($conn);
?>