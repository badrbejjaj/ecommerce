<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Ecommerce\EcommerceBundle\Entity\Produits;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ProduitsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $produit1 = new Produits();
             $produit1->setDescription(' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil excepturi maiores vero quisquam, iste, quam officiis in a est earum commodi itaque repellendus repudiandae accusamus provident ab neque reprehenderit unde. ');
             $produit1->setNom('Poivron Rouge');
             $produit1->setPrix('1.99');
             $produit1->setDisponible('1');
             $produit1->setCategorie($this->getReference('categorie1'));
             $produit1->setImage($this->getReference('media3'));
             $produit1->setTva($this->getReference('tva2'));
             $manager->persist($produit1);

        $produit2 = new Produits();
             $produit2->setDescription(' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil excepturi maiores vero quisquam, iste, quam officiis in a est earum commodi itaque repellendus repudiandae accusamus provident ab neque reprehenderit unde. ');
             $produit2->setNom('Piment');
             $produit2->setPrix('3.99');
             $produit2->setDisponible('1');
             $produit2->setCategorie($this->getReference('categorie1'));

             $produit2->setImage($this->getReference('media4'));
             $produit2->setTva($this->getReference('tva2'));
             $manager->persist($produit2);

        $produit3 = new Produits();
             $produit3->setDescription(' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil excepturi maiores vero quisquam, iste, quam officiis in a est earum commodi itaque repellendus repudiandae accusamus provident ab neque reprehenderit unde. ');
             $produit3->setNom('Tomate');
             $produit3->setPrix('0.99');
             $produit3->setDisponible('1');
             $produit3->setCategorie($this->getReference('categorie1'));
             $produit3->setImage($this->getReference('media5'));
             $produit3->setTva($this->getReference('tva2'));
             $manager->persist($produit3);

        $produit4 = new Produits();
             $produit4->setDescription(' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil excepturi maiores vero quisquam, iste, quam officiis in a est earum commodi itaque repellendus repudiandae accusamus provident ab neque reprehenderit unde. ');
             $produit4->setNom('Poivron vert');
             $produit4->setPrix('2.99');
             $produit4->setDisponible('1');
             $produit4->setCategorie($this->getReference('categorie1'));
             $produit4->setImage($this->getReference('media6'));
             $produit4->setTva($this->getReference('tva2'));
             $manager->persist($produit4);
        
        $produit5 = new Produits();
             $produit5->setDescription(' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil excepturi maiores vero quisquam, iste, quam officiis in a est earum commodi itaque repellendus repudiandae accusamus provident ab neque reprehenderit unde. ');
             $produit5->setNom('Raisin');
             $produit5->setPrix('1.99');
             $produit5->setDisponible('1');
             $produit5->setCategorie($this->getReference('categorie2'));
             $produit5->setImage($this->getReference('media7'));
             $produit5->setTva($this->getReference('tva2'));
             $manager->persist($produit5);

        $produit6 = new Produits();
             $produit6->setDescription(' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil excepturi maiores vero quisquam, iste, quam officiis in a est earum commodi itaque repellendus repudiandae accusamus provident ab neque reprehenderit unde. ');
             $produit6->setNom('Orange');
             $produit6->setPrix('1.20');
             $produit6->setDisponible('1');
             $produit6->setCategorie($this->getReference('categorie2'));
             $produit6->setImage($this->getReference('media8'));
             $produit6->setTva($this->getReference('tva2'));
             $manager->persist($produit6);


        $manager->flush();
    }
    public function getOrder()
    {
        return 4;
    }
}



