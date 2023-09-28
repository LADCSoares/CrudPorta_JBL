<?php
// faz conexao com o banco
include("conecta.php");

$cor = $_POST["cor"];
$modelo = $_POST["modelo"];
$valor = $_POST["valor"];

$sql = "INSERT INTO porta (cor, modelo, valor) VALUES ('$cor', '$modelo', $valor)"; // pede para inserir em tal tabela no banco
$resultado = mysqli_query($conexao, $sql);

if ($resultado == true) {
    header("Location: crudPorta.php?result=true");
} else {
    header("Location: crudPorta.php?result=false");
}
?>
