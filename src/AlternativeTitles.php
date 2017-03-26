<?php

namespace NekoAPI\Component\Entity;

/**
 * Class AlternativeTitles
 *
 * @package NekoAPI\Component\Entity
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class AlternativeTitles extends BaseEntity
{
    /**
     * @var string
     */
    private $english;

    /**
     * @var string
     */
    private $japanese;

    /**
     * @var array
     */
    private $synonyms;

    public function __construct(?string $english, ?string $japanese, array $synonyms = [])
    {
        $this->english  = $english;
        $this->japanese = $japanese;
        $this->synonyms = $synonyms;
    }

    /**
     * @return string
     */
    public function getEnglish(): ?string
    {
        return $this->english;
    }

    /**
     * @param string $english
     *
     * @return AlternativeTitles
     */
    public function setEnglish(string $english): AlternativeTitles
    {
        $this->english = $english;

        return $this;
    }

    /**
     * @return string
     */
    public function getJapanese(): ?string
    {
        return $this->japanese;
    }

    /**
     * @param string $japanese
     *
     * @return AlternativeTitles
     */
    public function setJapanese(string $japanese): AlternativeTitles
    {
        $this->japanese = $japanese;

        return $this;
    }

    /**
     * @return array
     */
    public function getSynonyms(): array
    {
        return $this->synonyms;
    }

    /**
     * @param array $synonyms
     *
     * @return AlternativeTitles
     */
    public function setSynonyms(array $synonyms): AlternativeTitles
    {
        $this->synonyms = $synonyms;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize(): array
    {
        return [
            'english'  => $this->getEnglish(),
            'japanese' => $this->getJapanese(),
            'synonyms' => $this->getSynonyms(),
        ];
    }
}