<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 9</title>
</head>
<body>
    <form method="post" action="">
        <label>valor do produto</label>
        <input type="number" name="produto" required><br><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
        $produto = $_POST['produto'];
        $prestaçao = $produto / 5;
        echo "O valor do produto é: $produto <br>"; 
    ?>
    
</body>
</html>