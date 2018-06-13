<?php
include ("conexao_banco.php");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


$query = "DELETE from clientes WHERE id = " . $_GET["id"];

$conexao->query($query);

$conexao->close();

include_once("consulta.php");

?>