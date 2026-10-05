<?php

include "../conexao.php";


$id=$_GET['id'];



$sql="DELETE FROM veiculo WHERE id=$id";


$conn->query($sql);



header("location:listar.php");


?>