<?php

declare(strict_types=1);

namespace Alura\Solid\Model;

/**
 * Class AluraMais
 * @package Alura\Solid\Model
 */
class AluraMais extends Video implements Pontuavel, Assistivel
{
    /**
     * @var string
     */
    private string $categoria;

    /**
     * AluraMais constructor.
     * @param string $nome
     * @param string $categoria
     */
    public function __construct(string $nome, string $categoria)
    {
        parent::__construct($nome);
        $this->categoria = $categoria;
    }

    /**
     * @return string
     */
    public function recuperarUrl(): string
    {
        return 'http://videos.alura.com.br/' . str_replace(' ', '-', strtolower($this->categoria));
    }

    /**
     * @return int
     */
    public function recuperaPontuacao(): int
    {
        return $this->minutosDeDuracao() * 2;
    }
}
