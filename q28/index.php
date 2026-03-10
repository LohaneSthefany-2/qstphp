<html>
<head>
<meta charset="UTF-8">
<title>Questão 26</title>
</head>
<body>

<form method="post">
<label>Digite um número de 1 a 5:</label>
<input type="number" name="num"><br><br>
<input type="submit" value="Mostrar">
</form>

<?php

if(isset($_POST['num'])){
$num = $_POST['num'];
switch($num){
case 1:
echo "Um";
break;
case 2:
echo "Dois";
break;
case 3:
echo "Três";
break;
case 4:
echo "Quatro";
break;
case 5:
echo "Cinco";
break;
default:
echo "Número inválido";
}
}
?>
</body>
</html>