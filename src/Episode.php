<?php

namespace NekoAPI\Component\Entity;

use DateTime;

/**
 * Class Episode
 *
 * @package NekoAPI\Component\Entity
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class Episode extends BaseNameEntity
{
    /**
     * @var int
     */
    private $number;

    /**
     * @var DateTime
     */
    private $airedAt;

    public function __construct(int $number, string $name, DateTime $airedAt = null)
    {
        parent::__construct($name);

        $this->number  = $number;
        $this->airedAt = $airedAt;
    }

    /**
     * @return int
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * @param int $number
     *
     * @return Episode
     */
    public function setNumber(int $number): Episode
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getAiredAt(): ?DateTime
    {
        return $this->airedAt;
    }

    /**
     * @param DateTime $airedAt
     *
     * @return Episode
     */
    public function setAiredAt(DateTime $airedAt): Episode
    {
        $this->airedAt = $airedAt;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize(): array
    {
        return [
            'number'   => $this->getNumber(),
            'name'     => $this->getName(),
            'aired_at' => null !== $this->getAiredAt() ? $this->getAiredAt()->format('c') : null,
        ];
    }
}