<?php
/*
1 - Crie um array contendo os dias da semana. Em seguida, exiba o terceiro dia da semana.
2 - Crie um array contendo meses do ano. Altere o valor do último elemento para Onzembro"
3 - Crie um array vazio. Adicione os números de 1 a 5 no array. Depois, adicione o número 6 ao final do array"
4 - Utilize um loop foreach para percorrer o array de meses do ano e exibir cada um.
5 - Conte quantos elementos o array de dias de semana possui.
6 - Utilize a função array_serach() para econtrar a posicao do dia "Sábado" no array e exiba o resultado.*/

// 1
echo "<br>";
$dias_semana = array ("Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo");
echo "O terceiro dia da semana é: " . $dias_semana[2] . "<br>";

echo "<br>";
echo "<hr>";

// 2
echo "<br>";

$meses = array ("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
print_r($meses);

echo "<br>";
echo "<br>";

$meses[11] = "Onzembro";
print_r($meses);

echo "<br>";
echo "<hr>"; 

// 3
echo "<br>";
$numeros = array();
$numeros = [1, 2, 3, 4, 5];
$numeros[] = 6;
print_r($numeros);

echo "<br>";
echo "<hr>";

// 4
echo "<br>";
echo "Meses do ano: <br>";
foreach($meses as $mes) {
    echo $mes . " , ";
}

echo "<br>";
echo "<hr>";

// 5
echo "<br>";
echo "Número de elementos no array de dias da semana é: " . count($dias_semana) . "<br>"; 

echo "<br>";
echo "<hr>";

// 6
echo "<br>";
echo "A posição do dia 'Sábado' é: " . array_search("Sábado", $dias_semana) . "<br>";

?>

<?php


//VERSÃO DO PROFESSOR


/*
1 - Crie um array contendo os dias da semana. Em seguida, exiba o terceiro dia da semana.
2 - Crie um array contendo meses do ano. Altere o valor do último elemento para Onzembro"
3 - Crie um array vazio. Adicione os números de 1 a 5 no array. Depois, adicione o número 6 ao final do array"
4 - Utilize um loop foreach para percorrer o array de meses do ano e exibir cada um.
5 - Conte quantos elementos o array de dias de semana possui.
6 - Utilize a função array_serach() para econtrar a posicao do dia "Sábado" no array e exiba o resultado.
*/

# 1
$dias_da_semana = ["Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado", "Domingo"];
echo "1. O terceiro dia da semana é: " . $dias_da_semana[2] . "<br>";

# 2
$meses_do_ano = ["Janeiro", "Julho", "Agosto", "Novembro", "Dezembro"];
$meses_do_ano[count($meses_do_ano) - 1] = "Onzembro";
echo "O último mês do ano alterado para: " . end($meses_do_ano) . "<br>";

# 3
$numeros = [];
for($i = 1; $i <= 5; $i++) {
    $numeros[] = $i;
}
$numeros[] = 6;
print_r($numeros);
echo "<br>";

# 4 
foreach($meses_do_ano as $mes) {
    echo $mes . " ";
}
echo "<br>";

# 5
echo "O array de dias da semana possui: " . count($dias_da_semana) . " dias <br>";

# 6
$posicao_do_sabado = array_search("Sábado", $dias_da_semana);
echo "A posição do dia de sábado no array é: $posicao_do_sabado";
?>