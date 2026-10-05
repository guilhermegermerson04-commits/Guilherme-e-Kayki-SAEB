<?php

include "../conexao.php";


$id=$_GET['id'];



$sql="SELECT * FROM locacao WHERE id=$id";

$resultado=$conn->query($sql);

$locacao=$resultado->fetch_assoc();



$clientes=$conn->query("SELECT * FROM cliente");

$veiculos=$conn->query("SELECT * FROM veiculo");




if(isset($_POST['cliente_id'])){


$cliente_id=$_POST['cliente_id'];
$veiculo_id=$_POST['veiculo_id'];
$data_retirada=$_POST['data_retirada'];
$data_devolucao=$_POST['data_devolucao'];
$valor_diaria=$_POST['valor_diaria'];
$valor_total=$_POST['valor_total'];
$status=$_POST['status'];



$sql="UPDATE locacao SET


cliente_id='$cliente_id',

veiculo_id='$veiculo_id',

data_retirada='$data_retirada',

data_devolucao='$data_devolucao',

valor_diaria='$valor_diaria',

valor_total='$valor_total',

status='$status'


WHERE id=$id";



$conn->query($sql);



header("location:listar.php");


}



?>


<!DOCTYPE html>

<html>

<head>

<title>Editar Locação</title>

<link rel="stylesheet" href="../style.css">

</head>



<body>


<div class="container">


<h1>Editar Locação</h1>



<form method="post">


<label>Cliente</label>


<select name="cliente_id">


<?php


while($cliente=$clientes->fetch_assoc()){


$selecionado="";


if($cliente['id']==$locacao['cliente_id']){

$selecionado="selected";

}



echo "

<option value='".$cliente['id']."' $selecionado>

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


$selecionado="";


if($veiculo['id']==$locacao['veiculo_id']){

$selecionado="selected";

}



echo "

<option value='".$veiculo['id']."' $selecionado>

".$veiculo['marca']." ".$veiculo['modelo']."

</option>

";


}


?>


</select>




<input 
type="date"
name="data_retirada"
value="<?php echo $locacao['data_retirada']; ?>"
>




<input 
type="date"
name="data_devolucao"
value="<?php echo $locacao['data_devolucao']; ?>"
>




<input 
name="valor_diaria"
value="<?php echo $locacao['valor_diaria']; ?>"
>




<input 
name="valor_total"
value="<?php echo $locacao['valor_total']; ?>"
>




<input 
name="status"
value="<?php echo $locacao['status']; ?>"
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