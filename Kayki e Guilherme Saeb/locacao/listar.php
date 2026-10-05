<?php

include "../conexao.php";


$sql="

SELECT 

locacao.*,

cliente.nome,

veiculo.modelo,
veiculo.marca


FROM locacao


INNER JOIN cliente

ON locacao.cliente_id=cliente.id


INNER JOIN veiculo

ON locacao.veiculo_id=veiculo.id

";


$resultado=$conn->query($sql);


?>


<!DOCTYPE html>
<html>

<head>

<title>Locações</title>

<link rel="stylesheet" href="../style.css">

</head>


<body>


<h1>Locações</h1>


<a href="inserir.php">
Nova Locação
</a>


<table>


<tr>

<th>Cliente</th>

<th>Veículo</th>

<th>Retirada</th>

<th>Devolução</th>

<th>Total</th>

<th>Status</th>

<th>Ações</th>


</tr>



<?php


while($linha=$resultado->fetch_assoc()){


echo "

<tr>


<td>".$linha['nome']."</td>


<td>".$linha['marca']." ".$linha['modelo']."</td>


<td>".$linha['data_retirada']."</td>


<td>".$linha['data_devolucao']."</td>


<td>".$linha['valor_total']."</td>


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