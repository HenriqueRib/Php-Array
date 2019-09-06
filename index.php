<?php declare(strict_types=1);

//namespace henrique;

require 'autoload.php';

            //Clases
//require 'Calculadora.php';
//require 'VetorUtils.php';

            //Funçoes
require 'function.php';

            //Variaveis

$nota = [9 , 10 , 3 , 5 , 7] ;
//$saldos = [2500, 3000, 4400, 1000, 8700, 9000];
//$nomes = "Giovana,João,Maria,Pedro";
$correntistas_e_compras = ["Giovanni", "João", 12, "Maria", 25, "Luis", "Luisa", "12",];

            //Chamada de funções

echo notasEscola($nota);
//echo ordenarSaldos($saldos);
//echo imprimeNomes($nomes);
echo removendoArray ($correntistas_e_compras);

