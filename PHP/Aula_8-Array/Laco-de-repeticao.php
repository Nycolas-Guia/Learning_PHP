<!DOCTYPE html>
<html>
<body>

<?php  
$cars = array(" Volvo ", 25, " Toyota", "Amarelo");
echo "quantidade de indices do array: ". count($cars). "<br>";

for ($i = 0; $i < count($cars); $i++){
	echo "array " . ($i + 1) . " - " . $cars[$i] . "<br>";
}
?>  

</body>
</html>
