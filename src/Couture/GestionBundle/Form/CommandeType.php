<?php

namespace Couture\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommandeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nbModele', 'number', array(
                'attr' => array(
                    'placeholder' => 'Eg. 12'
                )
            ))
            ->add('prenomClient','text', array(
                'attr' => array(
                    'placeholder' => 'minimum 2 caracteres'
                )
            ))
            ->add('telephoneClient', 'number', array(
                'attr' => array(
                    'placeholder' => 'Eg. 771112233 '
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