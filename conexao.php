<?php

	$conn = mysqli_connect('localhost:3306','root','') or die ("Falha na conexão!!!");

	mysqli_select_db($conn,'projeto');
?>