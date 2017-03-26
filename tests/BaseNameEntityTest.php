<?php

namespace NekoAPI\Component\Entity\Test;

use NekoAPI\Component\Entity\BaseNameEntity;
use PHPUnit\Framework\TestCase;

class BaseNameEntityTest extends TestCase
{
    /**
     * @var BaseNameEntity
     */
    private $entity;

    public function setUp()
    {
        $this->entity = new class('default') extends BaseNameEntity {};
    }

    public function testSetterGetter()
    {
        $this->entity->setName('foo');

        $this->assertEquals('foo', $this->entity->getName());
    }

    public function testJsonSerialize()
    {
        $expected = ['name' => 'default'];

        $this->assertJsonStringEqualsJsonString(json_encode($expected), json_encode($this->entity));
    }
}
