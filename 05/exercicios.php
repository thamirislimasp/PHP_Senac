<?php
//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO


// Desafio 1: Contagem Regressiva
/*
    Crie um programa que solicite ao usuário um número inteiro positivo N e realize uma contagem regressiva até zero.
    Após cada contagem, exiba a mensagem "Falta X segundos" onde X representa o número de segundos restantes para chegar a zero.
*/

    $numero = 5; //Número fornecido pelo usuário.
    echo "CONTAGEM REGRESSIVA <br>";
    echo "<br>";

// Solução com for
    echo "Contagem usando o FOR <br>";
    echo "<br>";

    for($i = $numero; $i >= 0; $i--) {
        echo "Faltam $i segundos <br>";
    }
    echo "<br>";
    echo "<br>";

// Solução com while
    echo "Contagem usando o WHILE <br>";
    echo "<br>";

    $i = $numero;
    while($i >= 0) {
        echo "Faltam $i segundos <br>";
        $i--;
    }
    echo "<br>";
    echo "<br>";

// Solução com do-while
    echo "Contagem usando o DO-WHILE <br>";
    echo "<br>";

    $i = $numero;
    do {
        echo "Faltam $i segundos <br>";
        $i--;
    } while ($i >= 0);

    echo "<br>";
    echo "<hr>";


// Desafio 2: Tabuada
/*
    Crie um programa que exiba a tabuada de multiplicação de um número fornecido pelo usuário.
    A tabuada deve ser exibida de 1 até 10.
*/
    echo "TABUADA <br>";
    echo "<br>";

    $tabuada_numero = 8;

// Solução com o FOR
    echo "Usando o FOR <br>";
    echo "<br>";

    for ($num = 1; $num <= 10; $num++) {
        echo $tabuada_numero . " x " . $num . " = " . ($tabuada_numero*$num) . "<br>";

    }
    
    echo "<br>";

// Solução com while
    echo "Usando o WHILE <br>";
    echo "<br>";

    $contador = 1;

    while($contador <= 10) {
        echo $tabuada_numero . " x " . $contador . " = " . ($tabuada_numero*$contador) . "<br>";
        $contador++;
    }

    echo "<br>";
    echo "<hr>";
    

// Desafio 3: Sequência Fibonacci
/*
    A sequência de Fibonacci é uma sequência de números inteiros em que cada termo é a soma dos dois anteriores.
    Crie um programa que solicite ao usuário um número N e exiba os N primeiros termos da sequência de Fibonacci.
*/
    echo "SEQUÊNCIA FIBONACCI <br>";
    echo "<br>";    

// Solução com for
    echo "Usando o FOR <br>";
    echo "<br>";

    $anterior = 0;
    $atual = 1;
    $termos = 10;

    echo "$anterior $atual ";

    for($i = 2; $i <= $termos; $i++) {
        $proximo = $anterior + $atual;
        echo "$proximo ";
        $anterior = $atual;
        $atual = $proximo;
    }

    echo "<br>";
    echo "<br>";

// Solução com while
    echo "Usando o WHILE <br>";
    echo "<br>";

    $anterior = 0;
    $atual = 1;
    $termos = 10;

    $i = 2; 

    echo "$anterior $atual ";
    while($i <= $termos) {
        $proximo = $anterior + $atual;
        echo "$proximo ";
        $anterior = $atual;
        $atual = $proximo;
        $i++;
    }

    echo "<br>";
    echo "<br>";
    echo "<hr>";


//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO

// Atividade 1: Verificar se a soma de A + B é igual a C
/*
    Solicita três números inteiros ao usuário (A, B e C) e verifica se a soma de A e B é igual a C.
*/
    echo "<br>";

    $A = 5;
    $B = 10;
    $C = 15;

    $resultado = $A + $B;

    if($resultado == $C) {
        echo "A soma de A e B é igual a C <br>";
    } else {
        echo "A soma de A e B é diferente de C <br>";
    }

    echo "<br>";
    echo "<br>";
    echo "<hr>";


// Atividade 2: Calcular o quadrado de um número
/*
    Solicita ao usuário um número inteiro e calcula o quadrado desse número.
*/
    $numero = 8;

// Implementação do Cálculo do Quadrado

    $quadrado = $numero * $numero;

    echo "O quadrado de $numero é $quadrado <br>";

    echo "<br>";
    echo "<hr>";

// Atividade 3: Verificar se um número é par ou ímpar
/*
    Solicita ao usuário um número inteiro e verifica se ele é par ou ímpar.
*/
    $numero = 14;
// Implementação da Verificação de Paridade
    if($numero % 2 == 0) {
        echo "$numero é um número par <br>";
    } else {
        echo "$numero é um número ímpar <br>";
    }

    echo "<br>";
    echo "<hr>";

// Atividade 4: Calcular a média de três números
/*
    Solicita ao usuário três números e calcula a média aritmética entre eles.
*/
    $numero1 = 10;
    $numero2 = 15;
    $numero3 = 20;

// Implementação do Cálculo da Média
    $media = ($numero1 + $numero2 + $numero3) / 3;
    echo "A média entre $numero1 + $numero2 + $numero3 é: $media <br>";

    echo "<br>";
    echo "<hr>";

// Atividade 5: Verificar se um número é múltiplo de outro
/*
    Solicita ao usuário dois números e verifica se o primeiro é múltiplo do segundo.
*/
    $numeroMultiplo = 15;
    $multiploDe = 5;
// Implementação da Verificação de Múltiplo
    if($numeroMultiplo % $multiploDe == 0) {
        echo "$numeroMultiplo é múltiplo de $multiploDe <br>";
    } else {
        echo "$numeroMultiplo não é múltiplo de $multiploDe <br>";
    }

    echo "<br>";
    echo "<hr>";

//// Atividade 6: Conversão de Horas em Minutos
/*
    Solicita ao usuário a quantidade de horas e minutos e converte isso para o equivalente total de minutos.
*/
    $horas_string = "01:30";

// Implementação de Conversão de Horas em Minutos

    $horas = explode(":", $horas_string);
    $total_minutos = $horas[0] * 60 + $horas[1];

    echo "O equivalente total em minutos de $horas_string é: $total_minutos <br>";

    echo "<br>";
    echo "<hr>";

/// Atividade 7: Desenho de Pirâmide
/*
    Solicita ao usuário a altura de uma pirâmide (número de linhas) e desenha-a na tela usando asteriscos (*) em cada linha.
*/
    $altura_piramide = 5;

// Implementação de Desenho de Pirâmide
    for($i = 1; $i <= $altura_piramide; $i++) {
        for($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    echo "<br>";
    echo "<hr>";

//// Atividade 8: Contagem de Dígitos em um Número
/*
    Solicita ao usuário um número inteiro positivo e conta quantos dígitos esse número possui.
*/
    $numeroDigitos = 2048;
// Implementação de Contagem de Dígitos em um Número
    
    echo "A quantidade de dígitos do número $numeroDigitos é : " . strlen($numeroDigitos);

    echo "<br>";
    echo "<hr>";

//// Atividade 9: Verificação de Palíndromo
/*
    Solicita ao usuário uma palavra e verifica se ela é um palíndromo.
*/
    $palavra = "abbabba";

// Implementação de Verificação de Palíndromo

    $contrario_dela = strrev($palavra);

    if($palavra == $contrario_dela) {
        echo "A plavra $palavra é um palíndromo <br>";
    } else {
        echo "A plavra $palavra não é um palíndromo <br>";
    }    

    echo "<br>";
    echo "<hr>";


//// Atividade 10: Ordenação de Números
/*
    Solicita ao usuário três números inteiros e os exibe em ordem crescente.
*/
    $numero1 = 25;
    $numero2 = 1;
    $numero3 = 7;

// Implementação de Ordenação de Números




//// Atividade 11: Soma de Dígitos
/*
    Solicita ao usuário um número inteiro positivo e calcula a soma de todos os seus dígitos.
*/
    $numeroSoma = 599;

// Implementação de Soma de Dígitos

    $numeros_array = str_split($numeroSoma);
    $somaDigitos = array_sum($numeros_array);

    echo "A soma dos dígitos de $numeroSoma é: $somaDigitos";

?>