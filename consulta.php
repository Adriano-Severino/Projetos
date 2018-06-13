<?php

include ("conexao_banco.php");


//$query = "SELECT * FROM clientes";
$query = "SELECT id, nome, nacimento, sexo, nacionalidade, endereco, estado, tel FROM  clientes";

$result = $conexao->query($query);


?>

<!DOCTYPE html>
<html>
<head>
    <title>Consulta de Cliente</title>
</head>
<body>
    <h1>Consulta de Clientes</h1>
    <table width="1367" border="1">
        <thead>
            <td style="width: 400px;">Clientes</td>
            <td colspan="6">Ação</td>
        </thead>
        <tbody><?php
            echo "<tr>";
            echo '<th scope="col">Nome</th>';
            echo '<th scope="col">Nacimento</th>';
            echo  '<th scope="col">Sexo</th>';
            echo  '<th scope="col">Nacionalidade</th>';
            echo '<th  scope="col">Endereço</th>';
            echo '<th scope="col">Estado</th>';
            echo '<th scope="col">Telefone</th>';
            echo '</tr>';
        while ($row = $result->fetch_assoc()) {
        
            echo '<tr>';
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>" . $row["nacimento"] . "</td>";
            echo "<td>" . $row["sexo"] . "</td>";
            echo "<td>" . $row["nacionalidade"] . "</td>";
            echo "<td>" . $row["endereco"] . "</td>";
            echo "<td>" . $row["estado"] . "</td>";
            echo "<td>" . $row["tel"] . "</td>";
            
            echo "<td><a href='cadastro.php?id=" . $row["id"] . "'>Alterar</a></td>";
            echo "<td><a href='excluir.php?id=" . $row["id"] . "'>Excluir</a></td>";
            echo '</tr>';
}
/* free result set */
$result->close();
?>
</table>
<p><a href="cadastro.php?id=0">Novo Cliente</a></p><hr>
</body>
</html>

<?php
/* close connection */
$conexao->close();
?>


