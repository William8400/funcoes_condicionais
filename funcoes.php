<?php

    // Entrada, Processamento e saída

    // Estruturas de dados -> Variáveis e Arrays (Indexado e associativo)

    // processamento

    // Estruturas funcionais e as Estruturas condicionais

    // Função é um bloco de código reutilizável que executa uma tarefa específica
/*
    function ola_mundo(){

        echo "Olá Mundo!";

    };
    // chamando a função
    ola_mundo();

*/


/*



function apresentar_autor(){

    $autor =[
        'nome' => "William Hidalgo Donato",
        'obras' => ["A IA", "O IA", "u IA"]
    ];
    
    echo "<h4> Autor:" . $autor['nome'] ."</h4>";
    echo "<h4> Obras:" . $autor['obras'][0]. ",".$autor['obras'][1].",".$autor['obras'][2]."</h4>";

    
};  


function apresentar_post($titulo, $subtitulo, $paragrafo){

    echo "<h1>  $titulo  </h1>";
    
    
    echo "<h3> $subtitulo </h3>";

    apresentar_autor();
    
    echo "<p>  $paragrafo </p>";

};

apresentar_post("IA em programação", "como a IA afeta as profissões do futuro", "A Ia chegou nas nossas vidas...");

*/

function calculadora(){

    $valor1 = 2;
    $valor2 = 4;

    soma($valor1 , $valor2);
    
    subtracao($valor1 , $valor2);
    
    multiplicacao($valor1 , $valor2);
    
    divisao($valor1 , $valor2);

}

function soma($valor1, $valor2){
    echo "A soma é". $valor1 + $valor2;
}

function subtracao($valor1, $valor2){
    echo "A subtração é". $valor1 - $valor2;
}

function multiplicacao($valor1, $valor2){
    echo "A multiplicaçao é". $valor1 * $valor2;
}

function divisao($valor1, $valor2){
    echo "A divisao é". $valor1 / $valor2;
}


calculadora();


?>

