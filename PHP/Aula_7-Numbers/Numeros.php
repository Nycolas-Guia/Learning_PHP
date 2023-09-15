<!DOCTYPE html>
<html lang="pt-br">
<body>
    
<?php
//infinito
$x = 1.9e308;
var_dump($x);
?>

<?php
echo "<br><br>";

$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));
?>

<?php
echo "<br><br>";

//Transforma String ou Double em int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>

</body>
</html>