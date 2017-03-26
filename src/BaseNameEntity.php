<?php

namespace NekoAPI\Component\Entity;

/**
 * Class BaseNameEntity
 *
 * @package NekoAPI\Component\Entity
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
abstract class BaseNameEntity extends BaseEntity
{
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return BaseNameEntity
     */
    public function setName(string $name): BaseNameEntity
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize(): array
    {
        return [
            'name' => $this->getName(),
        ];
    }
}