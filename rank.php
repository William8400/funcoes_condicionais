<?php

require_once 'missoes.php';

function rank($numero){

    if ($numero == 1){
        echo "Rank = D";
        echo exibir_missoes($numero);
    } else if($numero == 2){
        echo "Rank = C";
        echo exibir_missoes($numero);
    } else if($numero == 3){
        echo 'Rank = B';
        echo exibir_missoes($numero);
    } else if($numero == 4){
        echo 'Rank = A';
        echo exibir_missoes($numero);
    }else if($numero == 5){
        echo 'Rank = S';
        echo exibir_missoes($numero);
    } else {
        echo 'Dattebayo! (だってばよ)';
    }




}




?>