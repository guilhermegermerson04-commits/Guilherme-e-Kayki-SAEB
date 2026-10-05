<?php

include "../conexao.php";



$clientes=$conn->query("SELECT * FROM cliente");

$veiculos=$conn->query("SELECT * FROM veiculo WHERE status='Disponível'");



if(isset($_POST['cliente_id'])){


$cliente_id=$_POST['cliente_id'];
$veiculo_id=$_POST['veiculo_id'];
$data_retirada=$_POST['data_retirada'];
$data_devolucao=$_POST['data_devolucao'];
$valor_diaria=$_POST['valor_diaria'];
$valor_total=$_POST['valor_total'];
$status=$_POST['status'];



$sql="INSERT INTO locacao

(cliente_id,veiculo_id,data_retirada,data_devolucao,valor_diaria,valor_total,status)

VALUES

('$cliente_id','$veiculo_id','$data_retirada','$data_devolucao','$valor_diaria','$valor_total','$status')";



$conn->query($sql);



// muda veículo para alugado

$conn->query("UPDATE veiculo SET status='Alugado' WHERE id=$veiculo_id");



header("location:listar.php");


}



?>


<!DOCTYPE html>
<html>

<head>

<title>Nova Locação</title>

<link rel="stylesheet" href="../style.css">

</head>


<body>


<div class="container">


<h1>Nova Locação</h1>


<form method="post">


<label>Cliente</label>

<select name="cliente_id">


<?php

while($cliente=$clientes->fetch_assoc()){

echo "

<option value='".$cliente['id']."'>
".$cliente['nome']."
</option>

";

}

?>


</select>



<label>Veículo</label>

<select name="veiculo_id">


<?php

while($veiculo=$veiculos->fetch_assoc()){

echo "

<option value='".$veiculo['id']."'>
".$veiculo['marca']." ".$veiculo['modelo']."
</option>

";

}

?>


</select>




<input type="date" name="data_retirada">


<input type="date" name="data_devolucao">


<input name="valor_diaria" placeholder="Valor diária">


<input name="valor_total" placeholder="Valor total">


<input name="status" value="Ativa">



<button>
Cadastrar Locação
</button>


</form>


<br>

<a href="listar.php">
Voltar
</a>


</div>


</body>

</html>