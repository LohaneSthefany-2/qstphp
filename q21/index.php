<html>
<head>
<meta charset="UTF-8">
<title>Questão 17</title>
</head>
<body>

<form method="post">
<label>Digite um número:</label>
<input type="number" name="num"><br><br>
<input type="submit" value="Enviar">
</form>

<?php
$contador = 0;
if(isset($_POST['num'])){
for($i=1;$i<=80;$i++){
$num = $_POST['num'];
if($num >= 10 && $num <= 150){
$contador++;
}
}
echo "Quantidade entre 10 e 150: $contador";
}
?>
</body>
</html>