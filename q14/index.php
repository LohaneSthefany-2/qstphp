<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão14</title>
</head>
<body>
    <form method="post" action="">
        <label>primeiro número</label>
        <input type="number" name="num1" required><br><br>
        <label>segundo número</label>
        <input type="number" name="num2" required><br><br>
        <input type="submit" value="verificar">
    </form>
    <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        if ($num1<$num2) {
            echo "<h3>O número $num1 é menor que o número $num2</h3>";
        } else {
            echo "<h3>O número $num1 é maior ou igual ao número $num2</h3>";
        }

    ?>
    
</body>
</html>