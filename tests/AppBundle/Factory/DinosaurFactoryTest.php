<?php

namespace Tests\AppBundle\Factory;

use AppBundle\Entity\Dinosaur;
use AppBundle\Factory\DinosaurFactory;
use PHPUnit\Framework\TestCase;

class DinosaurFactoryTest extends TestCase
{
    /**
     * @var DinosaurFactory
     */
    private $factory;

    public function setUp()
    {
        $this->factory = new DinosaurFactory();
    }

    public function testItGrowsAVelociraptor()
    {
        $dinosaur = $this->factory->growVelociraptor(5);

        $this->assertInstanceOf(Dinosaur::class, $dinosaur);
        $this->assertInternalType('string', $dinosaur->getGenus());
        $this->assertSame('Velociraptor', $dinosaur->getGenus());
        $this->assertSame(5, $dinosaur->getLength());

        $dinosaur2 = $this->factory->growVelociraptor(6);

        $this->assertInstanceOf(Dinosaur::class, $dinosaur2);
        $this->assertInternalType('string', $dinosaur2->getGenus());
        $this->assertSame('Velociraptor', $dinosaur2->getGenus());
        $this->assertSame(6, $dinosaur2->getLength());
    }
}