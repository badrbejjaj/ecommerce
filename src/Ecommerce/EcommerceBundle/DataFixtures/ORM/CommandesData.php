<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Ecommerce\EcommerceBundle\Entity\Commandes;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class CommandesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $Commande1 = new Commandes();
             $Commande1->setUtilisateur($this->getReference('utilisateur1'));
             $Commande1->setValider('1');
             $Commande1->setDate(new \DateTime());
             $Commande1->setReference('1');
             $Commande1->setProduits(array( '0'=> array('1' => '2'),
                                            '1'=> array('2' => '1'),
                                            '2'=> array('4' => '5')));
             $manager->persist($Commande1);

        $Commande2 = new Commandes();
             $Commande2->setUtilisateur($this->getReference('utilisateur3'));
             $Commande2->setValider('Catelain');
             $Commande2->setDate(new \DateTime());
             $Commande2->setReference('1');
             $Commande2->setProduits(array( '0'=> array('1' => '2'),
                                            '1'=> array('2' => '1'),
                                            '2'=> array('4' => '5')));
             $manager->persist($Commande2);
       

        $manager->flush();
    }
    public function getOrder()
    {
        return 7;
    }
}



