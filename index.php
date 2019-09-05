<?php

require 'Calculadora.php' ;

$nota = [9 , 10 , 3 , 5 , 7] ;

echo '<br> <br> <br> <br> <br> <br> <h1>' ;
echo "A nota de Portugues é $nota[0] " . '<hr>' ;
echo "A nota de Matematica é $nota[1] " . '<hr>'  ;
echo "A nota de Geografia é $nota[2] " . '<hr>' ;
echo "A nota de Historia é $nota[3] " . '<hr>' ;
echo "A nota de Quimica é $nota[4] " . '<hr>' ;
echo '</h1>' ;

$calculadora = new Calculadora();
$calculadora->calculaMedia($nota);

