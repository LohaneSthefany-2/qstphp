<html>
<head>
<meta charset="UTF-8">
<title>Questão 24</title>
</head>
<body>

<form method="post">
<label>Digite um número:</label>
<input type="number" name="num"><br><br>
<input type="submit" value="Verificar">
</form>

<?php
if(isset($_POST['num'])){
$num = $_POST['num'];
if($num > 0){
echo "Positivo";
}elseif($num < 0){
echo "Negativo";
}else{
echo "Zero";
}
}
?>
</body>
</html>