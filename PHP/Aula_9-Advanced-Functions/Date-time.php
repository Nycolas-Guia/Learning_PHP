<!DOCTYPE html>
<html lang="pt-br">
<body>

<?php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set("America/Sao_Paulo");
echo "Hoje é " . strftime("%d/%m/%Y") . "<br>";
echo "Hoje é " . strftime("%d.%m.%Y") . "<br>";
echo "Hoje é " . strftime("%d-%m-%Y") . "<br>";
echo "Hoje é " . strftime("%A") . "<br>";
echo "Hoje é " . strftime("%G") . "<br>";
echo "Agora são " . strftime("%H:%M:%S");// ou %T
?>

</body>
</html>
