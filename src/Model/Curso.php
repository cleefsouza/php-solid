<?php

declare(strict_types=1);

namespace Alura\Solid\Model;

/**
 * Class Curso
 * @package Alura\Solid\Model
 */
class Curso implements Pontuavel, Assistivel
{
    private const PONTO_FIXO = 100;

    /**
     * @var string
     */
    private string $nome;

    /**
     * @var array
     */
    private array $videos;

    /**
     * @var array
     */
    private array $feedbacks;

    /**
     * Curso constructor.
     * @param string $nome
     */
    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->videos = [];
        $this->feedbacks = [];
    }

    /**
     * @param Feedback $feedback
     */
    public function receberFeedback(Feedback $feedback): void
    {
        $this->feedbacks[] = $feedback;
    }

    /**
     * @param Video $video
     */
    public function adicionarVideo(Video $video)
    {
        if ($video->minutosDeDuracao() < 3) {
            throw new \DomainException('Video muito curto');
        }

        $this->videos[] = $video;
    }

    /**
     * @return array
     */
    public function recuperarVideos(): array
    {
        return $this->videos;
    }

    /**
     * @return int
     */
    public function recuperaPontuacao(): int
    {
        return self::PONTO_FIXO;
    }

    public function assistir(): void
    {
        array_map(fn($video) => $video->assistir, $this->recuperarVideos());
    }
}
