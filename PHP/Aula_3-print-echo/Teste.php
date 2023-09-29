<?php
    // O echo pode guardar mais de um elemento separado por vírgula, enquanto o print só pode concatenar    
    print "Bom "."dia";
    echo "Bom  ". "dia ", "amigos!";

    /*Print:
        Pode realizar operador ternário;
        Pode ser guardado numa variável;
        Pode ser retornado numa função.
        
      Echo:
        Pode mostrar quantos elementos quiser com virgula;
        É mais rápido que o print;
        É o mais utilizado nas ocasiões em que executa as mesmas ações que o print.  
    */
    $p = ($idade <10) ? print ('menor') : print('maior'); //Exemplo de operador ternário
//         Condição       True              False
   
?>