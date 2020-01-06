<?php
session_start();

//se acessar direto é redirecionando para index
if(empty($_POST['email']) || empty($_POST['password'])){
   header('location: ../index.php');
   exit();
}

// if(!isset($_SESSION['carrinho'])){ 
include('../database/connection.php');
// }

$email = mysqli_real_escape_string($_POST['email']); //evitando sql injection
$senha = mysqli_real_escape_string($_POST['senha']);

$sql = "select * from cliente where email='$email' and senha='$senha'";

$resultado = mysqli_query($conexao, $sql);
$total     = mysqli_num_rows($resultado);

if ( $total>0 ) {
	$dados = mysqli_fetch_array($resultado);
	$_SESSION['cliente']       = $dados['codcliente'];
	$_SESSION['clientenome']  = $dados['nome'];
	$_SESSION['clientecpf']  = $dados['cpf'];
	
	$_SESSION['clienteemail'] = $dados['email'];
	$_SESSION['clientesenha'] = $dados['senha'];
	echo "<script>
	        location.href='admc/index.php';
	      </script>";
} else {
	echo "<script>
	        alert('Cliente não encontrado');
	        location.href='login.php';
	      </script>";
}

?>