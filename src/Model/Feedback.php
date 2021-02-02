<?php

declare(strict_types=1);

namespace Alura\Solid\Model;

/**
 * Class Feedback
 * @package Alura\Solid\Model
 */
class Feedback
{
    /**
     * @var int
     */
    private int $nota;

    /**
     * @var string|null
     */
    private ?string $depoimento;

    /**
     * Feedback constructor.
     * @param int $nota
     * @param string|null $depoimento
     */
    public function __construct(int $nota, ?string $depoimento)
    {
        if ($nota < 9 && empty($depoimento)) {
            throw new \DomainException("Depoimento obrigatório.");
        }

        $this->nota = $nota;
        $this->depoimento = $depoimento;
    }

    /**
     * @return int
     */
    public function getNota(): int
    {
        return $this->nota;
    }

    /**
     * @return string|null
     */
    public function getDepoimento(): ?string
    {
        return $this->depoimento;
    }
}
