<?php

namespace NekoAPI\Component\Entity\Test;

use NekoAPI\Component\Entity\AlternativeTitles;
use NekoAPI\Component\Entity\Anime;
use NekoAPI\Component\Entity\Episode;
use NekoAPI\Component\Entity\Information;
use NekoAPI\Component\Entity\Statistics;
use PHPUnit\Framework\TestCase;

/**
 * Class AnimeTest
 *
 * @package NekoAPI\Component\Entity\Test
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class AnimeTest extends TestCase
{
    /**
     * @var Anime
     */
    private $entity;

    public function setUp()
    {
        $this->entity = new Anime(1, 'foo', 'foo');
    }

    public function testSetterGetter()
    {
        $alternativeTitle = $this->getMock(AlternativeTitles::class);
        $information = $this->getMock(Information::class);
        $statistics = $this->getMock(Statistics::class);
        $episodes = [$this->getMock(Episode::class)];

        $this->entity
            ->setSlug('foo')
            ->setImage('1')
            ->setUrl('2')
            ->setAlternativeTitles($alternativeTitle)
            ->setInformation($information)
            ->setStatistics($statistics)
            ->setEpisodes($episodes)
            ->setSynopsis('1')
            ->setBackground('2');

        $this->assertEquals('foo', $this->entity->getSlug());
        $this->assertEquals('1', $this->entity->getImage());
        $this->assertEquals('2', $this->entity->getUrl());
        $this->assertEquals($alternativeTitle, $this->entity->getAlternativeTitles());
        $this->assertEquals($information, $this->entity->getInformation());
        $this->assertEquals($statistics, $this->entity->getStatistics());
        $this->assertEquals($episodes, $this->entity->getEpisodes());
        $this->assertEquals('1', $this->entity->getSynopsis());
        $this->assertEquals('2', $this->entity->getBackground());
    }

    public function testJsonSerialize()
    {
        $alternativeTitle = $this->getMock(AlternativeTitles::class);
        $information = $this->getMock(Information::class);
        $statistics = $this->getMock(Statistics::class);
        $episodes = [$this->getMock(Episode::class)];

        $this->entity
            ->setImage('1')
            ->setUrl('2')
            ->setAlternativeTitles($alternativeTitle)
            ->setInformation($information)
            ->setStatistics($statistics)
            ->setEpisodes($episodes)
            ->addEpisode($this->getMock(Episode::class))
            ->setSynopsis('1')
            ->setBackground('2');

        $expected = [
            'id'                 => 1,
            'slug'               => 'foo',
            'name'               => 'foo',
            'image'              => '1',
            'url'                => '2',
            'alternative_titles' => [],
            'information'        => [],
            'statistics'         => [],
            'episodes'           => [[], []],
            'synopsis'           => '1',
            'background'         => '2',
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
