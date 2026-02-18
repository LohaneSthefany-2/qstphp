<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Questo16</title>
</head>
<body>
    <form method="post">
        <label>Nome do aluno</label><br>
        <input type="text" name="nome"><br><br>
        <label>Nota 1</label><br>
        <input type="number" name="nota1"><br><br>
        <label>Nota 2</label><br>
        <input type="number" name="nota2"><br><br>
        <label>Nota 3</label><br>
        <input type="number" name="nota3"><br><br>
        <input type="submit" value="Calcular Média">
</form>

<?php
if ($_POST) {
    $nome = $_POST["nome"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    $media = ($nota1 + $nota2 + $nota3) / 3;

    if ($media >= 7) {
        $mencao = "Aprovado";
    } elseif ($media <= 5) {
        $mencao = "Reprovado";
    } else {
        $mencao = "Recuperação";
    }

    echo "Aluno: " . $nome . "<br>";
    echo "Média: " . $media . "<br>";
    echo "Menção: " . $mencao;
}
?>

</body>
</html>
