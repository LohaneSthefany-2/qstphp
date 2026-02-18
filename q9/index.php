!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 9</title>
</head>
<body>
    <form method="post" action="">
        <label>valor</label>
        <input type="number" name="num" required><br><br>
        <input type="submit" value="resultado">
    </form>
    <?php
        $valor = $_POST['num'];
        $rendimento = $valor * (0.70/100);
        $valorfinal = $valor + $rendimento;
        echo "O valor do produto é: $valorfinal <br>";
    ?>
    
</body>
</html>