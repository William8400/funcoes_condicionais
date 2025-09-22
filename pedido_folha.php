<?php


function qual_seu_cla($nome_ninja, $numero_ninja)
{

    echo "Ninja: " . $nome_ninja . "<br>";

    if ($numero_ninja == 1) {

        echo "Ninja do clã Uchiha! ";
        descricao_cla($numero_ninja);

    } else if ($numero_ninja == 2) {

        echo "Ninja do clã Hyuuga! ";
        descricao_cla($numero_ninja);

    } else if ($numero_ninja == 3) {

        echo "Ninja do clã Nara!";
        descricao_cla($numero_ninja);

    } else if ($numero_ninja == 4) {
        
        echo "Ninja do clã Aburame!";
        descricao_cla($numero_ninja);

    } else {

        echo  "Número do ninja inválido";
    }
}


?>




