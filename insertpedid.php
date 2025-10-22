<?php 

include('conexao.php');

$nome = $_GET['nome'];
$tipo = $_GET['tipo'];
$preco = $_GET['preco'];
$descricao = $_GET['descricao'];

$insert = "INSERT INTO produtos VALUES('','$nome','$tipo','$preco','$descricao')";

$conexao -> query($insert);

header('location:cadastroprodu.php');

?>