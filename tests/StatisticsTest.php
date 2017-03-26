<?php

namespace NekoAPI\Component\Entity\Test;

use NekoAPI\Component\Entity\Score;
use NekoAPI\Component\Entity\Statistics;
use PHPUnit\Framework\TestCase;

/**
 * Class StatisticsTest
 *
 * @package NekoAPI\Component\Entity\Test
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class StatisticsTest extends TestCase
{
    /**
     * @var Statistics
     */
    private $entity;

    public function setUp()
    {
        $this->entity = new Statistics();
    }

    public function testSetterGetter()
    {
        $score = $this->getMockBuilder(Score::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->entity->setScore($score)
            ->setRanked(1)
            ->setPopularity(2)
            ->setMembers(3)
            ->setFavorites(4);

        $this->assertEquals($score, $this->entity->getScore());
        $this->assertEquals(1, $this->entity->getRanked());
        $this->assertEquals(2, $this->entity->getPopularity());
        $this->assertEquals(3, $this->entity->getMembers());
        $this->assertEquals(4, $this->entity->getFavorites());
    }

    public function testJsonSerialize()
    {
        $score = $this->getMockBuilder(Score::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->entity->setScore($score)
            ->setRanked(1)
            ->setPopularity(2)
            ->setMembers(3)
            ->setFavorites(4);

        $expected = ['score' => [], 'ranked' => 1, 'popularity' => 2, 'members' => 3, 'favorites' => 4];

        $this->assertJsonStringEqualsJsonString(json_encode($expected), json_encode($this->entity));
    }
}
