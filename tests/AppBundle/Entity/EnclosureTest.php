<?php

namespace Tests\AppBundle\Entity;


use AppBundle\Entity\Enclosure;

class EnclosureTest
{
    public function testItHasNoDinosaursByDefault()
    {
        $enclosure = new Enclosure();

        $this->assertCount(0, $enclosure->getDinosaurs());
    }
}