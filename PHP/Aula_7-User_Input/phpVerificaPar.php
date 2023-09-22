<?php         
        if($_GET["num"] % 2 == 0)
            echo $_GET["num"], " é par 👌";
        else 
           echo $_GET["num"], " não é par 😒";
           exit();
    ?>