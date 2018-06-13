<?php
var_dump($_POST);
include ("conexao_banco.php");



$query = "SELECT * FROM clientes WHERE id = " . $_GET["id"];

$result = $conexao->query($query);

$id = "0";
$nome = "";
$nacionalidade = "";
$nacimento = "";
$sexo = "";
$endereco = "";
$estado = "";
$tel = "";

while ($row = $result->fetch_assoc()) {
	$id = $row["id"];
	$nome = $row["nome"];
    $nacionalidade = $row["nacionalidade"];
    $nacimento = $row["nacimento"];
    $sexo = $row["sexo"];
    $endereco = $row["endereco"];
    $estado = $row["estado"];
    $tel = $row["tel"];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Clientes</title>
</head>
<body>
    <h1>Cadastro de Clientes</h1>
    <form action="gravar.php" method="POST">
        <input type="hidden" name="Id" value="<?php echo $id; ?>" />
        <table border="1">
            <tr>
                <td>Nome:</td>
                <td style="width: 400px;">
                    <input type="text" name="nome" value="<?php echo $nome; ?>" />
                </td>

                <td>Nacionalidade</td>
                <td style="width: 400px;">
                    <input type="text" name="nacionalidade" value="<?php echo $nacionalidade; ?>" />
                </td>

                <td>Data de Nacimento</td>
                <td style="width: 400px;">
                    <input type="text" name="nacimento" value="<?php echo $nacimento; ?>" />
                </td>

                <td>sexo</td>
                <td style="width: 400px;">
                    <input type="text" name="sexo" value="<?php echo $sexo; ?>" />
                </td>

                <td>Endereço</td>
                <td style="width: 400px;">
                    <input type="text" name="endereco" value="<?php echo $endereco; ?>" />
                </td>

                <td>Estado</td>
                <td style="width: 400px;">
                    <input type="text" name="estado" value="<?php echo $estado; ?>" />
                </td>

                <td>Tel</td>
                <td style="width: 400px;">
                    <input type="text" name="tel" value="<?php echo $tel; ?>" />
                </td>

            </tr>
        </table>
        <input type="submit" name="gravar" value="gravar" />
        <a href="consulta.php">Voltar</a>
    </form>

</body>
</html>

<?php

$conexao->close();
?>