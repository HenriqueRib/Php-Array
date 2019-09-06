<?php declare(strict_types=1);

//namespace henrique;

function notasEscola ($nota)
{
    echo '<br> <br> <br> <br> <br> <br> <h1>' ;
    echo "A nota de Portugues é $nota[0] " . '<hr>' ;
    echo "A nota de Matematica é $nota[1] " . '<hr>'  ;
    echo "A nota de Geografia é $nota[2] " . '<hr>' ;
    echo "A nota de Historia é $nota[3] " . '<hr>' ;
    echo "A nota de Quimica é $nota[4] " . '<hr>' ;
    echo '</h1>' ;

    $calculadora = new Calculadora();
    $media = $calculadora->calculaMedia($nota);

    if ($media)
        echo "<p>A média é :$media</p>";
    else{
        echo "<p>Não foi possivel realizar o calculo da média !</p><br><h1>Chame o pessoal de TI! </h1>";
    }
}

//    Ordenação de array

function ordenarSaldos ($saldos)
{
    foreach ($saldos as $saldo){
        echo "<p>O saldo é: $saldo </p>";
    }

    echo "<pre>";
    var_dump($saldos); // Esse comando imprime na tela o Vetor

    sort($saldos);  // Esse comando Ordena o Vetor

    var_dump($saldos);  // Depois de aplicar o sorte ele imprimira na tela o vetor Ordenado
    echo "</pre>";

    echo "O menor saldo é $saldo[0]";

}

//        Explode e Implode
function imprimeNomes ($nomes)
{

// explode retorna uma array (Vetor)
    $vetor_nomes = explode(",",$nomes);

    foreach ($vetor_nomes as $nome) {
        echo "<p>Olá $nome</p>";
    }

    var_dump($vetor_nomes);

// implode retorna  em string
    $nomes_juntos = implode(", ", $vetor_nomes);

    echo "$nomes_juntos";
}


//          Removendo um array
function removendoArray ($correntistas_e_compras)
{

    echo "<pre>";
    var_dump($correntistas_e_compras);


    VetorUtils::remover("12", $correntistas_e_compras);

    echo "</pre>";
}