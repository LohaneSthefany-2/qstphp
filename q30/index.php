<html>
<head>
<meta charset="UTF-8">
<title>Questão 29</title>
</head>
<body>

<form method="post">
<label>Digite o número do mês:</label>
<input type="number" name="mes"><br><br>
<input type="submit" value="Mostrar mês">
</form>

<?php
if(isset($_POST['mes'])){
$mes = $_POST['mes'];
switch($mes){
case 1:
echo "Janeiro";
break;
case 2:
echo "Fevereiro";
break;
case 3:
echo "Março";
break;
case 4:
echo "Abril";
break;
case 5:
echo "Maio";
break;
case 6:
echo "Junho";
break;
case 7:
echo "Julho";
break;
case 8:
echo "Agosto";
break;
case 9:
echo "Setembro";
break;
case 10:
echo "Outubro";
break;
case 11:
echo "Novembro";
break;
case 12:
echo "Dezembro";
break;
default:
echo "Mês inválido";
}
}
?>
</body>
</html>