<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>questao19</title>
</head>
<body>
<form method="post">
<?php
for ($i = 1; $i <= 56; $i++) {
    echo "<h4>Pessoa $i</h4>";
    echo "Nome: ";
    echo "<input type='text' name='nome$i'><br><br>";
    echo "Sexo (M ou F): ";
    echo "<input type='text' name='sexo$i'><br><br>";
}
?>
<input type="submit" value="Enviar">
</form>
<br><hr><br>
<?php
if ($_POST) {
    $totalHomens = 0;
    $totalMulheres = 0;
    for ($i = 1; $i <= 56; $i++) {
        $nome = $_POST["nome$i"];
        $sexo = $_POST["sexo$i"];
        if ($sexo == "M" || $sexo == "m") {
            echo "$nome é Homem<br>";
            $totalHomens++;
        } else if ($sexo == "F" || $sexo == "f") {
            echo "$nome é Mulher<br>";
            $totalMulheres++;
        }
    }
    echo "<br>Total de Homens: $totalHomens<br>";
    echo "Total de Mulheres: $totalMulheres";
}
?>
</body>
</html>
