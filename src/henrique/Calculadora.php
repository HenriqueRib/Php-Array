<?php

//namespace henrique;

class Calculadora
{
    public function calculaMedia ($nota): ?float
    {
        $quantidadeNotas = sizeof($nota);

        if ($quantidadeNotas > 0) {

            $soma = 0;
            for ($i = 0; $i < $quantidadeNotas; $i++)
                $soma = $soma + $nota[$i];

            $media = $soma / $quantidadeNotas;
            return $media;
        }else{
            return null;
        }
    }

}