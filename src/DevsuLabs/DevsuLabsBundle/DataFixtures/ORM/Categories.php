<?php
namespace DevsuLabs\DevsuLabsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use DevsuLabs\DevsuLabsBundle\Entity\Category;

class Categories implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
		$category1 = new Category();
		$category1->setTypeName("Mobile Applications");
		$category2 = new Category();
		$category2->setTypeName("Version Control Systems");
		$category3 = new Category();
		$category3->setTypeName("Web Technologies");
		$category4 = new Category();
		$category4->setTypeName("Frameworks PHP");
		$category5 = new Category();
		$category5->setTypeName("CMS");
		
		$manager->persist($category1);
		$manager->persist($category2);
		$manager->persist($category3);
		$manager->persist($category4);
		$manager->persist($category5);
		
        $manager->flush();
    }
}
