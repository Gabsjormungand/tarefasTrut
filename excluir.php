<?php
$id = $_GET['id'];
include "conexao.php";
$sql = "delete from tarefas where id = $id";
$resutado = mysqli_query($conexao, $sql);
mysqli_close($conexao);


header('location: index.php');

?>