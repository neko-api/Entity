<?php

namespace NekoAPI\Component\Entity\Test;

use DateTime;
use NekoAPI\Component\Entity\Episode;
use PHPUnit\Framework\TestCase;

/**
 * Class EpisodeTest
 *
 * @package NekoAPI\Component\Entity\Test
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class EpisodeTest extends TestCase
{
    /**
     * @var Episode
     */
    private $entity;

    public function setUp()
    {
        $this->entity = new Episode(6, 'default', new DateTime('2012-12-12'));
    }

    public function testSetterGetter()
    {
        $date = new DateTime('1111-11-11');

        $this->entity->setNumber(1);
        $this->entity->setAiredAt($date);

        $this->assertEquals(1, $this->entity->getNumber());
        $this->assertEquals($date->getTimestamp(), $this->entity->getAiredAt()->getTimestamp());
    }

    public function testJsonSerialize()
    {
        $expected = ['number' => 6, 'name' => 'default', 'aired_at' => '2012-12-12T00:00:00+00:00'];

        $this->assertJsonStringEqualsJsonString(json_encode($expected), json_encode($this->entity));
    }

    public function testNullAiredAtJsonSerialize()
    {
        $this->entity = new Episode(6, 'default');

        $expected = ['number' => 6, 'name' => 'default', 'aired_at' => null];

        $this->assertJsonStringEqualsJsonString(json_encode($expected), json_encode($this->entity));
    }
}
