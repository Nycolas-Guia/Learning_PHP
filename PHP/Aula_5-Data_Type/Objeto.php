<!DOCTYPE html>
<html>
<body>
<?php
class Carro{
    public $cor;
    public $modelo;

    //Funçao base que é chamada automaticamente quando chamamos uma classe.
    public function __construct($modelo, $cor){
        $this->modelo = $modelo;
        $this->cor = $cor;
    }


    public function mensagem(){
        return "Meu carro é um " . $this->modelo . " " . $this->cor . "!☝🤓";
    }
}

    $meuCarro = new Carro("Volvo", "preto");
    echo $meuCarro -> mensagem();
    echo "<br>";
    $meuCarro = new Carro("Honda", "vermelho");
    echo $meuCarro -> mensagem();
?>

<!--Teste-->
<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>

</body>
</html>
