<?php

include "../conexao.php";


$id=$_GET['id'];


$sql="SELECT * FROM cliente WHERE id=$id";

$resultado=$conn->query($sql);

$cliente=$resultado->fetch_assoc();



if(isset($_POST['nome'])){


$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$cnh=$_POST['cnh'];



$sql="UPDATE cliente SET

nome='$nome',
cpf='$cpf',
telefone='$telefone',
email='$email',
cnh='$cnh'


WHERE id=$id";


$conn->query($sql);



header("location:listar.php");


}



?>


<!DOCTYPE html>

<html>

<head>

<title>Editar Cliente</title>

<link rel="stylesheet" href="../style.css">

</head>


<body>


<div class="container">


<h1>Editar Cliente</h1>



<form method="post">


<input 
name="nome"
value="<?php echo $cliente['nome']; ?>"
>



<input 
name="cpf"
value="<?php echo $cliente['cpf']; ?>"
>



<input 
name="telefone"
value="<?php echo $cliente['telefone']; ?>"
>



<input 
name="email"
value="<?php echo $cliente['email']; ?>"
>



<input 
name="cnh"
value="<?php echo $cliente['cnh']; ?>"
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