<?php

function exibir_missoes($numero){

    if ($numero == 1) {
        return'<p> captura de animais, concerto de cercas, entrega de encomenda</p>';
    } else if($numero == 2){
        return '<p> sequestros de pessoas, assassinatos em séries</p>';
    } else if($numero == 3){
        return '<p> Sombra na Fronteira do País do Fogo, Desaparecimento no Vale da Névoa </p>';
    } else if($numero == 4){
        return '<p> O Caminho do Daimyō, Roubo na Torre de Arquivos Proibidos</p>';
    } else if($numero == 5){
        return '<p> Sombras do Passado, A Ressurreição do Clã Proibido</p>';
    } 
}






?>