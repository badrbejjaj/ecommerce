<?php
namespace Utilisateur\UtilisateurBundle\DataFixtures\ORM;

use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class UtilisateursAdressesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $utilisateuradresse1 = new UtilisateursAdresses();
             $utilisateuradresse1->setUtilisateur($this->getReference('utilisateur1'));
             $utilisateuradresse1->setNom('Catelain');
             $utilisateuradresse1->setPrenom('Benjamin');
             $utilisateuradresse1->setTelephone('0600000000');
             $utilisateuradresse1->setAdresse('3 rue alberta rubosca');
             $utilisateuradresse1->setCp('76600');
             $utilisateuradresse1->setPays('France');
             $utilisateuradresse1->setVille('Le Havre');
             $utilisateuradresse1->setComplement('Face à l\'église');   
             $manager->persist($utilisateuradresse1);

        $utilisateuradresse2 = new UtilisateursAdresses();
             $utilisateuradresse2->setUtilisateur($this->getReference('utilisateur3'));
             $utilisateuradresse2->setNom('premier');
             $utilisateuradresse2->setPrenom('albert');
             $utilisateuradresse2->setTelephone('0600000000');
             $utilisateuradresse2->setAdresse('5 rue rubosca');
             $utilisateuradresse2->setCp('76600');
             $utilisateuradresse2->setPays('France');
             $utilisateuradresse2->setVille('Le Havre');
             $utilisateuradresse2->setComplement('Face à la plage');   
             $manager->persist($utilisateuradresse2);
       

        $manager->flush();

    //     $this->addReference('utilisateuradresse1',$utilisateuradresse1);
    //     $this->addReference('utilisateuradresse2',$utilisateuradresse2);
    // 
    }
    public function getOrder()
    {
        return 6;
    }
}



