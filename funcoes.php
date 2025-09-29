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

/*
function calculadora($operacao){

    $valor1 = 2;
    $valor2 = 4;

    // se condição {}
    if ($operacao == "soma"){
        
        soma($valor1 , $valor2);
    
    } else if ($operacao == "subtracao"){
        
        subtracao($valor1 , $valor2);

    } else if ($operacao == "multiplicacao"){

        multiplicacao($valor1 , $valor2);
    
    } else{
        divisao($valor1 , $valor2);
    }

}

function soma($valor1, $valor2){
    echo "A soma é ". $valor1 + $valor2;
}

function subtracao($valor1, $valor2){
    echo "A subtração é ". $valor1 - $valor2;
}

function multiplicacao($valor1, $valor2){
    echo "A multiplicaçao é ". $valor1 * $valor2;
}

function divisao($valor1, $valor2){
    echo "A divisao é ". $valor1 / $valor2;
}


calculadora("soma");
calculadora("multiplicacao");

*/
/*
$pessoa = [
    'nome' => "William",
    'idade' => 21,
    'peso' => 67,
    'hobby' => ["Guitarra", "Jogos" , "Futebol","Filmes"]
];

function recomendar_lazer($hobby, $idade){

    // operação
    
    /* 
    
    operação unária -> ! -> NOT
    operação binária -> $idade >= 18
    operação ternária -> condição ? V : F 
    
    

    $adulto = $idade >= 18 ? true : False;


    if ($adulto >= 18 ){

        echo "-------- Conteúdos sensíveis --------";

        switch($hobby){
            case "Jogos":
                echo "Lista de Filmes";
                break;

            case "Futebol":
                echo "Lista de Partidas de futebol";
                break;
            default:
                echo "--- Lista génerica de conteúdo";    
                break;
        }
    } 

    echo "------- Conteúdos Gerais ---------";

     switch($hobby){
            case "Filmes":
                echo "Lista de Filmes";
                break;
            case "Guitarra":
                echo "Lista de músicas para aprender";
                break;
            default:
                echo "--- Lista génerica de conteúdo";    
                break;
        }

}

recomendar_lazer($pessoa['hobby'][0], $pessoa['idade']);

*/




// ------------ Revisão sobre funções 

function exibir_mensagem($texto, $senha){

    // condicionais


    if( $senha == 123){
          echo "Olá $texto estou dentro da função";
    } else if( $senha == 321 ){

    }else{

    }

}

exibir_mensagem("William", 123);

?>

