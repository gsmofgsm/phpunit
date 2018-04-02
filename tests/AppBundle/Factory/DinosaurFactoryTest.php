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

    public function testItGrowsATriceratops()
    {
        $this->markTestIncomplete('Waiting for confirmation from GenLab');
    }

    public function testItGrowsABabyVelociraptor()
    {
        if(!class_exists('Nanny')){
            $this->markTestSkipped('We must have nanny for babys');
        }
        $dinosaur = $this->factory->growVelociraptor(1);
        $this->assertSame(1, $dinosaur->getLength());
    }

    public function testItGrowsADinosaurFromASpecification()
    {
        $dinosaur = $this->factory->growFromSpecification('large carnivorous dinosaur');

        $this->assertGreaterThanOrEqual(Dinosaur::LARGE, $dinosaur->getLength());
        $this->assertTrue($dinosaur->isCarnivorous(), 'Diets do not match');
    }
}