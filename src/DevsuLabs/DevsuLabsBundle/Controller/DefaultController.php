<?php

namespace DevsuLabs\DevsuLabsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DevsuLabs\DevsuLabsBundle\Entity\DevsuLab;
use DevsuLabs\DevsuLabsBundle\Entity\Category;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
	public function testAction()
	{
		return new Response('Hello world!');
	}
	
    public function homeAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	
    	$arrDevsuLabs = $em->getRepository('DevsuLabsBundle:DevsuLab')->findAll();
    	$arrCategories = $em->getRepository('DevsuLabsBundle:Category')->findAll();
    	
        return $this->render('DevsuLabsBundle:public:home.html.twig', array(
            'arrDevsuLabs' => $arrDevsuLabs,
        	'arrCategories' => $arrCategories
        ));
    }

    public function manageAction()
    {
    	return $this->render('DevsuLabsBundle:public:manageDevsuLabs.html.twig');
    }

    public function newAction()
    {
    	return $this->render('DevsuLabsBundle:public:newDevsuLabs.html.twig');
    }

    public function loginAction()
    {
    	$request = $this->getRequest();
    	$sesion = $request->getSession();
    		
    	$error = $request->attributes->get(
    			SecurityContext::AUTHENTICATION_ERROR,
    			$sesion->get(SecurityContext::AUTHENTICATION_ERROR)
    	);
    		
    	return $this->render('DevsuLabsBundle:public:login.html.twig', array(
    			'last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
    			'error' => $error
    	));
    }
    
    public function findAction($id)
    {
    	$em = $this->getDoctrine()->getManager();
    	
    	if($id == 0)
    		$arrDevsuLabs = $em->getRepository('DevsuLabsBundle:DevsuLab')->findAll();
    	else 
    		$arrDevsuLabs = $em->getRepository('DevsuLabsBundle:DevsuLab')->findBy(array(
				'category' => $id
			));
    	
    	$arrCategories = $em->getRepository('DevsuLabsBundle:Category')->findAll();
    	
        return $this->render('DevsuLabsBundle:public:home.html.twig', array(
            'arrDevsuLabs' => $arrDevsuLabs,
        	'arrCategories' => $arrCategories
        ));
    }
}
