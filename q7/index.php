!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 10</title>
</head>
<body>
    <form method="post" action="">
        <label>Número em celsius</label>
        <input type="number" name="celsius" required><br><br>
        <input type="submit" value="Converter">
    </form>
    <?php
        $celsius = $_POST['celsius'];
        $f = $celsius * 1.8 + 32;
        echo"A temperatura em celsius $celsius convertida para Fahrenheit é: $f";
    ?>
    
</body>
</html>