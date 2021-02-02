<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\Assistivel;

/**
 * Class Assistidor
 * @package Alura\Solid\Service
 */
class Assistidor
{
    /**
     * @param Assistivel $conteudo
     */
    public function assisteCurso(Assistivel $conteudo)
    {
        $conteudo->assistir();
    }
}
