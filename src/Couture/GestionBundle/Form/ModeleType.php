<?php

namespace Couture\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ModeleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('designation','text', array(
                'attr' => array(
                    'placeholder' => 'minimum 2 caracteres',
                    'pattern'     => '.{2,}' //minlength
                )
            ))
            ->add('description','textarea', array(
                'attr' => array(
                    'placeholder' => 'minimum 2 caracteres'
                )
            ))
            ->add('typeModele','choice', array('choices' => array('Femme'=>'Femme','Homme'=>'Homme')))
            ->add('cout', 'number', array(
                'attr' => array(
                    'placeholder' => 'Eg. 771112233 '
                )
            ))
            ->add('dureeConfection', 'number', array(
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
            'data_class' => 'Couture\GestionBundle\Entity\Modele'
        ));
    }
    
    
}