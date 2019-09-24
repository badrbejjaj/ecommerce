<?php

namespace Page\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
	public function menuAction()
	{
		$em = $this->getDoctrine()->getManager();
		$pages = $em->getRepository('PageBundle:page')->findAll();

		return $this->render('PageBundle:Default:page/ModulesUsed/menu.html.twig',array(
				'pages'=>$pages
		));
	}
    public function pageAction($id)
    {
    	$em = $this->getDoctrine()->getManager();
		$page = $em->getRepository('PageBundle:page')->find($id);  	
        return $this->render('PageBundle:Default:page/layout/page.html.twig',array(
            'page'=>$page
        ));
    }
}
