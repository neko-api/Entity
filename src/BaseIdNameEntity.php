<?php

namespace NekoAPI\Component\Entity;

/**
 * Class BaseIdNameEntity
 *
 * @package NekoAPI\Component\Entity
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
abstract class BaseIdNameEntity extends BaseNameEntity
{
    /**
     * @var int
     */
    private $id;

    public function __construct(int $id, string $name)
    {
        parent::__construct($name);

        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return BaseIdNameEntity
     */
    public function setId(int $id): BaseIdNameEntity
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize(): array
    {
        return [
            'id'   => $this->getId(),
            'name' => $this->getName(),
        ];
    }
}