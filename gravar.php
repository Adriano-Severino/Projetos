<?php
include ("conexao_banco.php");




if ($_POST["Id"] == "0"){
    $tabelas = '(nome, nacimento, sexo, nacionalidade, endereco, estado, tel)';
    $valores = "(" . "'".$_POST["nome"]."'" . ', '. "'".$_POST["nacimento"]."'" .', ' . 
    "'".$_POST["sexo"]."'" . ', ' . "'".$_POST["nacionalidade"]."'" .', ' . "'".$_POST["endereco"]."'" . ', ' . 
    "'".$_POST["estado"]."'" . ', ' . "'".$_POST["tel"]."'" .")";
	$query = 'insert into clientes '. $tabelas. ' values'. $valores ;
    $conexao->query($query);






} else {
	$query = "UPDATE clientes set nome = '" . $_POST["nome"] . "' WHERE id = " . $_POST["Id"];
    $conexao->query($query);

    $query = "UPDATE clientes set nacimento = '" . $_POST["nacimento"] . "' WHERE id = " . $_POST["Id"];
    $conexao->query($query);


    $query = "UPDATE clientes set sexo = '" . $_POST["sexo"] . "' WHERE id = " . $_POST["Id"];
    $conexao->query($query);


    $query = "UPDATE clientes set nacionalidade = '" . $_POST["nacionalidade"] . "' WHERE id = " . $_POST["Id"];
    $conexao->query($query);


    $query = "UPDATE clientes set endereco = '" . $_POST["endereco"] . "' WHERE id = " . $_POST["Id"];
    $conexao->query($query);


    $query = "UPDATE clientes set estado = '" . $_POST["estado"] . "' WHERE id = " . $_POST["Id"];
    $conexao->query($query);

    $query = "UPDATE clientes set tel = '" . $_POST["tel"] . "' WHERE id = " . $_POST["Id"];
    $conexao->query($query);



}


$conexao->close();

include_once("consulta.php");

?>