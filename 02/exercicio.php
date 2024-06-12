<?php
   
    // Exercício 1 - Índice de Massa Corporal (IMC):
    // Solicite ao usuário que insira sua altura (em metros) e peso (em quilogramas). Calcule o IMC usando a fórmula IMC = peso / (altura * altura). Exiba o resultado e informe se o usuário está abaixo do peso, com peso normal, com sobrepeso ou obeso, com base nos intervalos de IMC padrão. */

    $altura = 1.69;
    $peso = 70;

    $imc = $peso / ($altura * $altura);

    echo "Seu IMC é: $imc <br>";

    echo "<br>";

    if ($imc < 18.4) {
        echo "Você está muito abaixo do peso <br>";
    } else if ($imc >= 18.5 && $imc <= 24.9) {
        echo "Seu peso está normal. <br>";
    } else if ($imc >= 25 && $imc <= 29.9) {
        echo "Você está acima do peso. <br>";
    } else if ($imc >= 30 && $imc <= 34.9) {
        echo "Você está obeso grau I. <br>";
    } else if ($imc >= 35 && $imc <= 39.9) {
        echo "Você está obeso grau II. <br>";
    }  else {
        echo "Você está obeso grau III. <br>";
    }

    // Exercício 2 - Verificação de Pagamento:
    // Pergunte ao usuário se ele tem saldo na conta (booleano). Se tiver, pergunte se ele deseja fazer uma compra. Se a resposta for afirmativa, peça ao usuário para inserir o valor da compra (float). Verifique se o valor da compra é menor ou igual ao saldo disponível e informe se a transação foi concluída com sucesso ou se o saldo é insuficiente.
    echo "<br>";

    $tem_saldo = true;
    $quer_comprar = true;

    $efetuar_operacao = $tem_saldo && $quer_comprar;
    echo "Você tem saldo e quer concluir uma operacao? <br>" . ($efetuar_operacao? "Sim" : "Não");    

    $saldo = 60.15;
    $compra = 75.99;

    if ($saldo < $compra){
        echo "Seu saldo é insuficiente <br>";
    } else ($saldo > $compra) {
        echo ""
    }




    // Exercício 3 - Conversor de Temperatura:
    // Solicite ao usuário que insira uma temperatura em Celsius (float). Converta essa temperatura para Fahrenheit usando a fórmula: Fahrenheit = (Celsius * 9/5) + 32. Exiba o resultado da conversão.

    // Exercício 4 - Verificação de Acesso:
    // Pergunte ao usuário se ele é maior de idade (booleano). Se ele for maior de idade, pergunte se ele possui autorização dos pais (booleano). Com base nas respostas, determine se o usuário tem acesso ao conteúdo restrito.

    // Desafio: Verificação de Números Primos:
    // Peça ao usuário que insira um número inteiro (int) e verifique se ele é um número primo. Use um booleano para indicar se o número é primo ou não.

    // PS.: Ao invés de solicitar ao usuário de fato, pode declarar uma variável com o valor diretamente no código.
    // EX: $altura = 1.75;

?>