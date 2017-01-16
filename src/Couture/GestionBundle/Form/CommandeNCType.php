<?php

namespace Couture\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommandeNCType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('client_id','entity', array(
                'class' => 'CoutureGestionBundle:Client',
                'choice_label' => 'telephone'
            ))
            ->add('nbModele', 'number', array(
                'attr' => array(
                    'placeholder' => 'Eg. 12'
                )
            ))
            ->add('Creation', 'submit')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Couture\GestionBundle\Entity\Commande'
        ));
    }


}