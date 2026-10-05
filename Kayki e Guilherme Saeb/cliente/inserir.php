<?php

include "../conexao.php";


if(isset($_POST['nome'])){

$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$cnh=$_POST['cnh'];


$sql="INSERT INTO cliente
(nome,cpf,telefone,email,cnh)

VALUES

('$nome','$cpf','$telefone','$email','$cnh')";


$conn->query($sql);


header("location:listar.php");

}

?>


<!DOCTYPE html>
<html>

<head>

<title>Cadastrar Cliente</title>

<link rel="stylesheet" href="../style.css">

</head>


<body>


<div class="container">

<h1>Cadastro Cliente</h1>


<form method="post">


<input name="nome" placeholder="Nome completo">

<input name="cpf" placeholder="CPF">

<input name="telefone" placeholder="Telefone">

<input name="email" placeholder="Email">

<input name="cnh" placeholder="CNH">


<button>
Cadastrar
</button>


</form>


<br>

<a href="listar.php">
Voltar
</a>


</div>


</body>

</html>