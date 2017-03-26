<?php

namespace NekoAPI\Component\Entity;

/**
 * Class Season
 *
 * @package NekoAPI\Component\Entity
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class Season extends BaseNameEntity
{
    /**
     * @var int
     */
    private $year;

    public function __construct(string $name, int $year)
    {
        parent::__construct($name);

        $this->year = $year;
    }

    /**
     * @return int
     */
    public function getYear(): ?int
    {
        return $this->year;
    }

    /**
     * @param int $year
     *
     * @return Season
     */
    public function setYear(int $year): Season
    {
        $this->year = $year;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize(): array
    {
        return [
            'name' => $this->getName(),
            'year' => $this->getYear(),
        ];
    }
}