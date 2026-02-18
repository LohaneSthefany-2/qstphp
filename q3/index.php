<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
</head>
<body>
    <form method="post" action="">
        <label>combústivel:</label>
        <input type="number" name="combústivel" required><br><br>
        <label>Distância:</label>
        <input type="number" name="distancia" required><br><br>
        <input type="submit" name="resultado" value="calcular">
    </form>
    <?php
        
        $comb = $_POST['combústivel'];
        $dist = $_POST['distancia'];
        $media = $dist / $comb;
        echo "<h3>a média é: $media<h3>";
    ?>
    
</body>
</html>