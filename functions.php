
<?php


require_once "database.php";

function rankMissao($nivel)
{

    if ($nivel == 1) {
        return "Rank = A";
    } else if ($nivel == 2) {
        return "Rank = B";
    } else if ($nivel == 3) {
        return "Rank = C";
    } else if ($nivel == 4) {
        return "Rank = D";
    } else if ($nivel == 5) {
        return "Rank = S";
    } else {
        return "Dattebayo! (だってばよ)";
    }
}


function exibirCard($ninjas)
{
    echo '
    <div> 
    
    Nome: Clã: Nivel:  Missões realizadas:  Tem Filhos?     

    </div> ';


    
}


echo $ninjas['nome'];

?>


















