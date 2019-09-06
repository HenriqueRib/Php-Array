<?php declare(strict_types=1);

//namespace henrique;

class VetorUtils
{
    public static function remover(string $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array, true);
        if (is_int($posicao)) {
            unset($array[$posicao]);
            echo var_dump($array);
        } else {
            echo "Elemento não encontrado no array";
    }
    }

}