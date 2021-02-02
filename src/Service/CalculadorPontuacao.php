<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\Pontuavel;

/**
 * Class CalculadorPontuacao
 * @package Alura\Solid\Service
 */
class CalculadorPontuacao
{
    /**
     * @param Pontuavel $conteudo
     * @return int
     */
    public function recuperarPontuacao(Pontuavel $conteudo)
    {
        return $conteudo->recuperaPontuacao();
    }
}
