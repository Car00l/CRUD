<?php

// Conxão no BANCO
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "escola";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die;

// seleciona os dados no banco
$consulta = "SELECT * FROM alunos";
$consulta_aluno = mysqli_query($conexao, $consulta);

?>