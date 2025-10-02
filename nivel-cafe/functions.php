
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


function exibirCard($DadosDosNinjas){

     echo $DadosDosNinjas['nome']."<br>";
     echo $DadosDosNinjas['clã']."<br>";

     echo rankMissao($DadosDosNinjas['nivel'])."<br>";

     echo $DadosDosNinjas['missoes_realizadas'][0]."<br>";
     echo $DadosDosNinjas['missoes_realizadas'][1]."<br>";
     echo $DadosDosNinjas['missoes_realizadas'][2]."<br>";
     echo $DadosDosNinjas['tem-filhos?'] ? 'sim' : 'não'."<br>";

}


?>


















