<?php

namespace NekoAPI\Component\Entity\Test;

use NekoAPI\Component\Entity\Score;
use PHPUnit\Framework\TestCase;

/**
 * Class ScoreTest
 *
 * @package NekoAPI\Component\Entity\Test
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class ScoreTest extends TestCase
{
    /**
     * @var Score
     */
    private $entity;

    public function setUp()
    {
        $this->entity = new Score(6.9, 1000);
    }

    public function testSetterGetter()
    {
        $this->entity->setScore(1.23);
        $this->entity->setScoredBy(999);

        $this->assertEquals(1.23, $this->entity->getScore());
        $this->assertEquals(999, $this->entity->getScoredBy());
    }

    public function testJsonSerialize()
    {
        $expected = ['score' => 6.9, 'scored_by' => 1000];

        $this->assertJsonStringEqualsJsonString(json_encode($expected), json_encode($this->entity));
    }
}
