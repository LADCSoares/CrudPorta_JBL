<?php
include("conecta.php");

   $id = $_GET['id'];
   $sql = "SELECT * FROM porta WHERE id=$id";
   $resultado = mysqli_query($conexao, $sql);
   $linha = mysqli_fetch_array($resultado);
   

$sql = "DELETE FROM porta where id=$id";
$resultado = mysqli_query($conexao, $sql);

// arrumar o deletar
header("Location: crudPorta.php");
?>
