<?php
// faz conexao com o banco
include("conecta.php");

$cor = $_POST["cor"];
$modelo = $_POST["modelo"];
$valor = $_POST["valor"];
$id_Item = "";

$sql = "INSERT INTO funcionario (cor, modelo, valor, id_Item) VALUES ('$cor', $modelo, '$valor', $id_Item)"; // pede para inserir em tal tabela no banco
$resultado = mysqli_query($conexao, $sql);

if ($resultado == true) {
    header("Location: consultarReg.php?result=true");
} else {
    header("Location: consultarReg.php?result=false");
}

?>