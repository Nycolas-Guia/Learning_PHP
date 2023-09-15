<!DOCTYPE html>
<html lang="pt-br">
<body>

<?php
$palavra = "Cachorro";
$frase = "A garrafa verde";

echo 'A palavra "' . $palavra . '" tem "' . strlen($palavra) . '" letras.<br><br>';

echo 'A frase "' . $frase . '"- tem "' . str_word_count($frase) . '" palavras.<br><br>';

echo 'A frase "' . $frase . '" fica "' . strrev($frase) . '" se fosse invertida.<br><br>';

echo 'A frase "' . $frase . '" tem a palavra verde em sua "' . strpos($frase, "verde") . '" colocação.<br><br>';

echo 'A frase "' . $frase . '" trocando verde por amarela "' . str_replace("verde", "amarela", $frase) . '".<br><br>';
?>

</body>
</html>