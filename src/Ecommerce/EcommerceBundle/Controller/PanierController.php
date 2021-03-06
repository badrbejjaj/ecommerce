<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;     
use Symfony\Component\HttpFoundation\Request;  

class PanierController extends Controller
{
    public function supprimerAction($id)
    {
            $session = new session();
            $panier = $session->get('panier');
            if(array_key_exists($id, $panier))
            {
                unset($panier[$id]);
                $session->set('panier',$panier);

            }

            return $this->redirect($this->generateUrl('panier'));
    }
    public function ajouterAction($id , Request $request)
    {   
                 $session = new Session();

        if (!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');
        
        if (array_key_exists($id, $panier)) {
            if ($request->query->get('qte') != null) $panier[$id] = $request->query->get('qte');
            $this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
        } else {
            if ($request->query->get('qte') != null)
                $panier[$id] = $request->query->get('qte');
            else
                $panier[$id] = 1;
            
            $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
        }
            
        $session->set('panier',$panier);
        
        
        return $this->redirect($this->generateUrl('panier'));
    }
    public function panierAction()
    {
        $session = new Session();
        //$session->remove('panier');
        if(!$session->has('panier')) $session->set('panier',array());

        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceBundle:Produits')->findArray(array_keys($session->get('panier')));


        return $this->render('EcommerceBundle:Default:panier/layout/panier.html.twig', array(
            'produits' => $produits,
            'panier' => $session->get('panier')
        ));
    }
    public function livraisonAction()
    {
        return $this->render('EcommerceBundle:Default:panier/layout/livraison.html.twig');
    }
    public function validationAction()
    {
        return $this->render('EcommerceBundle:Default:panier/layout/validation.html.twig');
    }
}
