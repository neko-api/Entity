<?php

namespace NekoAPI\Component\Entity;

/**
 * Class Score
 *
 * @package NekoAPI\Component\Entity
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class Score extends BaseEntity
{
    /**
     * @var float
     */
    private $score;

    /**
     * @var int
     */
    private $scoredBy;

    public function __construct(?float $score, ?int $scoredBy)
    {
        $this->score    = $score;
        $this->scoredBy = $scoredBy;
    }

    /**
     * @return float
     */
    public function getScore(): ?float
    {
        return $this->score;
    }

    /**
     * @param float $score
     *
     * @return Score
     */
    public function setScore(float $score): Score
    {
        $this->score = $score;

        return $this;
    }

    /**
     * @return int
     */
    public function getScoredBy(): ?int
    {
        return $this->scoredBy;
    }

    /**
     * @param int $scoredBy
     *
     * @return Score
     */
    public function setScoredBy(int $scoredBy): Score
    {
        $this->scoredBy = $scoredBy;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize(): array
    {
        return [
            'score'     => $this->getScore(),
            'scored_by' => $this->getScoredBy(),
        ];
    }
}