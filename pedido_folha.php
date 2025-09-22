<?php

require_once "bd_cla.php";
function qual_seu_cla($nome_ninja, $numero_ninja)
{

    echo "Ninja: " . $nome_ninja . "<br>";

    if ($numero_ninja == 1) {

        echo "Ninja do clã Uchiha! ";
        

    } else if ($numero_ninja == 2) {

        echo "Ninja do clã Hyuuga! ";
        

    } else if ($numero_ninja == 3) {

        echo "Ninja do clã Nara!";
        

    } else if ($numero_ninja == 4) {
        
        echo "Ninja do clã Aburame!";
        

    } else {

        echo  "Número do ninja inválido";
    }

     echo descricao_cla($numero_ninja);
}


?>




