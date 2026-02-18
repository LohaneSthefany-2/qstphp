<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>questao18</title>
</head>
<body>
<form method="post">
<?php
for ($i = 1; $i <= 75; $i++) {
    echo "Pessoa $i: ";
    echo "<input type='number' name='idade$i'><br><br>";
}
?>
<input type="submit" value="Verificar">
</form>
<br><hr><br>
<?php
if ($_POST) {
    for ($i = 1; $i <= 75; $i++) {
        $idade = $_POST["idade$i"];
        if ($idade >= 18) {
            echo "Pessoa $i: Maior de idade<br>";
        } else {
            echo "Pessoa $i: Menor de idade<br>";
        }
    }
}
?>
</body>
</html>
