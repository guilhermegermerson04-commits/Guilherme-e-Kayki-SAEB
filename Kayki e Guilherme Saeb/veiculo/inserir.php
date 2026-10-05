<?php

include "../conexao.php";


if(isset($_POST['modelo'])){


$modelo=$_POST['modelo'];
$marca=$_POST['marca'];
$placa=$_POST['placa'];
$ano=$_POST['ano'];
$cor=$_POST['cor'];
$categoria=$_POST['categoria'];
$status=$_POST['status'];



$sql="INSERT INTO veiculo

(modelo,marca,placa,ano,cor,categoria,status)

VALUES

('$modelo','$marca','$placa','$ano','$cor','$categoria','$status')";


$conn->query($sql);


header("location:listar.php");


}


?>


<!DOCTYPE html>
<html>

<head>

<title>Cadastrar Veículo</title>

<link rel="stylesheet" href="../style.css">

</head>


<body>


<div class="container">


<h1>Cadastro de Veículo</h1>


<form method="post">


<input name="modelo" placeholder="Modelo">


<input name="marca" placeholder="Marca">


<input name="placa" placeholder="Placa">


<input name="ano" placeholder="Ano">


<input name="cor" placeholder="Cor">


<input name="categoria" placeholder="Categoria">


<input name="status" placeholder="Disponível / Alugado">


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