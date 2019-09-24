<?php 
namespace Ecommerce\EcommerceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;




class testType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Email',EmailType::class,array('attr'=>array('class'=>'form-control form-control-sm')))
        		->add('nom',TextType::class)
        		->add('prenom',TextType::class)
        		->add('sexe',ChoiceType::class,array('choices'=>array('Homme'=>'0','Femme'=>'0','Autre'=>'0')))
        		->add('contenu',TextareaType::class)
        		->add('date',DateType::class)
        		->add('pays',CountryType::class)
        		->add('Utilisateur',EntityType::class,array('class'=>'Utilisateur\UtilisateurBundle\Entity\Utilisateur'))
        		->add('attachment', FileType::class,array('attr'=>array('class'=>'custom-file-input')))
        		->add('Submit',SubmitType::class,array('attr'=>array('class'=>'btn btn-primary','style'=>'margin-bottom:20px')))
            ;
    }

    public function  getName()
    {
        return 'ecommerce_ecommercebundle_test';
    }

}