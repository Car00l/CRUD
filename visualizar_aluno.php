<!doctype html>
<html lang="pt-br">
<head>
    <title>Visualizar Alunos</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>      

<table style=" border: 1px solid #ccc"> 
<thead>

<tr>
    <th> Nome do Aluno </th>
    <th> Idade </th>
    <th> Editar </th>
    <th> Excluir </th>
</tr>

</thead>
<tbody>


<?php

include 'conexao.php';

// Laço que percorre o banco de dados e transforma os dados em vetores
while ($linha = mysqli_fetch_array($consulta_aluno)){
    echo '<tr border 1px solid #ccc;><td border 1px solid #ccc;>' . $linha['Nome'] . '</td>';
    echo '<td>' . '<td border 1px solid #ccc;>' . $linha['Idade'] . '<td></tr>';
?>
</tbody>
<?php
}
?>

</table>
</html>