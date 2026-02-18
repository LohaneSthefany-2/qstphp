<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
</head>
<body>
    <form method="post" action="">
        <label>Número 1:</label>
        <input type="number" name="num1" required><br><br>
        <label>Número 2:</label>
        <input type="number" name="num2" required><br><br>
        <input type="submit" name="resultado" value="resultado">
    </form>
    <?php
        
        $numero1 = $_POST['num1'];
        $numero2 = $_POST['num2'];
        $soma = $numero1 + $numero2;
        echo "<h3>O resultado da soma é: $soma</h3>";
        $subtraçao = $numero1 - $numero2;
        echo "<h3>O resultado da subtração é: $subtraçao</h3>";
        $multiplicaçao = $numero1 * $numero2;
        echo "<h3>O resultado da multiplicação é: $subtração";
        $divisão = $numero1 / $numero2;
        echo "<h3>O resultado da divisão é: $divisão";

    ?>
    
</body>
</html>