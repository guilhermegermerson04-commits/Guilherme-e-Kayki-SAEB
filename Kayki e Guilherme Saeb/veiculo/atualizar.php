<?php

include "../conexao.php";


$id=$_GET['id'];


$sql="SELECT * FROM veiculo WHERE id=$id";

$resultado=$conn->query($sql);

$veiculo=$resultado->fetch_assoc();



if(isset($_POST['modelo'])){


$modelo=$_POST['modelo'];
$marca=$_POST['marca'];
$placa=$_POST['placa'];
$ano=$_POST['ano'];
$cor=$_POST['cor'];
$categoria=$_POST['categoria'];
$status=$_POST['status'];



$sql="UPDATE veiculo SET


modelo='$modelo',
marca='$marca',
placa='$placa',
ano='$ano',
cor='$cor',
categoria='$categoria',
status='$status'


WHERE id=$id";



$conn->query($sql);



header("location:listar.php");


}



?>


<!DOCTYPE html>

<html>

<head>

<title>Editar Veículo</title>

<link rel="stylesheet" href="../style.css">

</head>


<body>


<div class="container">


<h1>Editar Veículo</h1>


<form method="post">


<input 
name="modelo"
value="<?php echo $veiculo['modelo']; ?>"
>


<input 
name="marca"
value="<?php echo $veiculo['marca']; ?>"
>


<input 
name="placa"
value="<?php echo $veiculo['placa']; ?>"
>


<input 
name="ano"
value="<?php echo $veiculo['ano']; ?>"
>


<input 
name="cor"
value="<?php echo $veiculo['cor']; ?>"
>


<input 
name="categoria"
value="<?php echo $veiculo['categoria']; ?>"
>


<input 
name="status"
value="<?php echo $veiculo['status']; ?>"
>


<button>
Salvar Alteração
</button>


</form>


<br>


<a href="listar.php">
Voltar
</a>


</div>


</body>

</html>