<?php

namespace Couture\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CommandeProduitType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('modele','entity', array(
                'class' => 'CoutureGestionBundle:Modele',
                'choice_label' => 'designation'
            ))
            ->add('quantite', 'number', array(
                'attr' => array(
                    'placeholder' => 'Eg. 771112233 '
                )
            ))
            ->add('Poursuivre', 'submit');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Couture\GestionBundle\Entity\CommandeProduit'
        ));
    }
    
    
}