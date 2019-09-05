<?php


class Calculadora
{
    public function calculaMedia ($nota)
    {

        $quantidadeNotas = sizeof($nota);
        $soma=0;

        for ($i=0;$i<$quantidadeNotas;$i++)
            $soma=$soma+$nota[$i];

        $media = $soma / $quantidadeNotas;
        echo "<p>A média é : $media</p>" ;

    }

}