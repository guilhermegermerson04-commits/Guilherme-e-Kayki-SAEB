<?php


include "../conexao.php";


$id=$_GET['id'];



$dados=$conn->query("SELECT veiculo_id FROM locacao WHERE id=$id");


$locacao=$dados->fetch_assoc();


$veiculo_id=$locacao['veiculo_id'];





$conn->query("DELETE FROM locacao WHERE id=$id");





$conn->query("UPDATE veiculo SET status='Disponível' WHERE id=$veiculo_id");



header("location:listar.php");


?>