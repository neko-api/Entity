<?php

namespace NekoAPI\Component\Entity;

use DateTime;

/**
 * Class Information
 *
 * @package NekoAPI\Component\Entity
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class Information extends BaseEntity
{
    /**
     * @var Type
     */
    private $type;

    /**
     * @var int
     */
    private $episodes;

    /**
     * @var Status
     */
    private $status;

    /**
     * @var DateTime
     */
    private $airedFrom;

    /**
     * @var DateTime
     */
    private $airedTo;

    /**
     * @var Season
     */
    private $premiered;

    /**
     * @var string
     */
    private $broadcast;

    /**
     * @var Producer[]
     */
    private $producers;

    /**
     * @var Producer[]
     */
    private $licensees;

    /**
     * @var Producer[]
     */
    private $studios;

    /**
     * @var Source
     */
    private $source;

    /**
     * @var Genre[]
     */
    private $genres;

    /**
     * @var string
     */
    private $duration;

    /**
     * @var string
     */
    private $rating;

    public function __construct()
    {
        $this->producers = [];
        $this->licensees = [];
        $this->studios   = [];
        $this->genres    = [];
    }

    /**
     * @return Type
     */
    public function getType(): ?Type
    {
        return $this->type;
    }

    /**
     * @param Type $type
     *
     * @return Information
     */
    public function setType(Type $type): Information
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return int
     */
    public function getEpisodes(): ?int
    {
        return $this->episodes;
    }

    /**
     * @param int $episodes
     *
     * @return Information
     */
    public function setEpisodes(int $episodes): Information
    {
        $this->episodes = $episodes;

        return $this;
    }

    /**
     * @return Status
     */
    public function getStatus(): ?Status
    {
        return $this->status;
    }

    /**
     * @param Status $status
     *
     * @return Information
     */
    public function setStatus(Status $status): Information
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getAiredFrom(): ?DateTime
    {
        return $this->airedFrom;
    }

    /**
     * @param DateTime $airedFrom
     *
     * @return Information
     */
    public function setAiredFrom(DateTime $airedFrom): Information
    {
        $this->airedFrom = $airedFrom;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getAiredTo(): ?DateTime
    {
        return $this->airedTo;
    }

    /**
     * @param DateTime $airedTo
     *
     * @return Information
     */
    public function setAiredTo(DateTime $airedTo): Information
    {
        $this->airedTo = $airedTo;

        return $this;
    }

    /**
     * @return Season
     */
    public function getPremiered(): ?Season
    {
        return $this->premiered;
    }

    /**
     * @param Season $premiered
     *
     * @return Information
     */
    public function setPremiered(Season $premiered): Information
    {
        $this->premiered = $premiered;

        return $this;
    }

    /**
     * @return string
     */
    public function getBroadcast(): ?string
    {
        return $this->broadcast;
    }

    /**
     * @param string $broadcast
     *
     * @return Information
     */
    public function setBroadcast(string $broadcast): Information
    {
        $this->broadcast = $broadcast;

        return $this;
    }

    /**
     * @return Producer[]
     */
    public function getProducers(): array
    {
        return $this->producers;
    }

    /**
     * @param Producer[] $producers
     *
     * @return Information
     */
    public function setProducers(array $producers): Information
    {
        $this->producers = $producers;

        return $this;
    }

    /**
     * @param Producer $producer
     *
     * @return Information
     */
    public function addProducer(Producer $producer): Information
    {
        $this->producers[] = $producer;

        return $this;
    }

    /**
     * @return Producer[]
     */
    public function getLicensees(): array
    {
        return $this->licensees;
    }

    /**
     * @param Producer[] $licensees
     *
     * @return Information
     */
    public function setLicensees(array $licensees): Information
    {
        $this->licensees = $licensees;

        return $this;
    }

    /**
     * @param Producer $licensee
     *
     * @return Information
     */
    public function addLicensee(Producer $licensee): Information
    {
        $this->licensees[] = $licensee;

        return $this;
    }

    /**
     * @return Producer[]
     */
    public function getStudios(): array
    {
        return $this->studios;
    }

    /**
     * @param Producer[] $studios
     *
     * @return Information
     */
    public function setStudios(array $studios): Information
    {
        $this->studios = $studios;

        return $this;
    }

    /**
     * @param Producer $studio
     *
     * @return Information
     */
    public function addStudio(Producer $studio): Information
    {
        $this->studios[] = $studio;

        return $this;
    }

    /**
     * @return Source
     */
    public function getSource(): ?Source
    {
        return $this->source;
    }

    /**
     * @param Source $source
     *
     * @return Information
     */
    public function setSource(Source $source): Information
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return Genre[]
     */
    public function getGenres(): array
    {
        return $this->genres;
    }

    /**
     * @param Genre[] $genres
     *
     * @return Information
     */
    public function setGenres(array $genres): Information
    {
        $this->genres = $genres;

        return $this;
    }

    /**
     * @param Genre $genre
     *
     * @return Information
     */
    public function addGenre(Genre $genre): Information
    {
        $this->genres[] = $genre;

        return $this;
    }

    /**
     * @return string
     */
    public function getDuration(): ?string
    {
        return $this->duration;
    }

    /**
     * @param string $duration
     *
     * @return Information
     */
    public function setDuration(string $duration): Information
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return string
     */
    public function getRating(): ?string
    {
        return $this->rating;
    }

    /**
     * @param string $rating
     *
     * @return Information
     */
    public function setRating(string $rating): Information
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize(): array
    {
        return [
            'type'       => $this->getType(),
            'episodes'   => $this->getEpisodes(),
            'status'     => $this->getStatus(),
            'aired_from' => null !== $this->getAiredFrom() ? $this->getAiredFrom()->format('c') : null,
            'aired_to'   => null !== $this->getAiredTo() ? $this->getAiredTo()->format('c') : null,
            'premiered'  => $this->getPremiered(),
            'broadcast'  => $this->getBroadcast(),
            'producers'  => $this->getProducers(),
            'licensees'  => $this->getLicensees(),
            'studios'    => $this->getStudios(),
            'source'     => $this->getSource(),
            'genres'     => $this->getGenres(),
            'duration'   => $this->getDuration(),
            'rating'     => $this->getRating(),
        ];
    }
}