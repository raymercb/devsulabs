<?php
namespace DevsuLabs\DevsuLabsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use DevsuLabs\DevsuLabsBundle\Entity\Developer;

class Developes implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
		$developer1 = new Developer();
		$developer1->setName("Andres Villavicencio");
		$developer1->setEmail("avillavicencio@devsu.com");
		$developer1->setPassword("Eti36Ru/pWG6WfoIPiDFUBxUuyvgMA4L8+LLuGbGyqV9ATuT9brCWPchBqX5vFTF+DgntacecW+sSGD+GZts2A==");
		
		$developer2 = new Developer();
		$developer2->setName("Raymer Concepcion");
		$developer2->setEmail("rconcepcion@devsu.com");
		$developer2->setPassword("Eti36Ru/pWG6WfoIPiDFUBxUuyvgMA4L8+LLuGbGyqV9ATuT9brCWPchBqX5vFTF+DgntacecW+sSGD+GZts2A==");
		
		$manager->persist($developer1);
		$manager->persist($developer2);
		
        $manager->flush();
    }
}
