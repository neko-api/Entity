<?php

namespace NekoAPI\Component\Entity\Test;

use PHPUnit\Framework\TestCase;
use NekoAPI\Component\Entity\Season;

/**
 * Class SeasonTest
 *
 * @package NekoAPI\Component\Entity\Test
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class SeasonTest extends TestCase
{
    /**
     * @var Season
     */
    private $entity;

    public function setUp()
    {
        $this->entity = new Season('default', 2017);
    }

    public function testSetterGetter()
    {
        $this->entity->setYear(2018);

        $this->assertEquals(2018, $this->entity->getYear());
    }

    public function testJsonSerialize()
    {
        $expected = ['name' => 'default', 'year' => 2017];

        $this->assertJsonStringEqualsJsonString(json_encode($expected), json_encode($this->entity));
    }
}
