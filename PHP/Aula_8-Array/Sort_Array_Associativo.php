<?php
$champ = array("Yasuo"=>"Fraco", "K'Sante"=>"Muito Forte", "Nocturne"=>"Bizarro", "Veigar"=>"Anão", "Ahri do Dynquedo"=>"💀");
ksort($champ);
foreach($champ as $crescenteChave => $x) {
    echo "Chave= " . $crescenteChave . ", Valor= " . $x;
    echo "<br>";
  }
echo "<br><br><br>";
asort($champ);
foreach($champ as $x => $crescenteValor){
  echo "Chave= " . $x . ", Valor= " . $crescenteValor;
  echo "<br>";
}
?>