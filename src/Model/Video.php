<?php

declare(strict_types=1);

namespace Alura\Solid\Model;

use DateInterval;

/**
 * Class Video
 * @package Alura\Solid\Model
 */
class Video
{
    /** @var bool */
    protected bool $assistido = false;
    /** @var string */
    protected string $nome;
    /** @var DateInterval */
    protected DateInterval $duracao;

    /**
     * Video constructor.
     * @param string $nome
     */
    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->assistido = false;
        $this->duracao = DateInterval::createFromDateString('0');
    }

    public function assistir(): void
    {
        $this->assistido = true;
    }

    /**
     * @return int
     */
    public function minutosDeDuracao(): int
    {
        return $this->duracao->i;
    }

    /**
     * @return string
     */
    public function recuperarUrl(): string
    {
        return 'http://videos.alura.com.br/' . http_build_query(['nome' => $this->nome]);
    }
}
