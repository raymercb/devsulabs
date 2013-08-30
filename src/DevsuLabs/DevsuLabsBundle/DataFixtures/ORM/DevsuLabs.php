<?php
namespace DevsuLabs\DevsuLabsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use DevsuLabs\DevsuLabsBundle\Entity\DevsuLab;
use DevsuLabs\DevsuLabsBundle\Entity\Developer;
use DevsuLabs\DevsuLabsBundle\Entity\Category;

class DevsuLabs implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
    	$phpCategory = $manager->getRepository('DevsuLabsBundle:Category')->findOneBy(array(
    			'typeName' => 'Frameworks PHP'));
    	$andres = $manager->getRepository('DevsuLabsBundle:Developer')->findOneBy(array(
    			'email' => 'avillavicencio@devsu.com'));
    	$raymer = $manager->getRepository('DevsuLabsBundle:Developer')->findOneBy(array(
    			'email' => 'rconcepcion@devsu.com'));
    	
		$devsulab1 = new DevsuLab();
		$devsulab1->setTitle("Yii, a PHP Framework");
		$devsulab1->setDate(new \DateTime('08/17/2013'));
		$devsulab1->setSummary("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ultricies nunc nec sapien tincidunt facilisis. Nulla scelerisque blandit ligula eget hendrerit. Sed malesuada, enim sit amet ultricies semper, elit leo lacinia massa, in tempus nisl ipsum quis libero.");
		$devsulab1->setImage("yii.jpg");
		$devsulab1->setCategory($phpCategory);
		$devsulab1->setDeveloper($andres);
		
		$devsulab2 = new DevsuLab();
		$devsulab2->setTitle("Symfony2, a PHP Framework");
		$devsulab2->setDate(new \DateTime('08/30/2013'));
		$devsulab2->setSummary("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ultricies nunc nec sapien tincidunt facilisis. Nulla scelerisque blandit ligula eget hendrerit. Sed malesuada, enim sit amet ultricies semper, elit leo lacinia massa, in tempus nisl ipsum quis libero.");
		$devsulab2->setImage("symfony.jpg");
		$devsulab2->setCategory($phpCategory);
		$devsulab2->setDeveloper($raymer);
		
		$manager->persist($devsulab1);
		$manager->persist($devsulab2);
		
        $manager->flush();
    }
}
