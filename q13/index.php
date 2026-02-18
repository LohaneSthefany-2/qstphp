<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 13</title>
</head>
<body>
    <form method="post" action="">
        <label>Número que deseja verificar:</label>
        <input type="number" name="num" required><br><br>
        <input type="submit" name="resultado" value="resultado">
    </form>
    <?php
        
        $numero = $_POST['num'];
        $numero2 = $_POST['num2'];
        if ($numero > 10) {
            echo "<h3>O número é maior que 10</h3>";
        } else {
            echo "<h3>O número é menor ou então igual a 10</h3>";
        }

    ?>
    
</body>
</html>