<?php
include("conecta.php");
// faz conexao com o banco

$id = $_POST["id"];
$cor = $_POST["cor"];
$modelo = $_POST["modelo"];
$valor = $_POST["valor"];

$sql = "UPDATE porta SET cor = '$cor', modelo = '$modelo', valor = '$valor' WHERE id =  $id";
$resultado = mysqli_query($conexao, $sql);
if ($resultado == true) {
    header("Location: crudPorta.php?result=true");
} else {
    header("Location: crudPorta.php?result=false");
}

