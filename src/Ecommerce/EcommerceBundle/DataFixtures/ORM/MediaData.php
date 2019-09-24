<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Ecommerce\EcommerceBundle\Entity\Media;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $media1 = new Media();
             $media1->setAlt('Legume');
             $media1->setPath('https://i-sam.unimedias.fr/2017/11/22/legumes.jpg');
             $manager->persist($media1);

        $media2 = new Media();
             $media2->setAlt('Fruit');
             $media2->setPath('https://www.snowgoose.com.au/site/assets/media/images/product-images-2016/Mixed-FruitAerial.png');
             $manager->persist($media2);

        $media3 = new Media();
             $media3->setAlt('Poivron rouge');
             $media3->setPath('https://happyinafrica.com/wp-content/uploads/2017/03/poivre-rouge.jpg');
             $manager->persist($media3);
        $media4 = new Media();
             $media4->setAlt('Piment');
             $media4->setPath('https://cache.marieclaire.fr/data/photo/w1000_c17/cuisine/18r/photo-de-piment.jpg');
             $manager->persist($media4);
        $media5 = new Media();
             $media5->setAlt('Tomate');
             $media5->setPath('https://www.auchandirect.fr/backend/media/products_images/0N_57387.jpg');
             $manager->persist($media5);
        $media6 = new Media();
             $media6->setAlt('Poivre vert');
             $media6->setPath('https://www.papillesetpupilles.fr/wp-content/uploads/2014/09/Poivre-vert-©YuryZap-shutterstock-550x0.jpg');
             $manager->persist($media6);

             $media7 = new Media();
             $media7->setAlt('Raisin');
             $media7->setPath('https://nuts.com/images/auto/801x534/assets/6a0ceb37844c3a84.jpg');
             $manager->persist($media7);

             $media8 = new Media();
             $media8->setAlt('Orange');
             $media8->setPath('https://www.nifeislife.com/images/300/FV00810.jpg');
             $manager->persist($media8);

        $manager->flush();

        $this->addReference('media1',$media1);
        $this->addReference('media2',$media2);
        $this->addReference('media3',$media3);
        $this->addReference('media4',$media4);
        $this->addReference('media5',$media5);
        $this->addReference('media6',$media6);
        $this->addReference('media7',$media7);
        $this->addReference('media8',$media8);
    }
    public function getOrder()
    {
        return 1;
    }
}