<?php

include "../conexao.php";


$sql="SELECT * FROM veiculo";

$resultado=$conn->query($sql);


?>


<!DOCTYPE html>
<html>

<head>

<title>Veículos</title>

<link rel="stylesheet" href="../style.css">

</head>


<body>


<h1>Veículos</h1>


<a href="inserir.php">
Novo Veículo
</a>



<table>


<tr>

<th>Modelo</th>
<th>Marca</th>
<th>Placa</th>
<th>Ano</th>
<th>Cor</th>
<th>Categoria</th>
<th>Status</th>
<th>Ações</th>


</tr>



<?php


while($linha=$resultado->fetch_assoc()){


echo "

<tr>


<td>".$linha['modelo']."</td>

<td>".$linha['marca']."</td>

<td>".$linha['placa']."</td>

<td>".$linha['ano']."</td>

<td>".$linha['cor']."</td>

<td>".$linha['categoria']."</td>

<td>".$linha['status']."</td>


<td>


<a class='editar' href='atualizar.php?id=".$linha['id']."'>
Editar
</a>


<a class='excluir' href='excluir.php?id=".$linha['id']."'>
Excluir
</a>


</td>


</tr>

";


}


?>


</table>


</body>

</html>