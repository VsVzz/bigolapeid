<?php

include 'conexao.php';

$id_produto = $_GET['id_produto'];

$conexao->query("DELETE FROM produtos WHERE id_produto = $id_produto");

header('location:listar.php');
