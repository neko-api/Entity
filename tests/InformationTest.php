<?php

namespace NekoAPI\Component\Entity\Test;

use NekoAPI\Component\Entity\Genre;
use NekoAPI\Component\Entity\Information;
use NekoAPI\Component\Entity\Producer;
use NekoAPI\Component\Entity\Season;
use NekoAPI\Component\Entity\Source;
use NekoAPI\Component\Entity\Status;
use NekoAPI\Component\Entity\Type;
use PHPUnit\Framework\TestCase;

/**
 * Class InformationTest
 *
 * @package NekoAPI\Component\Entity\Test
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class InformationTest extends TestCase
{
    /**
     * @var Information
     */
    private $entity;

    public function setUp()
    {
        $this->entity = new Information();
    }

    public function testSetterGetter()
    {
        $producers = [$this->getMock(Producer::class)];
        $type = $this->getMock(Type::class);
        $status = $this->getMock(Status::class);
        $from = new \DateTime('2012-12-12');
        $to = new \DateTime('2013-1-1');
        $season = $this->getMock(Season::class);
        $source = $this->getMock(Source::class);
        $genres = [$this->getMock(Genre::class)];

        $this->entity
            ->setType($type)
            ->setEpisodes(1)
            ->setStatus($status)
            ->setAiredFrom($from)
            ->setAiredTo($to)
            ->setPremiered($season)
            ->setBroadcast('1')
            ->setProducers($producers)
            ->setLicensees($producers)
            ->setStudios($producers)
            ->setSource($source)
            ->setGenres($genres)
            ->setDuration('1')
            ->setRating('2');

        $this->assertEquals($type, $this->entity->getType());
        $this->assertEquals(1, $this->entity->getEpisodes());
        $this->assertEquals($status, $this->entity->getStatus());
        $this->assertEquals($from, $this->entity->getAiredFrom());
        $this->assertEquals($to, $this->entity->getAiredTo());
        $this->assertEquals($season, $this->entity->getPremiered());
        $this->assertEquals('1', $this->entity->getBroadcast());
        $this->assertEquals($producers, $this->entity->getProducers());
        $this->assertEquals($producers, $this->entity->getLicensees());
        $this->assertEquals($producers, $this->entity->getStudios());
        $this->assertEquals($source, $this->entity->getSource());
        $this->assertEquals($genres, $this->entity->getGenres());
        $this->assertEquals('1', $this->entity->getDuration());
        $this->assertEquals('2', $this->entity->getRating());
    }

    public function testJsonSerialize()
    {
        $producers = [$this->getMock(Producer::class)];
        $type = $this->getMock(Type::class);
        $status = $this->getMock(Status::class);
        $from = new \DateTime('2012-12-12');
        $to = new \DateTime('2013-1-1');
        $season = $this->getMock(Season::class);
        $source = $this->getMock(Source::class);
        $genres = [$this->getMock(Genre::class)];

        $this->entity
            ->setType($type)
            ->setEpisodes(1)
            ->setStatus($status)
            ->setAiredFrom($from)
            ->setAiredTo($to)
            ->setPremiered($season)
            ->setBroadcast('1')
            ->setProducers($producers)
            ->addProducer($this->getMock(Producer::class))
            ->setLicensees($producers)
            ->addLicensee($this->getMock(Producer::class))
            ->setStudios($producers)
            ->addStudio($this->getMock(Producer::class))
            ->setSource($source)
            ->setGenres($genres)
            ->addGenre($this->getMock(Genre::class))
            ->setDuration('1')
            ->setRating('2');

        $expected = [
            'type' => [],
            'episodes' => 1,
            'status' => [],
            'aired_from' => '2012-12-12T00:00:00+00:00',
            'aired_to' => '2013-01-01T00:00:00+00:00',
            'premiered' => [],
            'broadcast' => '1',
            'producers' => [[], []],
            'licensees' => [[], []],
            'studios' => [[], []],
            'source' => [],
            'genres' => [[], []],
            'duration' => '1',
            'rating' => '2'
        ];

        $this->assertJsonStringEqualsJsonString(json_encode($expected), json_encode($this->entity));
    }

    private function getMock(string $class)
    {
        return $this->getMockBuilder($class)
            ->disableOriginalConstructor()
            ->getMock();
    }
}
