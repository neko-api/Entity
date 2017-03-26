<?php

namespace NekoAPI\Component\Entity\Test;

use NekoAPI\Component\Entity\AlternativeTitles;
use PHPUnit\Framework\TestCase;

/**
 * Class AlternativeTitlesTest
 *
 * @package NekoAPI\Component\Entity\Test
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class AlternativeTitlesTest extends TestCase
{
    /**
     * @var AlternativeTitles
     */
    private $entity;

    public function setUp()
    {
        $this->entity = new AlternativeTitles('Arigato', 'ありがと', ['thanks', 'thank you']);
    }

    public function testSetterGetter()
    {
        $this->entity->setEnglish('kawai');
        $this->entity->setJapanese('かわい');
        $this->entity->setSynonyms(['cute', 'beautiful']);

        $this->assertEquals('kawai', $this->entity->getEnglish());
        $this->assertEquals('かわい', $this->entity->getJapanese());
        $this->assertEquals(['cute', 'beautiful'], $this->entity->getSynonyms());
    }

    public function testJsonSerialize()
    {
        $expected = ['english' => 'Arigato', 'japanese' => 'ありがと', 'synonyms' => ['thanks', 'thank you']];

        $this->assertJsonStringEqualsJsonString(json_encode($expected), json_encode($this->entity));
    }
}
