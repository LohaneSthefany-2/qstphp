<html>
<head>
<meta charset="UTF-8">
<title>Questão 18</title>
</head>
<body>

<form method="post">
<label>Digite a idade:</label>
<input type="number" name="idade"><br><br>
<input type="submit" value="Verificar">
</form>

<?php
if(isset($_POST['idade'])){
$idade = $_POST['idade'];
for($i=1;$i<=75;$i++){
if($idade >= 18){
echo "Maior de idade <br>";
}else{
echo "Menor de idade <br>";
}
}
}
?>
</body>
</html>