<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Form\RechercheType;
use Symfony\Component\HttpFoundation\Request;

class ProduitsController extends Controller
{
    public function produitsAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$produits = $em->getRepository('EcommerceBundle:Produits')->findBy(array('disponible'=>1));
        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig',array(
        	'produits'=>$produits
        ));
    }
    public function presentationAction($id)
    {
    	$em = $this->getDoctrine()->getManager();
    	$produits = $em->getRepository('EcommerceBundle:Produits')->find($id);
        return $this->render('EcommerceBundle:Default:produits/layout/presentation.html.twig',array(
        	'produit'=>$produits
        ));
    }

    public function categorieAction($categorie)
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceBundle:Produits')->byCategorie($categorie);
        return $this->render('EcommerceBundle:Default:categorie/layout/leyout.html.twig',array(
            'produits'=>$produits
            ));
    }

    public function rechercheAction()
    {
        $form = $this->createForm(RechercheType::class);
        return $this->render('EcommerceBundle:Default:recherche/modulesUsed/recherche.html.twig',array('form'=>$form->createView()));
    }

    public function rechercheTraitementAction(Request $request)
    {
        
        $form = $this->createForm(RechercheType::class);
        if($request->isMethod('POST'))
        {
            $form->submit($request->request->get($form->getName()));    
             $em = $this->getDoctrine()->getManager();
             $produits = $em->getRepository('EcommerceBundle:Produits')->recherche($form['recherche']->getData());
        }
        else {
            throw $this->createNotFoundException('La page n\'existe pas.');
        }

        return $this->render('EcommerceBundle:Default:recherche/layout/leyout.html.twig', array('produits'=>$produits));
    }


}

