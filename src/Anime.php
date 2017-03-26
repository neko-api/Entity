<?php

namespace NekoAPI\Component\Entity;

/**
 * Class Anime
 *
 * @package NekoAPI\Component\Entity
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class Anime extends BaseIdNameEntity
{
    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $url;

    /**
     * @var AlternativeTitles
     */
    private $alternativeTitles;

    /**
     * @var Information
     */
    private $information;

    /**
     * @var Statistics
     */
    private $statistics;

    /**
     * @var Episode[]
     */
    private $episodes;

    /**
     * @var string
     */
    private $synopsis;

    /**
     * @var string
     */
    private $background;

    public function __construct(int $id, string $slug, string $name)
    {
        parent::__construct($id, $name);

        $this->slug     = $slug;
        $this->episodes = [];
    }

    /**
     * @return string
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     *
     * @return Anime
     */
    public function setSlug(string $slug): Anime
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return string
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string $image
     *
     * @return Anime
     */
    public function setImage(string $image): Anime
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return Anime
     */
    public function setUrl(string $url): Anime
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return AlternativeTitles
     */
    public function getAlternativeTitles(): ?AlternativeTitles
    {
        return $this->alternativeTitles;
    }

    /**
     * @param AlternativeTitles $alternativeTitles
     *
     * @return Anime
     */
    public function setAlternativeTitles(AlternativeTitles $alternativeTitles): Anime
    {
        $this->alternativeTitles = $alternativeTitles;

        return $this;
    }

    /**
     * @return Information
     */
    public function getInformation(): ?Information
    {
        return $this->information;
    }

    /**
     * @param Information $information
     *
     * @return Anime
     */
    public function setInformation(Information $information): Anime
    {
        $this->information = $information;

        return $this;
    }

    /**
     * @return Statistics
     */
    public function getStatistics(): ?Statistics
    {
        return $this->statistics;
    }

    /**
     * @param Statistics $statistics
     *
     * @return Anime
     */
    public function setStatistics(Statistics $statistics): Anime
    {
        $this->statistics = $statistics;

        return $this;
    }

    /**
     * @return Episode[]
     */
    public function getEpisodes(): array
    {
        return $this->episodes;
    }

    /**
     * @param Episode[] $episodes
     *
     * @return Anime
     */
    public function setEpisodes(array $episodes): Anime
    {
        $this->episodes = $episodes;

        return $this;
    }

    /**
     * @param Episode $episode
     *
     * @return Anime
     */
    public function addEpisode(Episode $episode): Anime
    {
        $this->episodes[] = $episode;

        return $this;
    }

    /**
     * @return string
     */
    public function getSynopsis(): ?string
    {
        return $this->synopsis;
    }

    /**
     * @param string $synopsis
     *
     * @return Anime
     */
    public function setSynopsis(string $synopsis): Anime
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * @return string
     */
    public function getBackground(): ?string
    {
        return $this->background;
    }

    /**
     * @param string $background
     *
     * @return Anime
     */
    public function setBackground(string $background): Anime
    {
        $this->background = $background;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize(): array
    {
        return [
            'id'                 => $this->getId(),
            'slug'               => $this->getSlug(),
            'name'               => $this->getName(),
            'image'              => $this->getImage(),
            'url'                => $this->getUrl(),
            'alternative_titles' => $this->getAlternativeTitles(),
            'information'        => $this->getInformation(),
            'statistics'         => $this->getStatistics(),
            'episodes'           => $this->getEpisodes(),
            'synopsis'           => $this->getSynopsis(),
            'background'         => $this->getBackground(),
        ];
    }
}