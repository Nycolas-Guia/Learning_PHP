<!DOCTYPE html>
<html lang="pt-br">
<body>
<?php
$skin = array (
  array("Shaco Estrela Negra",1350,18),
  array("Zed Galante",1820,13),
  array("Katarina Academia de Batalha",1350,2),
  array("Gnar Astronauta",1350,15)
);
  
echo $skin[0][0].": Preço: ".$skin[0][1].", Vendas: ".$skin[0][2].".<br>";
echo $skin[1][0].": Preço: ".$skin[1][1].", Vendas: ".$skin[1][2].".<br>";
echo $skin[2][0].": Preço: ".$skin[2][1].", Vendas: ".$skin[2][2].".<br>";
echo $skin[3][0].": Preço: ".$skin[3][1].", Vendas: ".$skin[3][2].".<br>";
?>

</body>
</html>