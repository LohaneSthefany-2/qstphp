<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>questao17</title>
</head>
<body>

<form method="post">
<?php
for ($i = 1; $i <= 80; $i++) {
    echo "Número $i: ";
    echo "<input type='number' name='num$i'><br><br>";
}
?>
<input type="submit" value="Verificar">
</form>
<br><hr><br>
<?php
if ($_POST) {
    $contador = 0;
    for ($i = 1; $i <= 80; $i++) {
        $numero = $_POST["num$i"];
        if ($numero >= 10 && $numero <= 150) {
            $contador++;
        }
    }
    echo "Quantidade de números entre 10 e 150: $contador";
}
?>
</body>
</html>
