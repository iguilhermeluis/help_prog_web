<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'zoosenac';
//$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
$conn = mysqli_connect($server, $user, $pass, $database) or die ("Sem conexão com o database");
?>