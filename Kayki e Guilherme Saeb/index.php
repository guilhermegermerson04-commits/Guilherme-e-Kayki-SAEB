<?php
session_start();

if(!isset($_SESSION['email'])){
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Locadora</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h1>Locadora de Veículos</h1>

<p>Bem vindo, 
<?php echo $_SESSION['nome']; ?>
</p>


<div class="menu">

<a href="cliente/listar.php">
Clientes
</a>


<a href="veiculo/listar.php">
Veículos
</a>


<a href="locacao/listar.php">
Locações
</a>


<a href="logout.php">
Sair
</a>

</div>


</div>

</body>
</html>