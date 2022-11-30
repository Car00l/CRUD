<!doctype html>
<html lang="pt-br">
<head>
    <title>Matricula</title>
    <meta charset="utf-8">
</head>

<body>
    <form method="post" action="adiciona_matricula.php">

        <select name="escolha_aluno">
            <option>Selecione um Aluno:</option>
            <?php
            include 'conexao.php';
            $consulta = "SELECT * FROM alunos";
            $consulta_aluno = mysqli_query($conexao, $consulta);
            while($linha = mysqli_fetch_array($consulta_aluno)){
                echo '<option value="'.$linha['ID'].'">'.
                $linha['Nome'] .'</option>';
            }
            ?>
        </select>

        <select name="escolha_curso">
            <option>Selecione um Curso:</option>
            <?php
            include 'conexao.php';
            $consulta = "SELECT * FROM cursos";
            $consulta_curso = mysqli_query($conexao, $consulta);
            while($linha = mysqli_fetch_array($consulta_curso)){
                echo '<option value="'.$linha['Codigo'].'">'.
                $linha['Nome'] .'</option>';
            }
            ?>
        </select>

    </form>
</body>

</html>