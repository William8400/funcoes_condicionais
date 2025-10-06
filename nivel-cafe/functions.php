
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
     
     echo "<strong>".$DadosDosNinjas['nome']."</strong><br>";
     
     echo "<ul>";
     
     echo "<li><strong>Clã:</strong> ".$DadosDosNinjas['clã']."</li><br>";
     
     echo "<li><strong>Nível:</strong>".rankMissao($DadosDosNinjas['nivel'])."</li><br>";
     
     echo $DadosDosNinjas['missoes_realizadas'][0]."<br>";
     echo $DadosDosNinjas['missoes_realizadas'][1]."<br>";
     echo $DadosDosNinjas['missoes_realizadas'][2]."<br>";
     
     echo $DadosDosNinjas['tem-filhos?'] ? 'sim<br><br>' : 'não'."<br><br>";

     echo "</ul";
}


?>


















