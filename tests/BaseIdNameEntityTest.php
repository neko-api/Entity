<?php

namespace NekoAPI\Component\Entity\Test;

use NekoAPI\Component\Entity\BaseIdNameEntity;
use PHPUnit\Framework\TestCase;

class BaseIdNameEntityTest extends TestCase
{
    /**
     * @var BaseIdNameEntity
     */
    private $entity;

    public function setUp()
    {
        $this->entity = new class(1, 'default') extends BaseIdNameEntity {};
    }

    public function testSetterGetter()
    {
        $this->entity->setId(1);
        $this->entity->setName('foo');

        $this->assertEquals(1, $this->entity->getId());
        $this->assertEquals('foo', $this->entity->getName());
    }

    public function testJsonSerialize()
    {
        $expected = ['id' => 1, 'name' => 'default'];

        $this->assertJsonStringEqualsJsonString(json_encode($expected), json_encode($this->entity));
    }
}
