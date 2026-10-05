<?php

include "../conexao.php";


$sql="SELECT * FROM cliente";

$resultado=$conn->query($sql);

?>


<!DOCTYPE html>
<html>

<head>

<title>Clientes</title>

<link rel="stylesheet" href="../style.css">

</head>


<body>


<h1>Clientes</h1>


<a href="inserir.php">
Novo Cliente
</a>


<table>


<tr>

<th>Nome</th>
<th>CPF</th>
<th>Telefone</th>
<th>Email</th>
<th>CNH</th>
<th>Ações</th>

</tr>



<?php

while($linha=$resultado->fetch_assoc()){


echo "

<tr>

<td>".$linha['nome']."</td>

<td>".$linha['cpf']."</td>

<td>".$linha['telefone']."</td>

<td>".$linha['email']."</td>

<td>".$linha['cnh']."</td>


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