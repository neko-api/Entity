<?php

namespace NekoAPI\Component\Entity;

/**
 * Class Statistics
 *
 * @package NekoAPI\Component\Entity
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class Statistics extends BaseEntity
{
    /**
     * @var Score
     */
    private $score;

    /**
     * @var int
     */
    private $ranked;

    /**
     * @var int
     */
    private $popularity;

    /**
     * @var int
     */
    private $members;

    /**
     * @var int
     */
    private $favorites;

    /**
     * @return Score
     */
    public function getScore(): ?Score
    {
        return $this->score;
    }

    /**
     * @param Score $score
     *
     * @return Statistics
     */
    public function setScore(Score $score): Statistics
    {
        $this->score = $score;

        return $this;
    }

    /**
     * @return int
     */
    public function getRanked(): ?int
    {
        return $this->ranked;
    }

    /**
     * @param int $ranked
     *
     * @return Statistics
     */
    public function setRanked(int $ranked): Statistics
    {
        $this->ranked = $ranked;

        return $this;
    }

    /**
     * @return int
     */
    public function getPopularity(): ?int
    {
        return $this->popularity;
    }

    /**
     * @param int $popularity
     *
     * @return Statistics
     */
    public function setPopularity(int $popularity): Statistics
    {
        $this->popularity = $popularity;

        return $this;
    }

    /**
     * @return int
     */
    public function getMembers(): ?int
    {
        return $this->members;
    }

    /**
     * @param int $members
     *
     * @return Statistics
     */
    public function setMembers(int $members): Statistics
    {
        $this->members = $members;

        return $this;
    }

    /**
     * @return int
     */
    public function getFavorites(): ?int
    {
        return $this->favorites;
    }

    /**
     * @param int $favorites
     *
     * @return Statistics
     */
    public function setFavorites(int $favorites): Statistics
    {
        $this->favorites = $favorites;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize(): array
    {
        return [
            'score'      => $this->getScore(),
            'ranked'     => $this->getRanked(),
            'popularity' => $this->getPopularity(),
            'members'    => $this->getMembers(),
            'favorites'  => $this->getFavorites(),
        ];
    }


}