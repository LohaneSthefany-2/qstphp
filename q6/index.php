<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>questao6</title>
</head>
<body>

<h2>Trocar valores de A e B</h2>

<form method="post">
    Digite o valor de A:
    <input type="text" name="A" required>
    <br><br>
    Digite o valor de B:
    <input type="text" name="B" required>
    <br><br>
    <input type="submit" value="Trocar">
</form>

<?php

if ($_POST) {
    $A = $_POST["A"];
    $B = $_POST["B"];
    echo "<h3>Antes da troca:</h3>";
    echo "A = " . $A . "<br>";
    echo "B = " . $B . "<br>";
    $aux = $A;
    $A = $B;
    $B = $aux;
    echo "<h3>Depois da troca:</h3>";
    echo "A = " . $A . "<br>";
    echo "B = " . $B . "<br>";
}
?>

</body>
</html>
