<?php
/**
 * Created by PhpStorm.
 * User: gsm
 * Date: 2018/4/1
 * Time: 0:26
 */

namespace AppBundle\Factory;


use AppBundle\Entity\Dinosaur;

class DinosaurFactory
{
    public function growVelociraptor(int $length): Dinosaur
    {
        $dinosaur = new Dinosaur('Velociraptor', false);
        $dinosaur->setLength(5);
        return $dinosaur;
    }
}