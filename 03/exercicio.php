<?php
/*
1 - Crie um array contendo os dias da semana. Em seguida, exiba o terceiro dia da semana.
2 - Crie um array contendo meses do ano. Altere o valor do último elemento para Onzembro"
3 - Crie um array vazio. Adicione os números de 1 a 5 no array. Depois, adicione o número 6 ao final do array"
4 - Utilize um loop foreach para percorrer o array de meses do ano e exibir cada um.
5 - Conte quantos elementos o array de dias de semana possui.
6 - Utilize a função array_serach() para econtrar a posicao do dia "Sábado" no array e exiba o resultado.*/

// 1
$dias_semana = array ("Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo");
echo "O terceiro dia da semana é: " . $dias_semana[2] . "<br>";

echo "<hr>";

// 2
echo "<br>";

$meses = array ("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
print_r($meses);

echo "<br>";

$meses[11] = "Onzembro";
print_r($meses);

echo "<hr>"; 

// 3
$numeros = array();
$numeros = [1, 2, 3, 4, 5];
$numeros[] = 6;
print_r($numeros);

echo "<br>";
echo "<hr>";

// 4
echo "Meses do ano: <br>";
foreach($meses as $mes) {
    echo $mes . " , ";
}

echo "<br>";
echo "<hr>";

// 5
echo "Número de elementos no array de dias da semana é: " . count($dias_semana) . "<br>"; 

echo "<br>";
echo "<hr>";

// 6
echo "A posição do dia 'Sábado' é: " . array_search("Sábado", $dias_semana) . "<br>";

?>